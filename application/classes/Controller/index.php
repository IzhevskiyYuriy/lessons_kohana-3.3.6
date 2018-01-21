<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Base
{
    public function action_index()
    {
        $blockCenter = View::factory('v_index');

        //Вывод в шаблок
        $this->template->pageTitle = 'Главная';
        $this->template->blockCenter = array($blockCenter);
    }


}
