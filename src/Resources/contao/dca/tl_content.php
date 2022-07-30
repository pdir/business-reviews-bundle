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

$tableName = 'tl_content';

$GLOBALS['TL_DCA'][$tableName]['palettes']['__selector__'] = array_merge($GLOBALS['TL_DCA'][$tableName]['palettes']['__selector__'], ['pdir_rw_review_type', 'pdir_rw_element_type', 'pdir_rw_element_subtype', 'addImage', 'overwriteMeta']);

$GLOBALS['TL_DCA'][$tableName]['palettes']['pdirReviewWidget'] = '{type_legend},type,headline,pdir_rw_review_type;{image_legend},addImage;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA'][$tableName]['subpalettes']['pdir_rw_review_type_rText'] = ';{pdir_rw_text_legend},pdir_rw_element_type;pdir_rw_text_name,pdir_rw_text_brand,pdir_rw_text_description,pdir_rw_text_linkTitle,pdir_rw_text_link,pdir_rw_text_ratingValue,pdir_rw_text_bestRating,pdir_rw_text_ratingCount,pdir_rw_text_ratingText;{template_legend:hide},customTpl;';
$GLOBALS['TL_DCA'][$tableName]['subpalettes']['pdir_rw_review_type_rCarousel'] = ';{pdir_rw_legend},pdir_rw_not_available;';
$GLOBALS['TL_DCA'][$tableName]['subpalettes']['pdir_rw_review_type_rStars'] = ';{pdir_rw_legend},pdir_rw_not_available;';

$GLOBALS['TL_DCA'][$tableName]['subpalettes']['pdir_rw_element_type_Recipe'] = ';{pdir_rw_recipe_legend},pdir_rw_text_author,pdir_rw_text_prepTime,pdir_rw_text_cookTime,pdir_rw_text_totalTime,pdir_rw_text_recipeYield;';
$GLOBALS['TL_DCA'][$tableName]['subpalettes']['pdir_rw_element_type_Review'] = ';{pdir_rw_review_legend},pdir_rw_element_subtype;';
$GLOBALS['TL_DCA'][$tableName]['subpalettes']['pdir_rw_element_type_Event'] = ';{pdir_rw_event_legend},pdir_rw_text_streetAddress,pdir_rw_text_postalCode,pdir_rw_text_addressLocality,pdir_rw_text_addressRegion;pdir_rw_text_startDate,pdir_rw_text_endDate;';

$GLOBALS['TL_DCA'][$tableName]['subpalettes']['pdir_rw_element_subtype_Restaurant'] = ';{pdir_rw_element_subtype_legend},pdir_rw_text_author,pdir_rw_text_streetAddress,pdir_rw_text_postalCode,pdir_rw_text_addressLocality,pdir_rw_text_addressRegion,pdir_rw_text_telephone,pdir_rw_text_servesCuisine,pdir_rw_text_priceRange;';

$GLOBALS['TL_DCA'][$tableName]['subpalettes']['addImage'] = 'singleSRC,size,floating,imagemargin,fullsize,overwriteMeta';
$GLOBALS['TL_DCA'][$tableName]['subpalettes']['overwriteMeta'] = 'alt,imageTitle,imageUrl,caption';

$GLOBALS['TL_DCA'][$tableName]['fields']['addImage']['eval']['tl_class'] = 'w50 clr';
$GLOBALS['TL_DCA'][$tableName]['fields']['customTpl']['options_callback'] = static function (DataContainer $dc) {
    if ('pdirReviewWidget' === $dc->activeRecord->type) {
        return Controller::getTemplateGroup('ce_data_widget', [], 'ce_'.$dc->activeRecord->type);
    }

    return Controller::getTemplateGroup('ce_'.$dc->activeRecord->type.'_', [], 'ce_'.$dc->activeRecord->type);
};

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_review_type'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_review_type'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_review_type_options'],
    'eval' => [
        'submitOnChange' => true,
        'tl_class' => 'w50',
    ],
    'sql' => "text default '0'",
];

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_element_type'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_type'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_type_options'],
    'eval' => [
        'submitOnChange' => true,
        'includeBlankOption' => true,
        'tl_class' => 'w50',
    ],
    'sql' => "text default '0'",
];

