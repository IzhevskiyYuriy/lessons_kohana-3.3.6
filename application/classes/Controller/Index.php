<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Template
{
    public $template = 'v_index';

    public function action_index()
    {
        $this->template->title = 'Интернет-магазин';
        $this->template->name = 'Главная страница';
        Professor_Baxter::teach();
    }

    public function action_catalog()
    {

        $this->template->title = 'Интернет-магазин';
        $allProducts = Model::factory('Index')->allProduct();
        $this->template->name = View::factory('v_catalog', ['allProducts' => $allProducts]);

    }

}
