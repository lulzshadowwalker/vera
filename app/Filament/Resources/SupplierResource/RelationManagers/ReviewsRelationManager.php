<?php

namespace App\Filament\Resources\SupplierResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class ReviewsRelationManager extends RelationManager
{
    protected static string $relationship = 'reviews';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Review Details')
                    ->aside()
                    ->description('General information about the review')
                    ->schema([
                        Forms\Components\Select::make('reviewer_supplier_id')
                            ->relationship('reviewerSupplier', 'name')
                            ->required(),
                        Forms\Components\Select::make('reviewed_supplier_id')
                            ->relationship('reviewedSupplier', 'name')
                            ->required(),
                        Forms\Components\Select::make('user_id')
                            ->relationship('user', 'name')
                            ->required(),
                        Forms\Components\DatePicker::make('deal_date')
                            ->required(),
                        Forms\Components\Toggle::make('deal_again')
                            ->required(),
                        Forms\Components\Toggle::make('anonymous')
                            ->required(),
                        Forms\Components\Toggle::make('published')
                            ->required(),
                        Forms\Components\Textarea::make('comment')
                            ->columnSpanFull(),
                    ]),
                Forms\Components\Section::make('Ratings')
                    ->aside()
                    ->description('Scores given by the reviewer')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('cost')
                                    ->required()
                                    ->numeric(),
                                Forms\Components\TextInput::make('accuracy')
                                    ->required()
                                    ->numeric(),
                                Forms\Components\TextInput::make('compliance')
                                    ->required()
                                    ->numeric(),
                                Forms\Components\TextInput::make('communication')
                                    ->required()
                                    ->numeric(),
                                Forms\Components\TextInput::make('quality')
                                    ->required()
                                    ->numeric(),
                                Forms\Components\TextInput::make('support')
                                    ->required()
                                    ->numeric(),
                                Forms\Components\TextInput::make('timeliness')
                                    ->required()
                                    ->numeric(),
                            ]),
                    ]),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('deal_date')
            ->columns([
                Tables\Columns\TextColumn::make('reviewerSupplier.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('deal_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cost')
                    ->numeric()
                    ->sortable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('accuracy')
                    ->numeric()
                    ->sortable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('compliance')
                    ->numeric()
                    ->sortable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('communication')
                    ->numeric()
                    ->sortable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('quality')
                    ->numeric()
                    ->sortable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('support')
                    ->numeric()
                    ->sortable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('timeliness')
                    ->numeric()
                    ->sortable()
                    ->alignCenter(),
                Tables\Columns\IconColumn::make('deal_again')
                    ->boolean()
                    ->alignCenter(),
                Tables\Columns\IconColumn::make('anonymous')
                    ->boolean()
                    ->alignCenter(),
                Tables\Columns\IconColumn::make('published')
                    ->boolean()
                    ->alignCenter(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                // Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
