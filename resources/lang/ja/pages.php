<?php

return [
    'navigation_label' => 'Plausible Analytics',
    'navigation_group' => '設定',
    'title' => 'Plausible Analytics 設定',
    'sections' => [
        'plausible' => [
            'heading' => 'Plausible Analytics',
            'description' => 'Plausible Analytics のトラッキング設定を行います。',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'ドメイン',
            'helper' => 'トラッキングするドメイン。ロールアップレポートにはカンマ区切りで指定します（例: one.com,two.com）。',
        ],
        'script_id' => [
            'label' => 'スクリプト ID',
            'helper' => 'Plausible の現在のスニペットにあるサイト用スクリプト ID（pa-XXXX、Site Installation 内）。ドメインより優先されます。',
        ],
        'host_analytics' => [
            'label' => 'Plausible ホスト',
            'helper' => 'Plausible Analytics のホスト URL。クラウドの場合は https://plausible.io、セルフホストの場合はその URL を使用します。',
        ],
    ],
];
