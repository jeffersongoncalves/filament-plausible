<?php

return [
    'navigation_label' => 'Plausible Analytics',
    'navigation_group' => 'Definições',
    'title' => 'Definições do Plausible Analytics',
    'sections' => [
        'plausible' => [
            'heading' => 'Plausible Analytics',
            'description' => 'Configure as definições de rastreamento do Plausible Analytics.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Domínio(s)',
            'helper' => 'O(s) domínio(s) a rastrear. Use valores separados por vírgulas para relatórios agregados (por ex., one.com,two.com).',
        ],
        'script_id' => [
            'label' => 'ID do script',
            'helper' => 'ID do script do site no snippet atual do Plausible (pa-XXXX, em Site Installation). Tem prioridade sobre Domínio(s).',
        ],
        'host_analytics' => [
            'label' => 'Host do Plausible',
            'helper' => 'O URL do host do Plausible Analytics. Use https://plausible.io para a cloud ou o seu URL auto-alojado.',
        ],
    ],
];
