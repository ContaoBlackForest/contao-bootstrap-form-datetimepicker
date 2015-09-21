<?php

/**
 * Bootstrap datetimepicker for forms in Contao CMS
 *
 * Copyright (C) Bootstrap datetimepicker for forms in Contao CMS
 *
 * @package   contao-bootstrap-form-datetimepicker
 * @file      tl_form_field.php
 * @author    Sven Baumann <baumann.sv@gmail.com>
 * @author    Dominik Tomasi <dominik.tomasi@gmail.com>
 * @license   GNU/LGPL
 * @copyright Copyright 2015 ContaoBlackForest
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_form_field']['bsDateFormat']     = array('Datumsformat', 'Der Datumsformat-String wird mit der PHP-Funktion date() geparst.');
$GLOBALS['TL_LANG']['tl_form_field']['bsDateDirection']  = array('Datumsrichtung', 'Wählen Sie ob die Datumsauswahl eingeschränkt werden soll.');
$GLOBALS['TL_LANG']['tl_form_field']['bsDateParseValue'] = array('Standard-Wert konvertieren', 'Den Standard-Wert mittels PHP <a href="http://php.net/strtotime" onclick="window.open(this.href); return false">strtotime()</a> analysieren.');
$GLOBALS['TL_LANG']['tl_form_field']['bsDateExcludeCSS'] = array('CSS-Datei nicht einbinden', 'Aktivieren Sie diese Option wenn Sie ein eigenes Stylesheet für das Popup einbinden wollen.');
$GLOBALS['TL_LANG']['tl_form_field']['bsDateImage']      = array('Kalender-Icon anzeigen', 'Klicken Sie hier um das Kalender-Icons anzuzeigen.');
$GLOBALS['TL_LANG']['tl_form_field']['bsDateImageOnly']  = array('Nur Datumsauswahl erlauben', 'Klicken Sie hier wenn das Datum nicht von Hand im Feld eingegeben werden darf.');


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_form_field']['bsDateDirection_ref']['all']     = 'Alle Daten erlaubt';
$GLOBALS['TL_LANG']['tl_form_field']['bsDateDirection_ref']['ltToday'] = 'Nur Datum in der Vergangenheit (exkl. Heute)';
$GLOBALS['TL_LANG']['tl_form_field']['bsDateDirection_ref']['leToday'] = 'Nur Datum in der Vergangenheit (inkl. Heute)';
$GLOBALS['TL_LANG']['tl_form_field']['bsDateDirection_ref']['geToday'] = 'Nur Datum in der Zukunft (inkl. Heute)';
$GLOBALS['TL_LANG']['tl_form_field']['bsDateDirection_ref']['gtToday'] = 'Nur Datum in der Zukunft (exkl. Heute)';
