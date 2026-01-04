<?php

namespace App\Filament\Resources\SupplierResource\Widgets;

use App\Models\Supplier;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SupplierStats extends BaseWidget
{
    public ?Supplier $record = null;

    protected function getStats(): array
    {
        if (! $this->record) {
            return [];
        }

        $reviews = $this->record->reviews;
        $count = $reviews->count();

        if ($count === 0) {
            return [
                Stat::make('Overall Rating', 'N/A')
                    ->description('No reviews yet'),
            ];
        }

        $metrics = [
            'quality',
            'accuracy',
            'communication',
            'cost',
            'compliance',
            'timeliness',
            'support',
        ];

        $stats = [
            Stat::make('Overall Rating', $this->record->average_rating)
                ->description("Based on {$count} reviews")
                ->color('primary')
                ->chart($reviews->pluck('average_score')->toArray()),
        ];

        foreach ($metrics as $metric) {
            $avg = $reviews->avg($metric);
            $stats[] = Stat::make(ucfirst($metric), number_format($avg, 1))
                ->chart($reviews->pluck($metric)->toArray());
        }

        return $stats;
    }
}
