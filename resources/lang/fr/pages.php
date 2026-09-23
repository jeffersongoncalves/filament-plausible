<?php

return [
    'navigation_label' => 'Plausible Analytics',
    'navigation_group' => 'Paramètres',
    'title' => 'Paramètres de Plausible Analytics',
    'sections' => [
        'plausible' => [
            'heading' => 'Plausible Analytics',
            'description' => 'Configurez vos paramètres de suivi Plausible Analytics.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Domaine(s)',
            'helper' => 'Le ou les domaines à suivre. Utilisez des valeurs séparées par des virgules pour les rapports groupés (par ex. one.com,two.com).',
        ],
        'host_analytics' => [
            'label' => 'Hôte Plausible',
            'helper' => 'L\'URL de l\'hôte Plausible Analytics. Utilisez https://plausible.io pour le cloud ou votre URL auto-hébergée.',
        ],
    ],
];
