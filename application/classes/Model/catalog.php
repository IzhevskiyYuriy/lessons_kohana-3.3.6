<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catalog extends Model
{
    public function allProducts()
    {
        return [
            'McKinney W. Python for Data Analysis' => 3500,
            'Piligrim M. Dive into Python' => 433,
            'Stefanov S. JavaScript: Patterns' => 3441,
            'Zandstra M. PHP Objects, Patterns, and Practice' => 7894,
        ];


    }
    public function categories()
    {
        return [
            '1' => 'Stefanov S. JavaScript: Patterns',
            '2' => 'Zandstra M. PHP Objects, Patterns, and Practice',
            '3' => 'Piligrim M. Dive into Python',
            '4' => 'McKinney W. Python for Data Analysis',
        ];


    }

    public function topProducts()
    {
        return [
            '1' => 'Stefanov S. JavaScript: Patterns',
            '2' => 'Zandstra M. PHP Objects, Patterns, and Practice',
            '3' => 'Piligrim M. Dive into Python',
            '4' => 'McKinney W. Python for Data Analysis',
        ];


    }

}
