<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Admin extends Controller
{
    public function action_index()
    {
        echo Myclass::getReqult();
        echo '<br>';
        Professor_Baxter::teach();

    }

    /**
     * доступ к файлу конфигурации
     */
    public function action_config()
    {
        /*
       $options = Kohana::$config->load('myconf.options');
        print_r($options);
        */
        /*
        $config = Kohana::$config->load('myconf');
        $options = $config->get('options');
        */
        /*
        $options = Kohana::$config->load('myconf')->options;
        print_r($options);
        */

        $options = Kohana::$config->load('myconf')->options['foo'];
        print_r($options);

    }

    public function action_lang()
    {
        I18n::lang('ru');
        echo __('Hello world'); //Привет мир
        echo '<br>';

        $username = 'Юрий';
        echo __('Welcome :user', array(':user' => $username));

    }


    public function action_message()
    {
       $result = Kohana::message('forms/contact', 'errors.user_not_found');
        print_r($result);
    }

    public function action_request_response()
    {
        //$resutl = $this->request->controller(); // Admin
      // $resutl = $this->request->action(); // request_response
        //$resutl = $this->request->directory(); // Admin
        //$resutl = Kohana_Request::detect_uri(); // admin/admin/request_response
        //$resutl = $this->request->detect_uri();// /admin/admin/request_response
         $resutl = $this->request->param('id'); //http://kohana.loc/admin/admin/request_response/16      -> 16
        //$resutl = Request::factory('https://www.google.com.ua')->execute();

        //$resutl = $this->response->status(); //200
       //HTTP::redirect('welcome');
      //$resutl = $this->redirect('welcome');
      //$resutl = $this->redirect('welcome');

        $this->response->body($resutl);

    }
}