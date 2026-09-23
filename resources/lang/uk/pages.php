<?php

return [
    'navigation_label' => 'Plausible Analytics',
    'navigation_group' => 'Налаштування',
    'title' => 'Налаштування Plausible Analytics',
    'sections' => [
        'plausible' => [
            'heading' => 'Plausible Analytics',
            'description' => 'Налаштуйте параметри відстеження Plausible Analytics.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Домен(и)',
            'helper' => 'Домен(и) для відстеження. Використовуйте значення через кому для зведених звітів (наприклад, one.com,two.com).',
        ],
        'host_analytics' => [
            'label' => 'Хост Plausible',
            'helper' => 'URL хоста Plausible Analytics. Використовуйте https://plausible.io для хмари або URL власного сервера.',
        ],
    ],
];
