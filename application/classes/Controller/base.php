<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Общий базовый класс
 */
class Controller_Base extends Controller_Template
{
    public $template = 'v_base';

    public function before()
    {
        parent::before();


        $siteName = "ITBooks";
        $siteDescription = "Интернет-магазин книг по IT";

        //Вывод в шаблон
        $this->template->siteName = $siteName;
        $this->template->siteDescription = $siteDescription;
        /**
         * название текущей страницы
         */
        $this->template->pageTitle = null;

        //Подключение стилей и скриптов
        $this->template->styles = [];
        $this->template->scripts = [];

        //Подключение блоков
        $this->template->blockLeft = null;
        $this->template->blockCenter = null;
        $this->template->blockRight = null;


    }
}