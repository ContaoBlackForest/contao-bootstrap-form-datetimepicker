<?php

/**
 * Bootstrap datetimepicker for forms in Contao CMS
 *
 * Copyright (C) Bootstrap datetimepicker for forms in Contao CMS
 *
 * @package   contao-bootstrap-form-datetimepicker
 * @file      config.php
 * @author    Sven Baumann <baumann.sv@gmail.com>
 * @author    Dominik Tomasi <dominik.tomasi@gmail.com>
 * @license   GNU/LGPL
 * @copyright Copyright 2015 ContaoBlackForest
 */


/**
 * Form fields
 */
$GLOBALS['BE_FFL']['bootstrap_calendar'] = 'TextField';
$GLOBALS['TL_FFL']['bootstrap_calendar'] = '\ContaoBlackForest\Bootstrap\Form\DateTimePicker\CalendarField';
