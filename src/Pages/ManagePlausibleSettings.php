<?php

namespace JeffersonGoncalves\Filament\Plausible\Pages;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use JeffersonGoncalves\Plausible\Settings\PlausibleSettings;

class ManagePlausibleSettings extends SettingsPage
{
    protected static string $settings = PlausibleSettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

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

    public function form(Form $form): Form
    {
        return $form
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
