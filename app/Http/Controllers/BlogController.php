<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){

        $articles = Article::all();

        return view('articles.listing', compact('articles'));
    }
    public function article($slug){
        $article = Article::where('slug', $slug)->firstOrFail();

        return view('articles.standard', compact('article'));
    }
}
