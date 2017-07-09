<?php

namespace MediaEssenz\Cropcheck\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class CheckController extends ActionController
{
    /**
     * @plugin Crop
     */
    public function cropAction()
    {
        $this->view->assignMultiple(
            [
                'sources' => [
                    '1-9-square-300x300.gif',
                    '1-9-square-300x300.jpg',
                    '1-9-square-300x300.png',
                    //'1-9-square-300x300.svg',
                    '1-2-3-horizontal-300x100.gif',
                    '1-2-3-horizontal-300x100.jpg',
                    '1-2-3-horizontal-300x100.png',
                    //'1-2-3-horizontal-300x100.svg',
                    '1-2-3-vertikal-100x300.gif',
                    '1-2-3-vertikal-100x300.jpg',
                    '1-2-3-vertikal-100x300.png',
                    //'1-2-3-vertikal-100x300.svg',
                ],
                'letters' => [
                    ['', ''],
                    ['c', ''],
                    ['c', 'c'],
                    ['', 'c'],
                    ['m', ''],
                    ['m', 'm'],
                    ['', 'm'],
                    ['c', 'm'],
                    ['m', 'c'],
                ],
                'sizes' => [
                    [300, 300],
                    [100, 300],
                    [300, 100],
                    [100, 100],
                ],
            ]
        );
    }
}