<?php

return [
    'navigation_label' => 'Plausible Analytics',
    'navigation_group' => 'Parametrlər',
    'title' => 'Plausible Analytics parametrləri',
    'sections' => [
        'plausible' => [
            'heading' => 'Plausible Analytics',
            'description' => 'Plausible Analytics izləmə parametrlərini konfiqurasiya edin.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Domen(lər)',
            'helper' => 'İzləniləcək domen(lər). Ümumi hesabat üçün vergüllə ayrılmış dəyərlərdən istifadə edin (məs. one.com,two.com).',
        ],
        'host_analytics' => [
            'label' => 'Plausible host',
            'helper' => 'Plausible Analytics host URL-i. Bulud üçün https://plausible.io və ya öz host etdiyiniz URL-dən istifadə edin.',
        ],
    ],
];
