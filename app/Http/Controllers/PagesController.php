<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{

    //
    public function index() {
        echo __METHOD__;
    }

    public function postIndex() {
        //echo __METHOD__;

        //var_dump($_POST);
    }
}
