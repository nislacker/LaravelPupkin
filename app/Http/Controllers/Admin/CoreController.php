<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Country;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Support\Facades\DB;

class CoreController extends Controller
{
    protected static $articles;

    public static function addArticles($array)
    {
        return self::$articles[] = $array;
    }

    //
    public function showArticle($page)
    {
        //echo 'Middleware';
        echo 'Article page: ' . $page;
        return view('default.article', ['title' => 'Some Article']);
    }

    public function showArticles()
    {
//       $country = Country::find(1);
//       $user = User::find(2);
//
//       $country->user()->associate($user);
//       $country->save();

//        $user = User::find(2);
//        $role_id = Role::find(2)->id;
//
//        $user->roles()->detach($role_id);

        $article = Article::find(40);

        dump((string)$article);

//        $article->name = 'SOME TEXT';
//        $article->text = ['key' => 'value'];
//        dump($article->name);
//        dump($article->text);
//        $article->save();

        return;
        //return view('default.articles', ['title' => 'All Articles']);
    }

}
