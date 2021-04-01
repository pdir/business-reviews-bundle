<?php

/*
 * Contao business reviews bundle for Contao Open Source CMS
 *
 * Copyright (c) 2021 pdir / digital agentur // pdir GmbH
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

namespace Pdir\BusinessReviewsBundle\Frontend;

use Contao\BackendTemplate;
use Contao\ContentElement;
use Contao\Date;
use Contao\FilesModel;
use Contao\FrontendTemplate;
use Contao\System;
use stdClass;

class ReviewWidget extends ContentElement
{
    public $strTemplate = 'ce_data_widget';

    protected $assetsDir = 'bundles/pdirbusinessreviews';

    /**
     * Display a wildcard in the back end.
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE === 'BE') {
            $this->strTemplate = 'be_wildcard';
            $this->Template = new BackendTemplate($this->strTemplate);
            $r0 = $GLOBALS['TL_LANG']['tl_content']['pdir_rw_review_type_options'];
            $r1 = $GLOBALS['TL_LANG']['tl_content']['pdir_rw_element_type_options'];
            $brandOrName = empty($this->pdir_rw_text_brand) ? $this->pdir_rw_text_name : $this->pdir_rw_text_brand;

            $this->Template->wildcard = "### Business Review - {$r0[$this->pdir_rw_review_type]} ({$r1[$this->pdir_rw_element_type]}) ###<br>$brandOrName";

            return $this->Template->parse();
        }

        if (TL_MODE === 'FE' && $this->invisible) {
            return 0;
        }

        // add css
        if (TL_MODE === 'FE') {
            $GLOBALS['TL_CSS'][] = $this->assetsDir.'/css/reviews.scss|static';
        }

        // set template by element type if no custom template is set
        if (TL_MODE === 'FE' && 'ce_data_widget' === $this->strTemplate) {
            $GLOBALS['TL_CSS'][] = $this->assetsDir.'/css/reviews.scss|static';
            $this->strTemplate .= '_'.$this->unCamelcase($this->pdir_rw_element_type);
        }

        return parent::generate();
    }

    protected function compile()
    {
        // Add an image
        if ($this->addImage && $this->singleSRC) {
            $objModel = FilesModel::findByUuid($this->singleSRC);

            if (null !== $objModel && is_file(System::getContainer()->getParameter('kernel.project_dir').'/'.$objModel->path)) {
                $this->singleSRC = $objModel->path;
                $this->addImageToTemplate($this->Template, $this->arrData, null, null, $objModel);
            }
        }

        $this->Template->rwClass = strtolower($this->pdir_rw_element_type);
        $this->Template->cssID = !empty($this->cssID[0]) ? ' id="'.$this->cssID[0].'"' : '';
        $this->Template->elementType = $this->pdir_rw_element_type;
        $this->Template->LANG = $GLOBALS['TL_LANG']['CTE']['pdirReviewWidget'];

        $this->Template->powered = $this->Template->LANG['powered'];
        $this->Template->poweredLink = $this->Template->LANG['poweredLink'];

        // functions
        $this->Template->render = function ($name) { return $this->render($name); };
        $this->Template->itemProp = function ($itemProp, $tag) { return $this->itemProp($itemProp, $tag); };
    }

    /**
     * @param $str
     *
     * @return string
     */
    private function unCamelcase($str)
    {
        $str = preg_replace('/([a-z])([A-Z])/', '\\1_\\2', $str);

        return strtolower($str);
    }

    /**
     * creates different formats from one date.
     *
     * @param $field
     *
     * @return stdClass
     */
    private function prepareDate($field)
    {
        $d = new stdClass();
        $d->toISO = Date::parse('Y-m-dTH:i', $field);
        $d->toStrDate = Date::parse($GLOBALS['TL_CONFIG']['dateFormat'], $field);
        $d->toStrTime = Date::parse($GLOBALS['TL_CONFIG']['timeFormat'], $field);
        $d->toStr = Date::parse($GLOBALS['TL_CONFIG']['dateFormat'], $field).', '.Date::parse($GLOBALS['TL_CONFIG']['timeFormat'], $field);

        return $d;
    }

    /**
     * Creates a tag with the given itemProp attribute.
     *
     * @param $itemProp
     * @param $tag
     *
     * @return string
     */
    private function itemProp($itemProp, $tag)
    {
        $fullItemProp = "pdir_rw_text_$itemProp";
        $itemValue = $this->$fullItemProp;

        return "<$tag itemprop=\"$itemProp\">{$itemValue}</$tag>";
    }

    /**
     * renders a partial template by name
     * and return it as string.
     *
     * @param $name
     *
     * @return string
     */
    private function render($name)
    {
        // load the requested partial template
        $partial = new FrontendTemplate("ce_data_partial_$name");

        $partial->itemProp = function ($itemProp, $tag) { return $this->itemProp($itemProp, $tag); };
        $partial->render = function ($name) { return $this->render($name); };

        $partial->elementType = $this->pdir_rw_element_type;
        $partial->LANG = $this->Template->LANG;

        switch ($name) {
            case 'name':
                $partial->link = $this->pdir_rw_text_link;
                $partial->brand = $this->pdir_rw_text_brand;
                $partial->name = $this->pdir_rw_text_name;
                $partial->description = (
                    'Recipe' === $this->pdir_rw_element_type ||
                    'Review' === $this->pdir_rw_element_type ||
                    'Event' === $this->pdir_rw_element_type
                ) ? $this->pdir_rw_text_description : "<br>$this->pdir_rw_text_description";
                $partial->author = $this->pdir_rw_text_author;
                break;

            case 'address':
                $partial->streetAddress = $this->pdir_rw_text_streetAddress;
                $partial->addressLocality = $this->pdir_rw_text_addressLocality;
                $partial->addressRegion = $this->pdir_rw_text_addressRegion;
                $partial->postalCode = $this->pdir_rw_text_postalCode;
                $partial->telephone = $this->pdir_rw_text_telephone;
                break;

            case 'aggregateRating':
                $partial->link = $this->pdir_rw_text_link;
                $partial->linkTitle = $this->pdir_rw_text_linkTitle;
                $partial->ratingText = $this->pdir_rw_text_ratingText;
                break;
            // recipe
            case 'recipeProperties':
                $partial->prepTime = $this->pdir_rw_text_prepTime;
                $partial->cookTime = $this->pdir_rw_text_cookTime;
                $partial->totalTime = $this->pdir_rw_text_totalTime;
                $partial->recipeYield = $this->pdir_rw_text_recipeYield;
                break;

            case 'reviewProperties':
                $partial->servesCuisine = $this->pdir_rw_text_servesCuisine;
                $partial->priceRange = $this->pdir_rw_text_priceRange;
                break;

            case 'eventProperties':
                $partial->streetAddress = $this->pdir_rw_text_streetAddress;
                $partial->addressLocality = $this->pdir_rw_text_addressLocality;
                $partial->addressRegion = $this->pdir_rw_text_addressRegion;
                $partial->postalCode = $this->pdir_rw_text_postalCode;
                $partial->telephone = $this->pdir_rw_text_telephone;

                $partial->startDate = $this->prepareDate($this->pdir_rw_text_startDate);
                $partial->endDate = $this->prepareDate($this->pdir_rw_text_endDate);
                break;

            default:
        }

        return $partial->parse();
    }
}
