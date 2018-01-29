<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
    
    'gii' => [
    'class' => 'yii\gii\Module',
    'allowedIPs' => ['127.0.0.1', '::1', '192.168.0.*', '192.168.178.20','192.168.83.*'] // adjust this to your needs
    ],
        
    'gridview' =>  [
        'class' => '\kartik\grid\Module',
    ],
   'gridviewCustom' =>  [
        'class' => '\kartik\grid\Module',
        // your other grid module settings
    ],
    
        
],
];
