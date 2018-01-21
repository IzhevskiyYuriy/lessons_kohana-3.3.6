<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Виджет меню сайта
 */
class Controller_Widgets_Menu extends Controller_Template
{
    public $template = 'widgets/w_menu'; //шаблон виджета

    public function action_index()
    {
        //Получаем список категорий
        $categories = Model::factory('catalog')->categories();
        $this->template->categories = $categories;

    }

}
