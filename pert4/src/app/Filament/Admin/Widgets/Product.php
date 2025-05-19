<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Product as ProductModel;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Product extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total of Product', ProductModel::count())
                ->description('Total of Product')
                ->color('image')
                ->icon('heroicon-m-shopping-bag'),
        ];
    }
}
