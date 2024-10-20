<?php

namespace App\Filament\Resources\BannerResource\Widgets;
use App\Models\Banner;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BannerOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Banners', Banner::name()),
            Stat::make('Total Number Of Downloads', Banner::count()),
        ];
    }
}
