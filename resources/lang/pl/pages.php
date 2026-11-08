<?php

return [
    'navigation_label' => 'Plausible Analytics',
    'navigation_group' => 'Ustawienia',
    'title' => 'Ustawienia Plausible Analytics',
    'sections' => [
        'plausible' => [
            'heading' => 'Plausible Analytics',
            'description' => 'Skonfiguruj ustawienia śledzenia Plausible Analytics.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Domena(y)',
            'helper' => 'Domena lub domeny do śledzenia. Użyj wartości oddzielonych przecinkami dla raportów zbiorczych (np. one.com,two.com).',
        ],
        'script_id' => [
            'label' => 'ID skryptu',
            'helper' => 'ID skryptu witryny z aktualnego fragmentu Plausible (pa-XXXX, w Site Installation). Ma pierwszeństwo przed Domeną(ami).',
        ],
        'host_analytics' => [
            'label' => 'Host Plausible',
            'helper' => 'Adres URL hosta Plausible Analytics. Użyj https://plausible.io dla chmury lub własnego adresu URL.',
        ],
    ],
];
