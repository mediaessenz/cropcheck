<?php
defined('TYPO3_MODE') or die();

if (!isset($GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants'])) {
    $GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants'] = [];
}

$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants'] = array_replace_recursive(
    $GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants'],
    [
        'cropcheck' => [
            'title' => 'Cropcheck',
            'allowedAspectRatios' => [
                '1:1' => [
                    'title' => '1:1',
                    'value' => 1.0
                ],
            ],
            'selectedRatio' => '1:1',
            'cropArea' => [
                'x' => 0.0,
                'y' => 0.0,
                'width' => 1.0,
                'height' => 1.0,
            ],
            'focusArea' => [
                'x' => 1 / 3,
                'y' => 1 / 3,
                'width' => 1 / 3,
                'height' => 1 / 3,
            ],
            'coverAreas' => [
                [
                    'x' => 0.05,
                    'y' => 0.85,
                    'width' => 0.9,
                    'height' => 0.1,
                ]
            ],
        ],
    ]
);