/**
 * microformat itemprops
 * if you want to add new item props, please note the schema pdir_rw_text_ItemProp and
 * the ItemProp in accordance with schema.org
 */

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_brand'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_brand'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'tl_class' => 'w50',
        'decodeEntities' => true,
    ],
    'sql' => "text default ''",
];

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_name'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_name'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'mandatory' => true,
        'tl_class' => 'w50',
        'decodeEntities' => true,
    ],
    'sql' => "text default ''",
];

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_description'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_description'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'tl_class' => 'clr',
        'decodeEntities' => true,
    ],
    'sql' => "text default ''",
];

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_link'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_link'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'mandatory' => true,
        'tl_class' => 'w50',
        'decodeEntities' => true,
    ],
    'sql' => "text default ''",
];

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_linkTitle'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_linkTitle'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'mandatory' => true,
        'tl_class' => 'w50',
        'decodeEntities' => true,
    ],
    'sql' => "text default ''",
];

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_ratingCount'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_ratingCount'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'tl_class' => 'w25',
    ],
    'sql' => "int(10) unsigned NOT NULL default '0'",
];

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_ratingValue'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_ratingValue'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'tl_class' => 'w25',
    ],
    'sql' => "decimal(6,2)  NOT NULL default '0.00'",
];

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_bestRating'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_bestRating'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'tl_class' => 'w25',
    ],
    'sql' => "decimal(6,2) NOT NULL default '0.00'",
];

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_ratingText'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_ratingText'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'tl_class' => 'w25',
        'decodeEntities' => true,
    ],
    'sql' => "text default ' Reviews'",
];

//-- address -------------------------

// street name and number
$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_streetAddress'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_streetAddress'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'tl_class' => 'w50 clr',
        'decodeEntities' => true,
    ],
    'sql' => "text default ''",
];

// place/city like Prais, France
$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_addressLocality'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_addressLocality'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'tl_class' => 'w40',
        'decodeEntities' => true,
    ],
    'sql' => "text default ''",
];

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_addressRegion'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_addressRegion'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'tl_class' => 'w50',
        'decodeEntities' => true,
    ],
    'sql' => "text default ''",
];

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_postalCode'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_postalCode'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'tl_class' => 'w10',
        'decodeEntities' => true,
    ],
    'sql' => "text default ''",
];

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_telephone'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_telephone'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'tl_class' => 'w50',
        'decodeEntities' => true,
    ],
    'sql' => "text default ''",
];

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_prepTime'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_prepTime'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'mandatory' => true,
        'tl_class' => 'w25 clr',
        'decodeEntities' => true,
    ],
    'sql' => "text default ''",
];

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_cookTime'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_cookTime'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'mandatory' => true,
        'tl_class' => 'w25',
        'decodeEntities' => true,
    ],
    'sql' => "text default ''",
];

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_totalTime'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_totalTime'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'mandatory' => true,
        'tl_class' => 'w25',
        'decodeEntities' => true,
    ],
    'sql' => "text default ''",
];

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_recipeYield'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_recipeYield'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'mandatory' => true,
        'tl_class' => 'w25',
        'decodeEntities' => true,
    ],
    'sql' => "text default ''",
];

//-- Review ---

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_element_subtype'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_subtype'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_subtype_options'],
    'eval' => [
        'submitOnChange' => true,
        'tl_class' => 'w50',
    ],
    'sql' => "text default '0'",
];

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_author'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_author'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'mandatory' => false,
        'tl_class' => 'w50',
        'decodeEntities' => true,
    ],
    'sql' => "text default ''",
];

//-- Review.Restaurant ------

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_servesCuisine'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_servesCuisine'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'mandatory' => true,
        'tl_class' => 'w50',
        'decodeEntities' => true,
    ],
    'sql' => "text default ''",
];

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_priceRange'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_priceRange'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'mandatory' => true,
        'tl_class' => 'w50',
        'decodeEntities' => true,
    ],
    'sql' => "text default ''",
];

//-- Event ---

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_location'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_location'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'tl_class' => 'w50',
    ],
    'sql' => "text default ''",
];

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_startDate'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_startDate'],
    'default' => time(),
    'exclude' => true,
    'filter' => true,
    'sorting' => true,
    'flag' => 7,       // Sort by month ascending
    'inputType' => 'text',
    'eval' => ['rgxp' => 'datim', 'datepicker' => true, 'mandatory' => true, 'tl_class' => 'w50 wizard'],
    'load_callback' => ['Pdir\\BusinessReviewsBundle\\Dca\\tl_content', 'loadDate'],
    'sql' => "varchar(10) NOT NULL default ''"
];

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_text_endDate'] = [
    'label' => &$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_endDate'],
    'default' => time(),
    'exclude' => true,
    'filter' => true,
    'sorting' => true,
    'flag' => 7,       // Sort by month ascending
    'inputType' => 'text',
    'eval' => ['rgxp' => 'datim', 'datepicker' => true, 'tl_class' => 'w50 wizard'],
    'load_callback' => ['Pdir\\BusinessReviewsBundle\\Dca\\tl_content', 'loadDate'],
    'sql' => "varchar(10) NOT NULL default ''"
];

//------------------------------------------------------------------------

$GLOBALS['TL_DCA'][$tableName]['fields']['pdir_rw_not_available'] = [
    'exclude' => true,
    'input_field_callback' => ['Pdir\\BusinessReviewsBundle\\Dca\\tl_content', 'freeVersionExplanation'],
];
