<?php

namespace App\Http\Controllers;

use App\Article;

use App\ArticleType;
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
        // GET THE ARTICLE BASED ON THE SLUG PROVIDED //
        $article = Article::where('slug', $slug)->firstOrFail();

        // GET THE ARTICLE TYPE //
        $type = ArticleType::where('id', $article->type)->firstOrFail();

        // RETURN THE VIEW WITH THE CORRECT TYPE //
        return view('articles.' . $type->name, compact('article'));
    }
}
