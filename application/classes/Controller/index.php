<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Base
{
    public function before()
    {
        parent::before();
        /**
         * HMVC
         * Отправление запроса, который вернет результат, того, что находится в папке widgets/menu
         */
        $menu = Request::factory('widgets/menu')->execute();
        $topproducts = Request::factory('widgets/topproducts')->execute();

        //Вывод в шаблок
        $this->template->blockLeft = array($menu);
        $this->template->blockRight = array($topproducts);

    }

    public function action_index()
    {
        $blockCenter = View::factory('v_index');

        //Вывод в шаблок
        $this->template->pageTitle = 'Главная';
        $this->template->blockCenter = array($blockCenter);
    }


}
