<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class RatingController extends Controller
{
    //
    public function index()
    {
	$published = Article::isPublished()->orderBy('likes_count', 'desc')->get();
        return view('rating.index', [ 'published' => $published ]);
    }
}
