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

namespace Pdir\BusinessReviewsBundle\Dca;

use Contao\Backend;

class tl_content extends Backend
{
    /**
     * Gets the free version explanation.
     *
     * @return string
     */
    public function freeVersionExplanation(\DataContainer $dc)
    {
        return sprintf('<div style="color: #4b85ba;
            background: #eff5fa;
            padding: 10px;
            border-radius: 3px;">%s</div>',
            str_replace('{type_id}', $dc->pdir_rw_review_type, $GLOBALS['TL_LANG']['tl_content']['freeVersionExplanation'])
        );
    }

    /**
     * Set the timestamp to 1970-01-01 (see #26).
     *
     * @param int $value
     *
     * @return int
     */
    public function loadDate($value)
    {
        return strtotime('1970-01-01 '.date('H:i:s', $value));
    }
}
