<?php

return [
    'navigation_label' => 'Plausible Analytics',
    'navigation_group' => 'Ayarlar',
    'title' => 'Plausible Analytics ayarları',
    'sections' => [
        'plausible' => [
            'heading' => 'Plausible Analytics',
            'description' => 'Plausible Analytics izleme ayarlarınızı yapılandırın.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Alan ad(lar)ı',
            'helper' => 'İzlenecek alan ad(lar)ı. Toplu raporlama için virgülle ayrılmış değerler kullanın (ör. one.com,two.com).',
        ],
        'script_id' => [
            'label' => 'Betik kimliği',
            'helper' => 'Plausible\'ın güncel kod parçasındaki site betik kimliği (pa-XXXX, Site Installation altında). Alan adlarına göre önceliklidir.',
        ],
        'host_analytics' => [
            'label' => 'Plausible sunucusu',
            'helper' => 'Plausible Analytics sunucu URL\'si. Bulut için https://plausible.io veya kendi barındırdığınız URL\'yi kullanın.',
        ],
    ],
];
