<?php

/*
 * Contao business reviews bundle for Contao Open Source CMS
 *
 * Copyright (c) 2022 pdir / digital agentur // pdir GmbH
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

use Pdir\BusinessReviewsBundle\Backend\BusinessReviewsSetup;

$strPlatforms = BusinessReviewsSetup::strPlatforms('und');
$selectPlatforms = BusinessReviewsSetup::selectPlatforms();

$GLOBALS['TL_LANG']['MOD']['pdir'] = 'pdir Apps';
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['type'] = 'Business-Reviews';

$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup'][0] = 'Business Reviews';
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup'][1] = 'Manage your business reviews module here';

$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['greeting'] = 'Welcome to the %s Bundle for Contao';
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['text'] = "The Business Reviews Bundle allows you to easily display your reviews from multiple platforms such as $strPlatforms directly on your Contao website using a powerful and intuitive content element. Ideal for restaurants, retail stores, franchisees, real estate companies, service providers as well as hotels and restaurants and almost every other company that wants to display reviews of different platforms on its own website.";
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['platforms'] = "The Business Reviews Bundle for Contao currently supports the platforms $strPlatforms.";
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['example_h21'] = 'Example & Demo';
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['example_h22'] = 'The integration of your reviews can look like this:';
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['help_h2'] = 'Help & Links';

$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['setupLinks'] = [
    ['href' => 'https://pdir.de/docs/de/contao/extensions/business-reviews/', 'target' => '_blank', 'html' => 'Documentation'],
    ['href' => 'https://github.com/pdir/business-reviews-bundle/issues', 'target' => '_blank', 'html' => 'Report issues'],
    ['href' => 'https://github.com/pdir/business-reviews-bundle/', 'target' => '_blank', 'html' => 'Github'],
    ['href' => 'https://demo.pdir.de/business-reviews.html', 'target' => '_blank', 'html' => 'Demo'],
];

$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['editions']['free'] = [
    'payment' => 'free',
    'product' => 'Free',
    'teaser' => 'Start with the basics. Show your reviews.',
    //'button_text' => 'jetzt herunterladen',
    'features' => ['+Maintain ratings', '+1 standard template', '-'],
];
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['editions']['starter'] = [
    'payment' => 'once, plus VAT',
    'product' => 'Starter',
    'teaser' => 'Take it a step further! Show your reviews in an advanced and effective way.',
    'button_text' => 'available soon',
    'features' => [
        '+Maintain ratings',
        '+1 standard template',
        '-',
        '*Effective presentation as a star rating, carousel, sticker or card',
        '*Display of evaluation texts (depending on the template)',
        '*Display detailed business information like name, website, etc ...',
    ],
];
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['editions']['professionell'] = [
    'payment' => 'once, plus VAT',
    'product' => 'Professionell',
    'teaser' => "Automate! Import your $selectPlatforms reviews fully automatically.",
    'button_text' => 'available soon',
    'features' => [
        '+Maintain ratings',
        '+1 standard template',
        '-',
        '*Effective presentation as a star rating, carousel, sticker or card',
        '*Display of evaluation texts (depending on the template)',
        '*Display detailed business information like name, website, etc ...',
        '*Fully automatic sync of your ratings from <strong>one platform<sup>*</sup></strong>',
    ],
];
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['editions']['ultimate'] = [
    'payment' => 'once, plus VAT',
    'product' => 'Ultimate',
    'teaser' => 'Automate everything. Import your ratings from <strong>all platforms<sup>*</sup></strong> fully automatically.',
    'button_text' => 'available soon',
    'features' => [
        '+Maintain ratings',
        '+1 standard template',
        '-',
        '*Effective presentation as a star rating, carousel, sticker or card',
        '*Display of evaluation texts (depending on the template)',
        '*Display detailed business information like name, website, etc ...',
        '*Fully automatic sync of <strong>all your ratings from all supported platforms<sup>*</sup></strong>',
    ],
];

$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['template_h2'] = 'Exclusive templates for your business reviews included!';
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['template_p'] = '(In the versions: %s)';

$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['remark_1'] = "<sup>*</sup>The Business Reviews Bundle for Contao currently supports the platforms $strPlatforms.";
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['remark_2'] = "$strPlatforms are registered trademarks of a third party and are in no way associated with pdir GmbH or the Business Review Bundle for Contao.";
