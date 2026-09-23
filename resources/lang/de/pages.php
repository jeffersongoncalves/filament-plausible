<?php

return [
    'navigation_label' => 'Plausible Analytics',
    'navigation_group' => 'Einstellungen',
    'title' => 'Plausible Analytics-Einstellungen',
    'sections' => [
        'plausible' => [
            'heading' => 'Plausible Analytics',
            'description' => 'Konfigurieren Sie Ihre Plausible Analytics-Tracking-Einstellungen.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Domain(s)',
            'helper' => 'Die zu erfassende(n) Domain(s). Verwenden Sie kommagetrennte Werte für zusammengefasste Berichte (z. B. one.com,two.com).',
        ],
        'host_analytics' => [
            'label' => 'Plausible-Host',
            'helper' => 'Die Host-URL von Plausible Analytics. Verwenden Sie https://plausible.io für die Cloud oder Ihre selbst gehostete URL.',
        ],
    ],
];
