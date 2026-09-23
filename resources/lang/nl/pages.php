<?php

return [
    'navigation_label' => 'Plausible Analytics',
    'navigation_group' => 'Instellingen',
    'title' => 'Plausible Analytics-instellingen',
    'sections' => [
        'plausible' => [
            'heading' => 'Plausible Analytics',
            'description' => 'Configureer je Plausible Analytics-trackinginstellingen.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Domein(en)',
            'helper' => 'Het domein of de domeinen om te volgen. Gebruik kommagescheiden waarden voor gecombineerde rapportage (bijv. one.com,two.com).',
        ],
        'host_analytics' => [
            'label' => 'Plausible-host',
            'helper' => 'De host-URL van Plausible Analytics. Gebruik https://plausible.io voor de cloud of je eigen gehoste URL.',
        ],
    ],
];
