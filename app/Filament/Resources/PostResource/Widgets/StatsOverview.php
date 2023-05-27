<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Post Count', Post::all()->Count())
                ->description('32k increase')
                ->descriptionIcon('heroicon-s-trending-up'),
            Card::make('Bounce rate', '21%')
                ->description('32k increase')
                ->descriptionIcon('heroicon-s-trending-up')
                ->color('success'),
            Card::make('Average time on page', '3:12')
                ->description('32k increase')
                ->descriptionIcon('heroicon-s-trending-up')
                ->color('danger'),
        ];
    }
}
