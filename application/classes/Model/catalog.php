<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catalog extends Model
{
    public function allProduct()
    {
        return [
            'McKinney W. Python for Data Analysis' => 3500,
            'Piligrim M. Dive into Python' => 433,
            'Stefanov S. JavaScript: Patterns' => 3441,
            'Zandstra M. PHP Objects, Patterns, and Practice' => 7894,
        ];


    }

}
