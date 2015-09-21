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
$GLOBALS['TL_LANG']['FFL']['bootstrap_calendar'] = array('Calendar field Bootstrap', 'a field that displays the Contao-known calendar picker in frontend.');


/**
 * Errors
 */
$GLOBALS['TL_LANG']['ERR']['bootstrap_calendarfield_direction_ltToday'] = 'Please enter a date in the past (excluding today).';
$GLOBALS['TL_LANG']['ERR']['bootstrap_calendarfield_direction_leToday'] = 'Please enter a date in the past (including today).';
$GLOBALS['TL_LANG']['ERR']['bootstrap_calendarfield_direction_geToday'] = 'Please enter a date in the future (including today).';
$GLOBALS['TL_LANG']['ERR']['bootstrap_calendarfield_direction_gtToday'] = 'Please enter a date in the future (excluding today).';
