<?php

/*
 * Contao business reviews bundle for Contao Open Source CMS
 *
 * Copyright (c) 2020 pdir / digital agentur // pdir GmbH
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

namespace Pdir\BusinessReviewsBundle\Tests;

use Pdir\BusinessReviewsBundle\DependencyInjection\PdirBusinessReviewsExtension;
use Pdir\BusinessReviewsBundle\PdirBusinessReviewsBundle;
use PHPUnit\Framework\TestCase;

class PdirBusinessReviewsBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new PdirBusinessReviewsBundle();
        $this->assertInstanceOf(PdirBusinessReviewsBundle::class, $bundle);
    }

    public function testGetContainerExtension()
    {
        $bundle = new PdirBusinessReviewsBundle();
        $this->assertInstanceOf(PdirBusinessReviewsExtension::class, $bundle->getContainerExtension());
    }
}
