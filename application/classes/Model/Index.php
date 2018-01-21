<?php defined('SYSPATH') or die('No direct script access.');

class Model_Index extends Model
{
    public function allProduct()
    {
       return [
           'товар 1' => 100,
           'товар 2' => 200,
           'товар 3' => 300,
           'товар 4' => 400,
       ];


    }

}
