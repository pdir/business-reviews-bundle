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

use Pdir\BusinessReviewsBundle\Backend\BusinessReviewsSetup;

$tableName = 'tl_content';
// creates a variable 'platform string' to display the currently supported target platforms like Google. etc.
$strPlatforms = BusinessReviewsSetup::strPlatforms('oder');

$GLOBALS['TL_LANG'][$tableName]['pdir_rw_legend'] = 'Lizenzhinweis';

$GLOBALS['TL_LANG'][$tableName]['pdir_rw_review_type_options']['rText'] = 'Text Widget';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_review_type_options']['rStars'] = 'Sterne Widget (Vollversion oder Plugin notwendig)';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_review_type_options']['rCarousel'] = 'Karussell Widget (Vollversion oder Plugin notwendig)';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_review_type_options']['rSticker'] = 'Sticker Widget (Vollversion oder Plugin notwendig)';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_review_type_options']['rCard'] = 'Card Widget (Vollversion oder Plugin notwendig)';

$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_type_options']['LocalBusiness'] = 'Lokales Geschäft';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_type_options']['Product'] = 'Produkt';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_type_options']['Recipe'] = 'Rezept';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_type_options']['Review'] = 'Bewertung';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_type_options']['Event'] = 'Veranstaltung';

$GLOBALS['TL_LANG'][$tableName]['pdir_rw_review_type'] = ['Widget Typ', 'Wählen Sie hier das gewünschte Widget für das Frontend aus.'];

$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_legend'] = 'Bewertung als Text-Widget';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_type'] = ['Typ der Bewertung', 'Wählen Sie hier einen Typ. (Typen siehe: https://schema.org)'];

$GLOBALS['TL_LANG'][$tableName]['pdir_rw_review_legend'] = 'Was wird bewertet?';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_subtype_legend'] = 'Nähere Angaben zum Gegenstand der Bewertung';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_subtype'] = ['Gegenstand der Bewertung', 'Wählen Sie hier den Gegenstand Ihrer Bewertung aus (z.B. ein Restaurant etc., siehe: http://schema.org/)'];

// recipe
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_recipe_legend'] = 'Angaben zur Zubereitung';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_prepTime'] = ['Zeit für die Vorbereitung', 'Hier können Sie die Zeit für die Vorbereitung eingeben.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_cookTime'] = ['Zeit für die Zubereitung', 'Hier können Sie die Zeit für die Zubereitung eingeben.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_totalTime'] = ['Zeit insgesamt', 'Hier können Sie die Gesamtzeit eingeben.', 'insgesamt.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_recipeYield'] = ['Reicht für wieviele Personen?', 'Geben Sie hier an, für wie viele Portionen das Rezept gedacht ist.', 'für ca:'];

// review
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_ratingCount'] = ['Bewertungen insgesamt', 'Geben Sie hier die Anzahl der Bewertungen ein.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_ratingValue'] = ['Aktuelle Bewertung', 'Geben Sie hier den aktuellen Wert der Bewertung an.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_bestRating'] = ['Höchste Bewertung', 'Geben Sie hier den besten Wert der Bewertung an.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_ratingText'] = ['Freitext für Bewertungen', 'Geben Sie hier den Freitext für die Bewertung ein.'];

// review - restaurant
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_event_legend'] = 'Angaben zur Adresse';
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_element_subtype_options']['Restaurant'] = 'Restaurant';

$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_author'] = ['Autor', 'Geben Sie hier an, wer als AutorIn der Bewertung genannt werden soll.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_servesCuisine'] = ['Art der Küche', 'Geben Sie hier die Art der Küche an. (z.B. Indische Küche, Deutsche Küche etc.)'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_priceRange'] = ['Preislage', 'Hier können Sie Angaben zur Preislage machen.'];

// address
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_streetAddress'] = ['Straße', 'Anschrift: Straße und Hausnummer'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_addressLocality'] = ['Ort', 'Anschrift: Ort'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_addressRegion'] = ['Region', 'Region (z.B. Baden, Schwarzwald, Ostseeküste etc.)'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_postalCode'] = ['Postleitzahl', 'Die Postleitzahl.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_telephone'] = ['Telefon', 'Geben Sie hier eine Telefonnummer ein.'];

$GLOBALS['TL_LANG'][$tableName]['pdir_rw_image'] = ['Bild', 'Wählen Sie hier ein Bild aus.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_brand'] = ['Marke', 'Marke des Produktes, Geschäftes oder der Dienstleistung o.ä.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_name'] = ['Name', 'Name des Anbieters, Produktes, Geschäftes oder der Dienstleistung o.ä.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_description'] = ['Beschreibung', 'Beschreibung des Anbieters, Produktes, Geschäftes oder der Dienstleistung o.ä.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_link'] = ['Link URL', 'Link zum Anbieter der Bewertungsdaten, beispielweise Trusted Shops oder Google My Business.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_linkTitle'] = ['Link Text', 'Ausführlicher Titel des Links.'];

// event
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_startDate'] = ['Beginn', 'Geben Sie hier den Beginn der Veranstaltung (mit Urzeit) an.'];
$GLOBALS['TL_LANG'][$tableName]['pdir_rw_text_endDate'] = ['Ende', 'Geben Sie hier das Ende der Veranstaltung (mit Urzeit) an.'];

$GLOBALS['TL_LANG'][$tableName]['freeVersionExplanation'] = "Um diese Feature nutzen zu können, müssen Sie die Vollversion der Erweiterung oder eines der verfügbaren Plugins für $strPlatforms erwerben.";
