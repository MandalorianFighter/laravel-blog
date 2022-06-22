<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function about()
    {
        $tags = ['learning', 'programming', 'php', 'oop'];
        $creator = ['Name' => 'Yanush', 'Surname' => 'Polishchuk', 'Position' => 'PHP-programmer', 'E-mail' => 'yanush.polishchuk@gmail.com'];
        return view('page.about', ['tags'=>$tags, 'creator'=>$creator] );
    }
}
