<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class ArticleController extends Controller
{
    //
    public function index(Request $request)
    {
        $q = $request->input('q');
        $articles = Article::where('name', 'like', "%{$q}%")->paginate();

        return view('article.index', compact('articles', 'q'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }
}
