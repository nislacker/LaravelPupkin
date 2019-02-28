<?php

namespace App\Http\Controllers;

use \App\Http\Controllers\Controller;

class FirstController extends Controller
{
    public function showAbout($id)
    {
        echo 'About: ' . $id;
        //echo __METHOD__;
    }

    public function showPages($id)
    {
        echo 'Page: ' . $id;
        //echo __METHOD__;
    }
}