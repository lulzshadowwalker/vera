<?php

namespace App\Providers\Filament;

use Filament\Enums\ThemeMode;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationItem;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->defaultThemeMode(ThemeMode::Light)
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->navigationItems([
                NavigationItem::make('telescope')
                    ->label('Telescope')
                    ->badge(fn (): string => '●')
                    ->badgeTooltip('Telescope helps track what happens behind the scenes in your app.')
                    ->url(fn (): string => ! app()->environment('testing') ? route('telescope') : '#', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-chart-bar-square')
                    ->group('Monitor')
                    ->visible(fn (): bool => ! app()->environment('testing') && Auth::user()->isAdmin),

                NavigationItem::make('pulse')
                    ->label('Pulse')
                    ->badge(fn (): string => '●')
                    ->badgeTooltip('Pulse provides real-time insights into your application\'s performance and health.')
                    ->url(fn (): string => route('pulse'), shouldOpenInNewTab: true)
                    ->icon('heroicon-o-heart')
                    ->group('Monitor')
                    ->visible(fn (): bool => ! app()->environment('testing') && Auth::user()->isAdmin),

                NavigationItem::make('horizon')
                    ->label('Horizon')
                    ->badge(fn (): string => '●')
                    ->badgeTooltip('Horizon gives you a simple way to manage and monitor background tasks.')
                    ->url(fn (): string => route('horizon.index'), shouldOpenInNewTab: true)
                    ->icon('heroicon-o-lifebuoy')
                    ->group('Monitor')
                    ->visible(fn (): bool => ! app()->environment('testing') && Auth::user()->isAdmin),
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
