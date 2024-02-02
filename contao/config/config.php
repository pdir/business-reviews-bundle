<?php

/*
 * Contao business reviews bundle for Contao Open Source CMS
 *
 * Copyright (c) 2024 pdir / digital agentur // pdir GmbH
 *
 * @package    business-reviews-bundle
 * @link       https://pdir.de/business-reviews/
 * @license    proprietary / pdir license - All-rights-reserved - commercial extension
 * @author     Mathias Arzberger <develop@pdir.de>
 * @author     Christian Mette <develop@pdir.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Contao\ArrayUtil;
use Contao\System;
use Symfony\Component\HttpFoundation\Request;

$assetsDir = 'bundles/pdirbusinessreviews';

/*
 * Backend modules
 */
if (!isset($GLOBALS['BE_MOD']['pdir'])) {
    ArrayUtil::arrayInsert($GLOBALS['BE_MOD'], 1, ['pdir' => []]);
}

ArrayUtil::arrayInsert($GLOBALS['BE_MOD']['pdir'], 0, [
        'businessReviewsSetup' => [
            'callback' => 'Pdir\\BusinessReviewsBundle\\Backend\\BusinessReviewsSetup',
        ],
    ]
);

/*
 * Frontend modules and content elements
 */
$GLOBALS['TL_CTE']['pdir']['pdirReviewWidget'] = 'Pdir\\BusinessReviewsBundle\\Frontend\\ReviewWidget';
$GLOBALS['FE_MOD']['pdir']['pdirReviewWidget'] = 'Pdir\\BusinessReviewsBundle\\Frontend\\ReviewWidget';

/*
 * Javascript & Stylesheet for Backend
 */
if (System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest(System::getContainer()->get('request_stack')->getCurrentRequest() ?? Request::create(''))) {
//    $GLOBALS['TL_JAVASCRIPT'][] = $assetsDir.'/js/reviews_backend.js';
    $GLOBALS['TL_CSS'][] = $assetsDir.'/css/reviews_backend.scss|static';
}
