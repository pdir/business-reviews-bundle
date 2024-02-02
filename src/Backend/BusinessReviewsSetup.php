<?php

declare(strict_types=1);

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

namespace Pdir\BusinessReviewsBundle\Backend;

use Contao\BackendModule;
use Contao\Environment;

class BusinessReviewsSetup extends BackendModule
{
    /**
     * business-reviews-bundle version.
     */
    const VERSION = '1.1.0';

    /*
     * here you can add easily new platforms, all lang files and templates are using this list
     */
    const PLATFORMS = ['Google My Business', 'Facebook', 'Immobilienscout24', 'Trusted Shops'];

    /**
     * Extension mode.
     *
     * @var bool
     */
    const MODE = 'free';

    /**
     * Template.
     *
     * @var string
     */
    protected $strTemplate = 'be_business_reviews_setup';

    /**
     * Table.
     *
     * @var string
     */
    protected $strTable = 'tl_business_review';

    /**
     * Active Domain.
     *
     * @var string
     */
    protected $strDomain = '';

    public static function strPlatforms($and): string
    {
        return
            \implode(', ', \array_slice(self::PLATFORMS, 0, -1)).
            " $and ".
            self::PLATFORMS[\count(self::PLATFORMS) - 1];
    }

    public static function selectPlatforms(): string
    {
        return '<select class="tl_select"><option>'.
            \implode('</option><option>', self::PLATFORMS).
            '</option></select>';
    }

    /**
     * Generate the module.
     *
     * @throws \Exception
     */
    protected function compile()
    {
        $this->Template->extMode = self::MODE;
        $this->Template->strBundleName = $GLOBALS['TL_LANG']['MOD']['businessReviewsSetup'][0];
        $this->Template->strBundleGreeting = \sprintf($GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['greeting'], $this->Template->strBundleName);
        $this->Template->version = self::VERSION;
        $this->Template->hostname = \gethostname();
        $this->Template->ip = Environment::get('server');
        $this->Template->domain = $this->strDomain;

        $this->Template->arrEditions = [
            'free' => [
                'price' => 0,
                //'product_link' => 'https://extensions.contao.org/?q=pdir&pages=1&p=pdir%2Fbusiness-reviews-bundle',
            ],
            'starter' => [
                'price' => 29,
                'product_link' => 'https://pdir.de/business-reviews/',
            ],
            'professionell' => [
                'price' => 39,
                'product_link' => 'https://pdir.de/business-reviews/',
            ],
            'ultimate' => [
                'price' => 79,
                'product_link' => 'https://pdir.de/business-reviews/',
            ],
        ];
        $this->Template->arrLinks = $GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['setupLinks'];
        $this->Template->arrLANG = $GLOBALS['TL_LANG']['MOD']['businessReviewsSetup'];

        $this->Template->strSelect = '<select class="tl_select"><option>Google My Business</option><option>Facebook</option><option>Trusted Shops</option><option>Immobilienscout24</option></select>';

        $this->Template->allVersions = sprintf(
            $GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['template_p'],
            \implode(', ',
                array_map(
                    function($version) { return $version['product']; },
                    \array_filter(
                        $GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['editions'],
                        function($key) { return $key !== 'free'; },
                        ARRAY_FILTER_USE_KEY
                    )
                )
            )
        );
    }
}
