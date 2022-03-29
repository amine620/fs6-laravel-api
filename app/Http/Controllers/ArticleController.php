<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Http\Resources\ArticleMobileResource;
use App\Http\Resources\ArticleWebResource;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    

    public function all()
    {
        
        $articles=Article::latest()->get();
        return response([
            'articles'=>ArticleWebResource::collection($articles)
        ]);
    }

    public function all_for_mobile()
    {

        $articles=Article::latest()->get();
        return response([
            'articles'=>ArticleMobileResource::collection($articles)
        ]);
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

    public function update(ArticleRequest $req,$id)
    {
        $article=Article::find($id);
        
        $article->update($req->validated());

        return response([
            'article'=>$article
        ]);
    }

  
}
