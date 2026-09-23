<?php

return [
    'navigation_label' => 'Plausible Analytics',
    'navigation_group' => 'تنظیمات',
    'title' => 'تنظیمات Plausible Analytics',
    'sections' => [
        'plausible' => [
            'heading' => 'Plausible Analytics',
            'description' => 'تنظیمات ردیابی Plausible Analytics را پیکربندی کنید.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'دامنه(ها)',
            'helper' => 'دامنه(هایی) که باید ردیابی شوند. برای گزارش تجمیعی از مقادیر جداشده با کاما استفاده کنید (مثلاً one.com,two.com).',
        ],
        'host_analytics' => [
            'label' => 'میزبان Plausible',
            'helper' => 'آدرس میزبان Plausible Analytics. برای نسخه ابری از https://plausible.io یا آدرس میزبانی شخصی خود استفاده کنید.',
        ],
    ],
];
