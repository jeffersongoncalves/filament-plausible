<?php

return [
    'navigation_label' => 'Plausible Analytics',
    'title' => 'Configurações do Plausible Analytics',

    'sections' => [
        'plausible' => [
            'heading' => 'Plausible Analytics',
            'description' => 'Configure as opções de rastreamento do Plausible Analytics.',
        ],
    ],

    'fields' => [
        'domains' => [
            'label' => 'Domínio(s)',
            'helper' => 'O(s) domínio(s) a rastrear. Use valores separados por vírgula para relatório consolidado (ex: um.com,dois.com).',
        ],
        'host_analytics' => [
            'label' => 'Host do Plausible',
            'helper' => 'A URL do host do Plausible Analytics. Use https://plausible.io para cloud ou sua URL self-hosted.',
        ],
    ],
];
