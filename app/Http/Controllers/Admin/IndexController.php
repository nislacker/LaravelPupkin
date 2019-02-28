<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __construct()
    {
        //$this->middleware(['auth']);
    }

    public function show()
    {
        $array = [
            'title' => 'Laravel Project',
            'data' => [
                'one' => 'List 1',
                'two' => 'List 2',
                'three' => 'List 3',
                'four' => 'List 4',
                'five' => 'List 5',
            ],
            'dataI' => ['List 1', 'List 2', 'List 3', 'List 4', 'List 5'],
            'bvar' => true,
            'script' => "<script>alert('hello')</script>"
        ];

/*
        DB::insert('INSERT INTO `pages` (`name`, `content`) VALUES (:name, :content)',
            ['name' => 'default.index', 'content' => view('default.content')->render()]); //..\..\..\..\resources\views\default\content.blade.php
*/

        if (view()->exists('default.index')) {
            view()->name('default.index', 'indexView');
            return view()->of('indexView', $array)->render();
        }

        abort(404);
    }
}
