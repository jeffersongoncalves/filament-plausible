<?php

return [
    'navigation_label' => 'Plausible Analytics',
    'navigation_group' => 'Settings',
    'title' => 'Plausible Analytics Settings',

    'sections' => [
        'plausible' => [
            'heading' => 'Plausible Analytics',
            'description' => 'Configure your Plausible Analytics tracking settings.',
        ],
    ],

    'fields' => [
        'domains' => [
            'label' => 'Domain(s)',
            'helper' => 'The domain(s) to track. Use comma-separated values for rollup reporting (e.g. one.com,two.com).',
        ],
        'script_id' => [
            'label' => 'Script ID',
            'helper' => 'Per-site script id from Plausible\'s current snippet (pa-XXXX, under Site Installation). Takes precedence over Domain(s).',
        ],
        'host_analytics' => [
            'label' => 'Plausible Host',
            'helper' => 'The Plausible Analytics host URL. Use https://plausible.io for cloud or your self-hosted URL.',
        ],
    ],
];
