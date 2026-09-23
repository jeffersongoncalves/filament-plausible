<?php

return [
    'navigation_label' => 'Plausible Analytics',
    'navigation_group' => 'الإعدادات',
    'title' => 'إعدادات Plausible Analytics',
    'sections' => [
        'plausible' => [
            'heading' => 'Plausible Analytics',
            'description' => 'اضبط إعدادات تتبع Plausible Analytics.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'النطاق (النطاقات)',
            'helper' => 'النطاق أو النطاقات المراد تتبعها. استخدم قيمًا مفصولة بفواصل للتقارير المجمّعة (مثل one.com,two.com).',
        ],
        'host_analytics' => [
            'label' => 'مضيف Plausible',
            'helper' => 'رابط مضيف Plausible Analytics. استخدم https://plausible.io للنسخة السحابية أو رابط الاستضافة الذاتية الخاص بك.',
        ],
    ],
];
