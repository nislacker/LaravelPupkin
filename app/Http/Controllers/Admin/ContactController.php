<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /*protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }*/

    public function show(Request $request, $id = false)
    {
        /*
        DB::insert('INSERT INTO `pages` (`name`, `content`) VALUES (?, ?)', ['default.contact', '    <div class="container">

        {{--<pre>--}}
        {{--{{print_r(Session::all())}}--}}
        {{--</pre>--}}

        <div class="row">
            <div class="col-md-10 col-md-offset-3">
                <div class="well well-sm">
                    <form class="form-horizontal" action="{{ route(\'contact\') }}" method="post">
                        {{ csrf_field() }}

                        <fieldset>
                            <legend class="text-center">Contact us</legend>

                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Name</label>
                                <div class="col-md-9">
                                    <input id="name" name="name" type="text" placeholder="Your name"
                                           class="form-control" value="{{old(\'name\')}}">
                                </div>
                            </div>

                            <!-- Email input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email">Your E-mail</label>
                                <div class="col-md-9">
                                    <input id="email" name="email" type="text" placeholder="Your email"
                                           class="form-control" value="{{old(\'email\')}}">
                                </div>
                            </div>

                            <!-- Message body -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">Your message</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="message" name="message"
                                              placeholder="Please enter your message here..."
                                              rows="5">{{ old(\'message\') }}</textarea>
                                </div>
                            </div>

                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-9 text-right">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>']);
*/

        //$contents = \Illuminate\Support\Facades\DB::select('SELECT `name`, `content` FROM `pages` WHERE `name` = ?', ['default.contact']);

        $contents = Page::where('name','default.contact')->get();


        $id = $request->query('id');

        if (view()->exists('default.contact')) {
            return view('default.contact', ['title' => 'Contacts. Id = ' . $id . ' ', 'contents' => $contents]);
        }

        abort(404);
    }
}






















