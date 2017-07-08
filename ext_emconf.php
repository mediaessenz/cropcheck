<?php

// Extension Manager/Repository config file for ext "cropcheck"

$EM_CONF[$_EXTKEY] = [
    'title' => 'Crop Check',
    'description' => 'Check TYPO3 crop results via TypoScript, Fluid-Viewhelper, cropVariants',
    'category' => 'misc',
    'version' => '1.0.0',
    'state' => 'stable',
    'author' => 'Alexander Grein',
    'author_email' => 'alexander.grein@gmail.com',
    'author_company' => 'MEDIA::ESSENZ',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-8.99.99',
            'autoloader' => '2.0.0-',
            'vhs' => '3.1.0-',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'MediaEssenz\\Cropcheck\\' => 'Classes',
        ],
    ],
];
