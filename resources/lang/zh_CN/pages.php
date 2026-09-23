<?php

return [
    'navigation_label' => 'Plausible Analytics',
    'navigation_group' => '设置',
    'title' => 'Plausible Analytics 设置',
    'sections' => [
        'plausible' => [
            'heading' => 'Plausible Analytics',
            'description' => '配置你的 Plausible Analytics 跟踪设置。',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => '域名',
            'helper' => '要跟踪的域名。汇总报告请使用逗号分隔的值（例如 one.com,two.com）。',
        ],
        'host_analytics' => [
            'label' => 'Plausible 主机',
            'helper' => 'Plausible Analytics 主机 URL。云服务请使用 https://plausible.io，自托管请使用你的 URL。',
        ],
    ],
];
