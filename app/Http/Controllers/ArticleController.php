<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function all()
    {
        $articles=Article::latest()->get();
        return response(['articles'=>$articles]);
    }

    public function show($id)
    {
        $article=Article::findOrFail($id);
        return response(['article'=>$article]);
    }

    public function destroy($id)
    {
       Article::findOrFail($id)->delete();
       return response(['message'=>'article was deleted']);

    }

    public function store(ArticleRequest $req)
    {
         $article= Article::create($req->validated());
        return response([
            'article'=>$article
        ]);
    }
  
}
