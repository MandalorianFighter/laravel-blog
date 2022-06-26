<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Article;


class ArticleController extends Controller
{
    //
    public function index(StorePostRequest $request)
    {
        $q = $request->input('q');
        
        $success = $request->session()->get('success');
        
        $articles = Article::where('name', 'like', "%{$q}%")->paginate();

        return view('article.index', compact('articles', 'q', 'success'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    public function store(StorePostRequest $request)
    {
        $data = $request->validated();
        $article = new Article();
        $article->fill($data);
        $article->save();

        return redirect()
            ->route('articles.index')->with('success','Article created successfully');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    public function update(StorePostRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $data = $request->validated();

        $article->fill($data);
        $article->save();
        return redirect()->route('articles.index')->with('success', 'Article updated successfully');
    }
}
