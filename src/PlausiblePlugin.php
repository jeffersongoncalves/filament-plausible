<?php

namespace JeffersonGoncalves\Filament\Plausible;

use JeffersonGoncalves\Filament\Plausible\Pages\ManagePlausibleSettings;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class PlausiblePlugin extends AbstractAnalyticsPlugin
{
    public function getId(): string
    {
        return 'filament-plausible';
    }

    protected function getSettingsPageClass(): ?string
    {
        return ManagePlausibleSettings::class;
    }
}
