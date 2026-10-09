<?php

use Filament\Facades\Filament;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Foundation\Auth\User;
use JeffersonGoncalves\Filament\Plausible\Pages\ManagePlausibleSettings;
use JeffersonGoncalves\Filament\Plausible\PlausiblePlugin;
use JeffersonGoncalves\Plausible\Settings\PlausibleSettings;
use Livewire\Livewire;

beforeEach(function () {
    Filament::setCurrentPanel(Filament::getPanel('test'));
    $this->actingAs((new User)->forceFill(['id' => 1, 'name' => 'Admin', 'email' => 'admin@example.com']));
});

it('registers the settings page on the panel', function () {
    expect(Filament::getPanel('test')->getPages())->toContain(ManagePlausibleSettings::class)
        ->and(PlausiblePlugin::make()->getId())->toBe('filament-plausible');
});

it('ships translated labels', function () {
    expect(ManagePlausibleSettings::getNavigationLabel())->not->toContain('::')
        ->and((new ManagePlausibleSettings)->getTitle())->not->toContain('::');
});

it('saves the settings from the page', function () {
    Livewire::test(ManagePlausibleSettings::class)
        ->fillForm(['domains' => 'example.com'])
        ->call('save')
        ->assertHasNoFormErrors();

    $settings = app(PlausibleSettings::class)->refresh();
    expect($settings->domains)->toBe('example.com');
});

it('injects the script into the panel once configured', function () {
    $settings = app(PlausibleSettings::class);
    $settings->domains = 'example.com';
    $settings->save();

    $html = (string) FilamentView::renderHook(PanelsRenderHook::HEAD_START)
        .(string) FilamentView::renderHook(PanelsRenderHook::HEAD_END)
        .(string) FilamentView::renderHook(PanelsRenderHook::BODY_START)
        .(string) FilamentView::renderHook(PanelsRenderHook::BODY_END);

    expect($html)->toContain('data-domain="example.com"');
});
