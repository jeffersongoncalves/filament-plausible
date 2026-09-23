<?php

return [
    'navigation_label' => 'Plausible Analytics',
    'navigation_group' => 'Configuración',
    'title' => 'Configuración de Plausible Analytics',
    'sections' => [
        'plausible' => [
            'heading' => 'Plausible Analytics',
            'description' => 'Configura los ajustes de seguimiento de Plausible Analytics.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Dominio(s)',
            'helper' => 'El dominio o dominios a rastrear. Usa valores separados por comas para informes agrupados (p. ej., one.com,two.com).',
        ],
        'host_analytics' => [
            'label' => 'Host de Plausible',
            'helper' => 'La URL del host de Plausible Analytics. Usa https://plausible.io para la nube o tu URL autoalojada.',
        ],
    ],
];
