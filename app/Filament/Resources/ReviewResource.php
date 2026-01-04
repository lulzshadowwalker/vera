<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewResource\Pages;
use App\Models\Review;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';

    protected static ?string $navigationGroup = 'Management';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
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

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('reviewerSupplier.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('reviewedSupplier.name')
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
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReviews::route('/'),
            'view' => Pages\ViewReview::route('/{record}'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
