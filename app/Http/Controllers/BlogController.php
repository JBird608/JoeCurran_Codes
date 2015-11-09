<?php

namespace App\Http\Controllers;

use App\Article;

use App\ArticleAuthor;
use App\ArticleCategory;
use App\Http\Requests\ArticleRequest;
use App\Meta;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Request;
use App\Http\Requests;

class BlogController extends Controller
{

    public function __construct() {
        $this->middleware('editor', ['only' => 'create']);
    }
    /**
     * Function for the blog homepage, displaing all published posts.
     */
    public function index()
    {
        $pagecode = '5meuVGy2zOKvjsZO';
        $meta = Meta::where('code', $pagecode)->firstOrFail();
        // Get latest published articles, sorted by date & select only given fields.
        $articles = Article::latest('published')->published()->listing()->paginate(4);
        return view('core.article.index', compact('articles', 'meta'));
    }

    /**
     * Function for update a blog article.
     */
    public function create()
    {
        $pagecode = 'jeSu7UYVbVM6S0IF';
        $meta = Meta::where('code', $pagecode)->firstOrFail();
        $catergories = ArticleCategory::select('id', 'name')->get()->pluck('id', 'name')->flip();
        return view('core.article.create', compact('catergories', 'meta'));
    }

    /**
     * Function for storing a new blog article.
     *
     * @param $request
     * @param ArticleRequest $request
     * @return Redirect
     */
    public function store(ArticleRequest $request)
    {

        if ($request->has('slug')) {
            $request['slug'] = str_slug($request['slug'], "_");
        } else {
            $request['slug'] = str_slug($request['title'], "_");
        }
        $today = Carbon::today()->format('Y') . '/' . Carbon::today()->format('M') . '/' . Carbon::today()->format('d');
        $uploadPath = base_path() . '/public/img/uploads/' . $today;

        $article = Article::create($request->all());

        // TODO: Refine into two seperate actions //
        if (!empty($request['cover-image']) || !empty($request['cover-image'])) {
            $SmallImageName = '/img/uploads/' . $today . '/' . $request['slug'] . '_sml' . '.' . $request->file('listing-image')->getClientOriginalExtension();
            $coverImageName = '/img/uploads/' . $today . '/' . $request['slug'] . '_cover' . '.' . $request->file('cover-image')->getClientOriginalExtension();
            $article['imgfull'] = $coverImageName;
            $article['imgsml'] = $SmallImageName;
        }
        $article['page_code'] = str_random(16);
        $article['author'] = Auth::user()->id;
        $article['category'] = $request['category']; // TODO:: Preform a check to see if this Category Exists //
        $article['published'] = Carbon::parse($request['published']); // TODO:: Add a time to publish field //
        $article->save();

        if (!empty($request['cover-image']) || !empty($request['cover-image'])) {
            $request->file('listing-image')->move($uploadPath, $SmallImageName);
            $request->file('cover-image')->move($uploadPath, $coverImageName);
        }

        return redirect('blog/' . $request->slug);
    }

    /**
     * Function for showing a blog article.
     *
     * @param $slug
     * @return \Illuminate\View\View
     * @internal param $id
     */
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('core.article.' . $article->type, compact('article'));
    }

    /**
     * Function for editing an blog article.
     *
     * @param $slug
     * @return \Illuminate\View\View
     */
    public function edit($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $catergories = ArticleCategory::select('id', 'name')->get()->pluck('id', 'name')->flip();
        return view('core.article.edit', compact('article', 'catergories'));
    }

    /**
     * Function for updating an blog article.
     *
     * @param $slug
     * @param ArticleRequest $request
     * @internal param $slug
     * @return Redirect
     */
    public function update($slug, ArticleRequest $request)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $article->update($request->all());

        return redirect(action('BlogController@show', $slug));
    }

    /**
     * Function for destroying an article.
     *
     * @param $id
     */
    public function destroy($id)
    {

    }
}
