<?php

namespace App\Http\Controllers;

use App\Article;

use App\ArticleAuthor;
use App\ArticleType;
use App\Http\Requests\ArticleRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Function for the blog homepage, displaing all published posts.
     */
    public function index(){
        // Get latest published articles, sorted by date & select only given fields.
        $articles = Article::latest('published')->published()->listing()->get();

        return view('core.article.index', compact('articles'));
    }

    /**
     * Function for update a blog article.
     */
    public function create(){
        
    }

    /**
     * Function for storing a new blog article.
     *
     * @param $id
     * @param ArticleRequest $request
     */
    public function store($id, ArticleRequest $request){
        
    }

    /**
     * Function for showing a blog article.
     *
     * @param $slug
     * @return \Illuminate\View\View
     * @internal param $id
     */
    public function show($slug){
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('core.article.' . $article->type, compact('article'));
    }

    /**
     * Function for editing an blog article.
     *
     * @param $id
     */
    public function edit($id){
        
    }

    /**
     * Function for updating an blog article.
     *
     * @param $id
     */
    public function update($id){
        
    }

    /**
     * Function for destroying an article.
     *
     * @param $id
     */
    public function destroy($id){
        
    }
    
    
//    public function article($slug){
//        // GET THE ARTICLE BASED ON THE SLUG PROVIDED //
//        $article = Article::where('slug', $slug)->firstOrFail();
//
//        $author = ArticleAuthor::where('id', $article->author)->select('name')->firstOrFail();
//        $author = $author->name;
//
//        $published = $article->published->format('m F Y');
//
//        // GET THE ARTICLE TYPE //
//        $type = ArticleType::where('id', $article->type)->firstOrFail();
//
//        // RETURN THE VIEW WITH THE CORRECT TYPE //
//
//    }
//
//    public function create(){
//
//        return view('articles.create');
//    }
//
//    /**
//     * @param ArticleRequest $request
//     * @return Redirect
//     */
//    public function store(ArticleRequest $request){
//
//        /**
//         * Table Values & Date to be Stored
//         *    Article ID         => id,
//         *    Article Type       => type,
//         *    Article Title      => title,
//         *    Article Cover      => cover,
//         *    Article Extract    => extract,
//         *    Article Body       => body,
//         *    Article Slug       => slug,
//         *    Article Author     => author,
//         *    Article Category   => category,
//         *    Article Tags       => tags,
//         *    Article Poll       => poll,
//         *    Article Location   => location,
//         *    Article Published  => published.
//         */
//
//        $article = new Article;
//        $article->type = $request->type; // $request->type();
//        $article->title = $request->title;
//        $article->cover = $request->cover;
//        $article->extract = $request->extract;
//        $article->body = $request->body;
//        $article->slug = $request->slug;
//        $article->author = 1; // Get auth user id.
//        $article->tags = $request->tags;
//        $article->poll_id = null;
//        $article->location_id = null;
//        $article->published = Carbon::now();
//        $article->category = 1;
//
//        $article->save();
//
//        return redirect('blog');
//    }
//    public function redirect(){
//        return Redirect::action('BlogController@index');
//    }
}
