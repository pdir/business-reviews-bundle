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

use Pdir\BusinessReviewsBundle\Backend\BusinessReviewsSetup;

$tableName = 'tl_content';
// creates a variable 'platform string' to display the currently supported target platforms like Google. etc.
$strPlatforms = BusinessReviewsSetup::strPlatforms('oder');

$GLOBALS['TL_LANG'][$tableName]['pdir_rw_legend'] = 'License notice';

$GLOBALS['TL_LANG'][$tableName]['pdir_rw_review_type_options']['rText'] = 'Text Widget';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_review_type_options']['rCarousel'] = 'Carousel widget (Full version or plugin required)';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_review_type_options']['rStars'] = 'Star Widget (Full version or plugin required)';

$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_type_options']['LocalBusiness'] = 'Local business';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_type_options']['Product'] = 'Product';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_type_options']['Recipe'] = 'Recipe';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_type_options']['Review'] = 'Rating';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_type_options']['Event'] = 'Event';

$GLOBALS['TL_LANG'][$tableName]['pdir_rw_review_type'] = ['Widget type', 'Select the widget you want for the frontend here.'];

$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_legend'] = ' Review as Text Widget';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_type'] = ['Element type', 'Enter the element type here. (http://schema.org/)'];

$GLOBALS['TL_LANG'][$tableName]['pdir_rw_review_legend'] = 'What is rated?';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_subtype_legend'] = 'More detailed information on the subject of the rating';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_subtype'] = ['Subject of the rating', 'Select the subject of your rating here (e.g. a restaurant etc., see: http://schema.org/)'];

// recipe
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_recipeTegend'] = 'Preparation information';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_prepTime'] = ['Preparation time', 'Here you can enter the time for preparation.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_cookTime'] = ['Cooking time', 'Here you can enter the time for cooking.', 'cooking time.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_totalTime'] = ['Total time', 'Here you can enter the over all time.', 'total time.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_recipeYield'] = ['How many people is the recipe intended for?', 'Please indicate here how many servings the recipe is intended for.', 'For approx:'];

// review
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_ratingCount'] = ['Number of reviews', 'Please enter the number of reviews here.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_ratingValue'] = ['Current value', 'Please enter the desired or current value of the ratings here.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_bestRating'] = ['Best value', 'Please enter the best value of your ratings here.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_ratingText'] = ['Free text for ratings', 'Please enter the free text for ratings here.'];

// review - restaurant
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_event_legend'] = 'Address details';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_subtype_options']['Restaurant'] = 'Restaurant';

$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_author'] = ['Author', 'Enter here who should be named as the author of the review.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_servesCuisine'] = ['Type of cuisine', 'Enter the type of the cuisine here. (e.g. Indian cuisine etc.)'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_priceRange'] = ['Price range', 'Here you can provide information about the price range.'];

// address
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_streetAddress'] = ['Street', 'Address: street and house number'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_addressLocality'] = ['Place', 'Address: Place'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_addressRegion'] = ['Region', 'Region (e.g. Baden, Black Forest, Baltic Sea coast etc.)'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_postalCode'] = ['Post code', 'The Post code.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_telephone'] = ['Phone', 'Enter a phone number here.'];

$GLOBALS['TL_LANG'][$tableName]['pdir_rw_image'] = ['Image', 'Select an image here.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_brand'] = ['Brand', 'Brand of the product, business or service or similar.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_name'] = ['Name', 'Name of the provider, product, business or service or similar.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_description'] = ['Description', 'Description of the provider, product, business or service or similar.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_link'] = ['Link to the source of the reviews', 'Link to the provider of the evaluation data, e.g. Trusted Shops or Google My Business.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_linkTitle'] = ['Link title', 'Full title of the link.'];

// event
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_startDate'] = ['Start', 'Enter the start of the event (with time) here.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_endDate'] = ['End', 'Enter the start of the event (with time) here.'];

$GLOBALS['TL_LANG'][$tableName]['freeVersionExplanation'] = "In order to be able to use this feature, you must purchase the full version of the extension or one of the available plugins for $strPlatforms.";
