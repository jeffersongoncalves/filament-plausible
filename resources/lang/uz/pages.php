<?php

return [
    'navigation_label' => 'Plausible Analytics',
    'navigation_group' => 'Sozlamalar',
    'title' => 'Plausible Analytics sozlamalari',
    'sections' => [
        'plausible' => [
            'heading' => 'Plausible Analytics',
            'description' => 'Plausible Analytics kuzatuv sozlamalarini sozlang.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Domen(lar)',
            'helper' => 'Kuzatiladigan domen(lar). Umumlashtirilgan hisobot uchun vergul bilan ajratilgan qiymatlardan foydalaning (masalan, one.com,two.com).',
        ],
        'script_id' => [
            'label' => 'Skript ID',
            'helper' => 'Plausible joriy snippetidagi sayt skript ID si (pa-XXXX, Site Installation bo\'limida). Domen(lar)dan ustun turadi.',
        ],
        'host_analytics' => [
            'label' => 'Plausible xosti',
            'helper' => 'Plausible Analytics xost URL manzili. Bulut uchun https://plausible.io yoki oʻzingiz joylashtirgan URLʼdan foydalaning.',
        ],
    ],
];
