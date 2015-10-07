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


namespace ContaoBlackForest\Bootstrap\Form\DateTimePicker;

use Contao\Config;
use Contao\Date;
use Contao\FormTextField;
use Contao\FrontendTemplate;

/**
 * Class CalendarField
 *
 * @package ContaoBlackForest\Bootstrap\Form\DateTimePicker
 */
class CalendarField extends FormTextField
{
    /**
     * Initialize the object
     *
     * @param array $attributes
     *
     * @internal param array $arrAttributes An optional attributes array
     */
    public function __construct($attributes = array())
    {
        parent::__construct($attributes);

        if ($this->rgxp != 'datim' && $this->rgxp != 'time') {
            $this->rgxp = 'date';
        }
    }

    /**
     * Generate the widget and return it as string
     *
     * @return string The widget markup
     */
    public function generate()
    {
        $this->bindDateTimePickerFileAndScript();

        $template        = new FrontendTemplate('form_bootstrap_calendar_field');
        $template->input = parent::generate();
        $template->id    = $this->id;
        $template->icon  = $this->bsDateImage;
        $template->name  = $this->name;

        return $template->parse();
    }

    protected function validator($varInput)
    {
        return parent::validator($varInput);

        // TODO: Implement own methode
    }


    /**
     * get the standard configuration for the datetime picker
     *
     * @return array
     */
    protected function getPickerBaseConfig()
    {
        return array(
            'locale'           => $this->getPickerLanguage(),
            'format'           => $this->getDateFormat(),
            'ignoreReadonly'   => $this->parseIgnoreReadonly(),
            'useCurrent'       => false,
            'allowInputToggle' => true,
            'showClear'        => true,
            'showClose'        => true,
            'minDate'          => $this->getPickerMinDate(),
            'maxDate'          => $this->getPickerMaxDate(),
        );
    }

    /**
     * get the minimum date for the datetime picker
     *
     * @return bool|string date
     */
    protected function getPickerMinDate()
    {
        $time = new \DateTime('now');

        switch ($this->bsDateDirection) {
            case 'geToday':
                $time->modify('today');
                return $time->format('Y-m-d H:i:s');
            case 'gtToday':
                $time->modify('+1 day');
                return $time->format('Y-m-d H:i:s');
        }

        return false;
    }

    /**
     * get the maximum date for the datetime picker
     *
     * @return bool|string date
     */
    protected function getPickerMaxDate()
    {
        $time = new \DateTime('now');

        switch ($this->bsDateDirection) {
            case 'ltToday':
                $time->modify('-1 day');
                return $time->format('Y-m-d H:i:s');
            case 'leToday':
                $time->modify('today');
                return $time->format('Y-m-d H:i:s');
        }

        return false;
    }

    /**
     * get the language for the Picker if the local language file exists
     *
     * @return mixed|string language
     */
    protected function getPickerLanguage()
    {
        if ($this->getLocalLanguageFile()) {
            return $this->getGlobalLanguage();
        }

        return 'en';
    }

    /**
     * get the local language file path
     *
     * @return null|string file path
     */
    protected function getLocalLanguageFile()
    {
        $file = 'system/modules/contao-bootstrap-form-datetimepicker/assets/bs-datetimepicker/js/locale/' . $this->getGlobalLanguage() . '.js';

        if (file_exists(TL_ROOT . '/' . $file)) {
            return $file;
        }

        return null;
    }

    /**
     * get the language from $GLOBALS['TL_LANGUAGE']
     *
     * @return mixed language
     */
    protected function getGlobalLanguage()
    {
        return str_replace('-', '_', $GLOBALS['TL_LANGUAGE']);
    }

    /**
     * make the input field ready only
     */
    protected function parseIgnoreReadonly()
    {
        if ($this->bsDateImageOnly) {
            $this->readonly = true;

            return true;
        }

        return false;
    }

    /**
     * @param $dateFormat
     */
    protected function parseStandardDateValue($dateFormat)
    {
        if ($this->bsDateParseValue && $this->varValue != '') {
            $this->varValue = \Date::parse($this->getDateFormat(), strtotime($this->varValue));
        }
    }

    /**
     * get the date direction
     *
     * @return mixed|null
     */
    /*protected function getDateDirection()
    {
        if ($this->bsDateDirection) {
            return $this->bsDateDirection;
        }

        return null;
    }*/

    /**
     * get the format for the date/time
     *
     * @return mixed|null
     */
    protected function getDateFormat()
    {
        $value =  Config::get($this->rgxp . 'Format');

        if ($this->bsDateFormat) {
            $value =  $this->bsDateFormat;
        }

        $value = Date::getInputFormat($value);

        // TODO make optional 24 hours mode
        if (preg_match('[hh]', $value)) {
            $value = str_replace('hh', 'H', $value);
        }

        return $value;
    }

    /**
     * bind css, js and script for the datetime picker
     * if compression is active, as well active for this
     */
    protected function bindDateTimePickerFileAndScript()
    {
        if (Config::get('gzipScripts')) {
            $GLOBALS['TL_JAVASCRIPT']['moment.min.js'] = 'system/modules/contao-bootstrap-form-datetimepicker/assets/bs-datetimepicker/js/moment.min.js|static';
            if ($file = $this->getLocalLanguageFile()) {
                $GLOBALS['TL_JAVASCRIPT']['moment-local-' . $this->getPickerLanguage() . '.js'] = $file . '|static';
            }
            $GLOBALS['TL_JAVASCRIPT']['bootstrap-datetimepicker.min.js'] = 'system/modules/contao-bootstrap-form-datetimepicker/assets/bs-datetimepicker/js/bootstrap-datetimepicker.min.js|static';

            if (!$this->bsDateExcludeCSS) {
                $GLOBALS['TL_CSS']['bootstrap-datetimepicker.min.css'] = 'system/modules/contao-bootstrap-form-datetimepicker/assets/bs-datetimepicker/css/bootstrap-datetimepicker.min.css|static';
            }
        }

        if (!Config::get('gzipScripts')) {
            $GLOBALS['TL_JAVASCRIPT']['moment.js'] = 'system/modules/contao-bootstrap-form-datetimepicker/assets/bs-datetimepicker/js/moment.js';
            if ($file = $this->getLocalLanguageFile()) {
                $GLOBALS['TL_JAVASCRIPT']['moment-local-' . $this->getPickerLanguage() . '.js'] = $file;
            }
            $GLOBALS['TL_JAVASCRIPT']['bootstrap-datetimepicker.js'] = 'system/modules/contao-bootstrap-form-datetimepicker/assets/bs-datetimepicker/js/bootstrap-datetimepicker.js';

            if (!$this->bsDateExcludeCSS) {
                $GLOBALS['TL_CSS']['bootstrap-datetimepicker.css'] = 'system/modules/contao-bootstrap-form-datetimepicker/assets/bs-datetimepicker/css/bootstrap-datetimepicker.css';
            }
        }

        $GLOBALS['TL_JQUERY'][] = "
            <script type='text/javascript'>
                $(function () {
                    $('#datetimepicker_" . $this->id . "').datetimepicker(
                        " . json_encode($this->getPickerBaseConfig()) . "
                    );
                });
            </script>
        ";
    }
}
