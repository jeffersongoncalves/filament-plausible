<?php

return [
    'navigation_label' => 'Plausible Analytics',
    'navigation_group' => 'सेटिंग्स',
    'title' => 'Plausible Analytics सेटिंग्स',
    'sections' => [
        'plausible' => [
            'heading' => 'Plausible Analytics',
            'description' => 'अपनी Plausible Analytics ट्रैकिंग सेटिंग्स कॉन्फ़िगर करें।',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'डोमेन',
            'helper' => 'ट्रैक करने के लिए डोमेन। संयुक्त रिपोर्टिंग के लिए कॉमा से अलग मान उपयोग करें (जैसे one.com,two.com)।',
        ],
        'host_analytics' => [
            'label' => 'Plausible होस्ट',
            'helper' => 'Plausible Analytics होस्ट URL। क्लाउड के लिए https://plausible.io या अपना सेल्फ-होस्टेड URL उपयोग करें।',
        ],
    ],
];
