<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Виджет меню сайта
 */
class Controller_Widgets_Topproducrs extends Controller_Template
{
    public $template = 'widgets/w_topproducts'; //шаблон виджета

    public function action_index()
    {
        //Получаем список категорий
        $products = Model::factory('catalog')->topProducts();
        $this->template->products = $products;

    }

}
