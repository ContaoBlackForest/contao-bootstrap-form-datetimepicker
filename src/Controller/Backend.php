<?php

/**
 * Bootstrap datetimepicker for forms in Contao CMS
 *
 * Copyright (C) Bootstrap datetimepicker for forms in Contao CMS
 *
 * @package   contao-bootstrap-form-datetimepicker
 * @file      Backend.php
 * @author    Sven Baumann <baumann.sv@gmail.com>
 * @author    Dominik Tomasi <dominik.tomasi@gmail.com>
 * @license   GNU/LGPL
 * @copyright Copyright 2015 ContaoBlackForest
 */


namespace ContaoBlackForest\Bootstrap\Form\DateTimePicker\Controller;

use Contao\Database;
use Contao\DataContainer;
use Contao\Input;

/**
 * Class Backend
 *
 * @package ContaoBlackForest\Bootstrap\Form\DateTimePicker\Controller
 */
class Backend
{
    /**
     * set class params for standard fields
     *
     * @param DataContainer $dc
     */
    public function adjustFieldsClass(DataContainer $dc)
    {
        /** @var Input $input */
        $input = $GLOBALS['container']['input'];
        /** @var Database $db */
        $db = $GLOBALS['container']['database.connection'];

        if ($input->get('act') === 'edit') {
            $formField = $db->execute("SELECT * FROM tl_form_field WHERE id=" . $dc->id);

            if ($formField->type === 'bootstrap_calendar') {
                $GLOBALS['TL_DCA']['tl_form_field']['fields']['mandatory']['eval']['tl_class'] = 'w50 m12';
                $GLOBALS['TL_DCA']['tl_form_field']['fields']['value']['eval']['tl_class']     = 'w50';
            }
        }
    }
}
