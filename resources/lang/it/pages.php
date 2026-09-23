<?php

return [
    'navigation_label' => 'Plausible Analytics',
    'navigation_group' => 'Impostazioni',
    'title' => 'Impostazioni di Plausible Analytics',
    'sections' => [
        'plausible' => [
            'heading' => 'Plausible Analytics',
            'description' => 'Configura le impostazioni di tracciamento di Plausible Analytics.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Dominio/i',
            'helper' => 'Il dominio o i domini da tracciare. Usa valori separati da virgole per report aggregati (ad es. one.com,two.com).',
        ],
        'host_analytics' => [
            'label' => 'Host Plausible',
            'helper' => 'L\'URL dell\'host di Plausible Analytics. Usa https://plausible.io per il cloud o il tuo URL self-hosted.',
        ],
    ],
];
