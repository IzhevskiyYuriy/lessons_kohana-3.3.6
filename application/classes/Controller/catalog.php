<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Каталог
 */
class Controller_Catalog extends Controller_Base
{
    public function before()
    {
        parent::before();
        /**
         * HMVC
         * Отправление запроса, который вернет результат, того, что находится в папке widgets/menu
         */
        $menu = Request::factory('widgets/menu')->execute();


        //Вывод в шаблок
        $this->template->blockLeft = array($menu);


    }

    public function action_index()
    {
        //Получаем список продуктов
        $allProducts = Model::factory('catalog')->allProducts();

        $content = View::factory('v_catalog', ['allProducts' => $allProducts]);

        //Выводим в шаблон
        $this->template->pageTitle = 'Каталог';
        $this->template->blockCenter = array($content);

    }
}