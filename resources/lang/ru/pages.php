<?php

return [
    'navigation_label' => 'Plausible Analytics',
    'navigation_group' => 'Настройки',
    'title' => 'Настройки Plausible Analytics',
    'sections' => [
        'plausible' => [
            'heading' => 'Plausible Analytics',
            'description' => 'Настройте параметры отслеживания Plausible Analytics.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Домен(ы)',
            'helper' => 'Домен(ы) для отслеживания. Используйте значения через запятую для сводных отчётов (например, one.com,two.com).',
        ],
        'script_id' => [
            'label' => 'ID скрипта',
            'helper' => 'ID скрипта сайта из текущего сниппета Plausible (pa-XXXX, в Site Installation). Имеет приоритет над доменами.',
        ],
        'host_analytics' => [
            'label' => 'Хост Plausible',
            'helper' => 'URL хоста Plausible Analytics. Используйте https://plausible.io для облака или URL вашего собственного сервера.',
        ],
    ],
];
