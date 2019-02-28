<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function show()
    {
        if (view()->exists('default.about')) {
/*

*/

            $view = view('default.about', ['title' => 'HELLO', 'title2' => 'SUMMER & SUN!!!'])->render();
            return (new Response($view))->header('Content-Type', 'newType');

            view()->name('default.about', 'aboutView');
            return view()->of('aboutView', ['title' => 'HELLO', 'title2' => 'SUMMER & SUN!!!'])->render();
        }

        abort(404);
    }
}
