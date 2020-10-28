<?php

namespace App\Http\Controllers;

//Articleクラスを読み込み
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }

    // indexページへ移動
    public function index()
    {
        // モデル名::テーブル全件取得
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $article = new Article;

        $article->title = $request->title;
        $article->body = $request->body;

        $article->timestamps = false;
        $article->save();

        return redirect('/articles');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('aritcles.edit', ['article' => $article]);
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);

        $article->title = $request->title;
        $article->body = $request->body;

        $article->timestamps = false;
        $article->save();

        return redirect('/articles');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles');
    }
}
