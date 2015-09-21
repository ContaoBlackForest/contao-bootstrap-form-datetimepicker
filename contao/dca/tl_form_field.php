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
 * Config
 */
$GLOBALS['TL_DCA']['tl_form_field']['config']['onload_callback'][] = array('\ContaoBlackForest\Bootstrap\Form\DateTimePicker\Controller\Backend', 'adjustFieldsClass');


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['bootstrap_calendar'] = '{type_legend},type,name,label;{fconfig_legend},rgxp,mandatory,placeholder,maxlength,bsDateFormat,bsDateDirection,bsDateExcludeCSS,bsDateImage,bsDateImageOnly;{expert_legend:hide},value,bsDateParseValue,class,accesskey;{submit_legend},addSubmit';


/**
 * Fields
 */
$bsDateTimePickerFields = array
(
    'bsDateFormat'     => array
    (
        'label'       => &$GLOBALS['TL_LANG']['tl_form_field']['bsDateFormat'],
        'exclude'     => true,
        'inputType'   => 'text',
        'eval'        => array('helpwizard' => true, 'tl_class' => 'clr w50'),
        'explanation' => 'dateFormat',
        'sql'         => "varchar(32) NOT NULL default ''",
    ),
    'bsDateDirection'  => array
    (
        'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['bsDateDirection'],
        'exclude'   => true,
        'inputType' => 'select',
        'options'   => array('all', 'ltToday', 'leToday', 'geToday', 'gtToday'),
        'reference' => &$GLOBALS['TL_LANG']['tl_form_field']['bsDateDirection_ref'],
        'eval'      => array('tl_class' => 'w50'),
        'sql'       => "varchar(10) NOT NULL default ''",
    ),
    'bsDateParseValue' => array
    (
        'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['bsDateParseValue'],
        'exclude'   => true,
        'inputType' => 'checkbox',
        'eval'      => array('tl_class' => 'w50 m12'),
        'sql'       => "char(1) NOT NULL default ''",
    ),
    'bsDateExcludeCSS' => array
    (
        'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['bsDateExcludeCSS'],
        'exclude'   => true,
        'inputType' => 'checkbox',
        'eval'      => array('tl_class' => 'w50'),
        'sql'       => "char(1) NOT NULL default ''",
    ),
    'bsDateImage'      => array
    (
        'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['bsDateImage'],
        'exclude'   => true,
        'default'   => '1',
        'inputType' => 'checkbox',
        'eval'      => array('tl_class' => 'clr'),
        'sql'       => "char(1) NOT NULL default '1'",
    ),
    'bsDateImageOnly'  => array
    (
        'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['bsDateImageOnly'],
        'exclude'   => true,
        'inputType' => 'checkbox',
        'eval'      => array('tl_class' => 'w50'),
        'sql'       => "char(1) NOT NULL default ''",
    ),
);
$GLOBALS['TL_DCA']['tl_form_field']['fields'] = array_merge($GLOBALS['TL_DCA']['tl_form_field']['fields'], $bsDateTimePickerFields);
