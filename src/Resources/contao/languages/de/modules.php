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

$GLOBALS['TL_LANG']['MOD']['pdir'][0] = 'pdir Apps';
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['type'] = 'Business-Reviews';

$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup'][0] = 'Business-Reviews';
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup'][1] = 'Verwalten Sie hier Ihr Business-Reviews Modul';

$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['greeting'] = 'Willkommen beim %s Bundle für Contao';
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['text'] = "Das Business Reviews Bundle ermöglicht dir die einfache Anzeige deiner Bewertungen von mehreren Plattformen, wie $strPlatforms direkt auf deiner Contao-Website mittels eines leistungsstarken und intuitiven Inhaltselementes. Ideal für Restaurants, Einzelhandelsgeschäfte, Franchise-Nehmer, Immobilienunternehmen, Dienstleister sowie Hotel- und Gastwirtschaft und fast jedes andere Unternehmen, welches Bewertungen verschiedener Plattformen auf der eigenen Website anzeigen möchte.";
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['platforms'] = "Das Business Reviews Bundle für Contao unterstützt derzeit die Plattformen $strPlatforms.";
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['example_h21'] = 'Beispiel & Demo';
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['example_h22'] = 'So kann die Integration deiner Bewertungen aussehen:';
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['help_h2'] = 'Hilfe & Links';

$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['setupLinks'] = [
    ['href' => 'https://pdir.de/docs/de/contao/extensions/business-reviews/', 'target' => '_blank', 'html' => 'Dokumentation'],
    ['href' => 'https://github.com/pdir/business-reviews-bundle/issues', 'target' => '_blank', 'html' => 'Probleme melden'],
    ['href' => 'https://github.com/pdir/business-reviews-bundle/', 'target' => '_blank', 'html' => 'Github'],
    ['href' => 'https://demo.pdir.de/business-reviews.html', 'target' => '_blank', 'html' => 'Demo'],
];

$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['editions']['free'] = [
    'payment' => 'kostenlos',
    'product' => 'Free',
    'teaser' => 'Beginne mit den Grundlagen. Zeige deine Bewertungen.',
    //'button_text' => 'jetzt herunterladen',
    'features' => ['+Bewertungen einpflegen', '+1 Standard Template', '-'],
];
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['editions']['starter'] = [
    'payment' => 'einmalig, zzgl. MwSt',
    'product' => 'Starter',
    'teaser' => 'Gehe einen Schritt weiter. Zeige deine Bewertungen ansprechend und wirkungsvoll.',
    'button_text' => 'demnächst verfügbar',
    'features' => [
       '+Bewertungen einpflegen',
        '+4 Standard Templates',
        '-',
        '*Wirkungsvolle Darstellung als Sterne-Bewertung, Carousel, Sticker o. Card',
        '*Anzeige der Bewertungs-Texte (je nach Template)',
        '*Anzeige detaillierter Geschäftsinformationen wie Name, Website, ...',
    ],
];
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['editions']['professionell'] = [
    'payment' => 'einmalig, zzgl. MwSt',
    'product' => 'Professionell',
    'teaser' => "Automatisiere. Importiere deine $selectPlatforms Bewertungen vollautomatisch.",
    'button_text' => 'demnächst verfügbar',
    'features' => [
        '+Bewertungen einpflegen',
        '+5 Standard Templates',
        '-',
        '*Wirkungsvolle Darstellung als Sterne-Bewertung, Carousel, Sticker o. Card',
        '*Anzeige der Bewertungs-Texte (je nach Template)',
        '*Anzeige detaillierter Geschäftsinformationen wie Name, Website, ...',
        '*Vollautomatischer Abgleich deiner Bewertungen von <strong>1 Plattform<sup>*</sup></strong>',
    ],
];
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['editions']['ultimate'] = [
    'payment' => 'einmalig, zzgl. MwSt',
    'product' => 'Ultimate',
    'teaser' => 'Automatisiere alles. Importiere deine Bewertungen <strong>von allen unterstützten Plattformen<sup>*</sup></strong> vollautomatisch.',
    'button_text' => 'demnächst verfügbar',
    'features' => [
        '+Bewertungen einpflegen',
        '+>6 Standard Templates',
        '-',
        '*Wirkungsvolle Darstellung als Sterne-Bewertung, Carousel, Sticker o. Card',
        '*Anzeige der Bewertungs-Texte (je nach Template)',
        '*Anzeige detaillierter Geschäftsinformationen wie Name, Website, ...',
        '*Vollautomatischer Abgleich <strong>all deiner Bewertungen von allen unterstützten Plattformen<sup>*</sup></strong>',
    ],
];

$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['template_h2'] = 'Exklusive Templates für deine Business Reviews inklusive!';
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['template_p'] = '(In den Versionen: %s)';

$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['remark_1'] = "<sup>*</sup>Das Business Reviews Bundle für Contao unterstützt derzeit die Plattformen $strPlatforms.";
$GLOBALS['TL_LANG']['MOD']['businessReviewsSetup']['remark_2'] = "$strPlatforms sind eingetragene Warenzeichen einer Drittpartei und stehen in keiner Verbindung zur pdir GmbH oder der Business Review Erweiterung für Contao.";
