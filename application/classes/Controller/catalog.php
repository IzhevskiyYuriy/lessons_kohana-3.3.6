<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Каталог
 */
class Conroller_Catalog extends Controller_Base
{
    public function action_index()
    {
        //Получаем список продуктов
        $allProducts = Model::factory('catalog')->allProducts();
        $content = View::factory('v_catalog', ['product' => $allProducts]);

        //Выводим в шаблон
        $this->template->pageTitle = 'Каталог';
        $this->template->blockCenter = array($content);

    }
}