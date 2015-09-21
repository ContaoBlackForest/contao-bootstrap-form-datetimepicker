<?php

/**
 * Bootstrap datetimepicker for forms in Contao CMS
 *
 * Copyright (C) Bootstrap datetimepicker for forms in Contao CMS
 *
 * @package   contao-bootstrap-form-datetimepicker
 * @file      default.php
 * @author    Sven Baumann <baumann.sv@gmail.com>
 * @author    Dominik Tomasi <dominik.tomasi@gmail.com>
 * @license   GNU/LGPL
 * @copyright Copyright 2015 ContaoBlackForest
 */


/**
 * Form fields
 */
$GLOBALS['TL_LANG']['FFL']['bootstrap_calendar'] = array('Bootstrap Kalenderfeld', 'ein Feld dass die von Contao bekannte Kalender-Auswahl im Frontend anzeigt.');


/**
 * Errors
 */
$GLOBALS['TL_LANG']['ERR']['bootstrap_calendarfield_direction_ltToday'] = 'Bitte geben Sie ein Datum in der Vergangenheit (exkl. heute) ein.';
$GLOBALS['TL_LANG']['ERR']['bootstrap_calendarfield_direction_leToday'] = 'Bitte geben Sie ein Datum in der Vergangenheit (inkl. heute) ein.';
$GLOBALS['TL_LANG']['ERR']['bootstrap_calendarfield_direction_geToday'] = 'Bitte geben Sie ein Datum in der Zukunft (inkl. heute) ein.';
$GLOBALS['TL_LANG']['ERR']['bootstrap_calendarfield_direction_gtToday'] = 'Bitte geben Sie ein Datum in der Zukunft (exkl. heute) ein.';
