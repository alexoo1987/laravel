<?php


namespace App\Http\Controllers;


use App\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list()
    {
        $articles = Article::latest()
            ->where('active', '=', 1)
            ->get();

        return response()->json($articles);
    }


    public function add(Request $request)
    {
        $data = $request->post();

        return response()->json(Article::firstOrCreate($data));
    }

    public function delete($id)
    {

        return response()->json(Article::where('id', $id)->delete());
    }

    public function edit($id, Request $request)
    {
        $data = $request->post();

        return response()->json(Article::where('id', $id)->update($data));

    }
}
