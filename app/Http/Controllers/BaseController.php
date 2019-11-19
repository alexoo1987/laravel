<?php


namespace App\Http\Controllers;


use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaseController
{
    public function list()
    {
        $articles = Article::latest()
            ->where('active', '=', 1)
            ->get();

        return view('list', ['articles' => $articles]);
    }

    public function thisArticle($id)
    {
        $article = Article::find($id);


        return view('article', ['article' => $article]);
    }
//    public function login()
//    {
//        $user=Auth::user();
//        $client=OauthClie;
//        $client = Passport::oauth_clients();
//        return view('authorize',['client'=>$client]);
//    }

    public function logout()
    {
        Auth::logout();


        return redirect('login');
    }

    public function test()
    {
        return view('test');
    }
}
