<?php

namespace JeffersonGoncalves\Filament\Plausible\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use JeffersonGoncalves\Plausible\Settings\PlausibleSettings;

class ManagePlausibleSettings extends SettingsPage
{
    protected static string $settings = PlausibleSettings::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-chart-bar';

    public static function getNavigationGroup(): ?string
    {
        return __('filament-plausible::pages.navigation_group');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-plausible::pages.navigation_label');
    }

    public function getTitle(): string
    {
        return __('filament-plausible::pages.title');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->schema([
                Section::make(__('filament-plausible::pages.sections.plausible.heading'))
                    ->description(__('filament-plausible::pages.sections.plausible.description'))
                    ->schema([
                        TextInput::make('domains')
                            ->label(__('filament-plausible::pages.fields.domains.label'))
                            ->helperText(__('filament-plausible::pages.fields.domains.helper'))
                            ->placeholder('example.com')
                            ->nullable(),

                        TextInput::make('host_analytics')
                            ->label(__('filament-plausible::pages.fields.host_analytics.label'))
                            ->helperText(__('filament-plausible::pages.fields.host_analytics.helper'))
                            ->url()
                            ->required(),
                    ])->columns(1),
            ]);
    }
}
