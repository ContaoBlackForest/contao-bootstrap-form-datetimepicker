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
$GLOBALS['TL_LANG']['tl_form_field']['bsDateFormat']     = array('Date format', 'The date format string will be parsed with the PHP date() function.');
$GLOBALS['TL_LANG']['tl_form_field']['bsDateDirection']  = array('Date direction', 'Select if date selection is restricted.');
$GLOBALS['TL_LANG']['tl_form_field']['bsDateParseValue'] = array('Parse default value', 'Parse default value using PHP <a href="http://php.net/strtotime" onclick="window.open(this.href); return false">strtotime()</a>.');
$GLOBALS['TL_LANG']['tl_form_field']['bsDateExcludeCSS'] = array('Do not include CSS', 'Check here if you want to include your own CSS styles for the popup.');
$GLOBALS['TL_LANG']['tl_form_field']['bsDateImage']      = array('Show calendar icon', 'Click here to show a calendar picker icon.');
$GLOBALS['TL_LANG']['tl_form_field']['bsDateImageOnly']  = array('Force date picker', 'Check here if the date must not be entered manually.');


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_form_field']['bsDateDirection_ref']['all']     = 'Allow all dates';
$GLOBALS['TL_LANG']['tl_form_field']['bsDateDirection_ref']['ltToday'] = 'Only dates in the past (excluding today)';
$GLOBALS['TL_LANG']['tl_form_field']['bsDateDirection_ref']['leToday'] = 'Only dates in the past (including today)';
$GLOBALS['TL_LANG']['tl_form_field']['bsDateDirection_ref']['geToday'] = 'Only dates in the future (including today)';
$GLOBALS['TL_LANG']['tl_form_field']['bsDateDirection_ref']['gtToday'] = 'Only dates in the future (excluding today)';
