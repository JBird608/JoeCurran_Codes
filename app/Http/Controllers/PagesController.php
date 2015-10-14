<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\ContactEmail;
use App\Meta;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;
use Twitter;

class PagesController extends Controller
{
    /**
    * Function for Index Home Page.
    */
    public function index(){
        $pagecode = 'skzae4YRmyDGX4Jk';
        $meta = Meta::where('code', $pagecode)->firstOrFail();
        $articles = Article::latest('published')->published()->listing()->limit(3)->get();
        $tweet = Twitter::getUserTimeline(['screen_name' => 'jbird608', 'count' => 1]);
        $tweet[0]->text = Twitter::linkify($tweet[0]);
        $time = $tweet[0]->created_at;
        $tweet[0]->created_at = Carbon::parse($time, 'Europe/London');

        return view('core.index', compact('articles', 'meta', 'tweet'));
    }

    public function about(){
        return view('core.pages.about');
    }

    public function contact() {
        $pagecode = 'skzae4YRmyDGX4JR';
        $meta = Meta::where('code', $pagecode)->firstOrFail();
        return view('core.standard', compact('meta'));
    }

    /**
     * Function for Contact Form Submit.
     * Triggered when the user submits the e-mail form.
     *
     * @param ContactEmail $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function contactPost(ContactEmail $request){

        /** TODO :: Add the processing for email and validation also add form.  */

        $msg = true;
        return redirect('contact', compact('msg'));
    }

    /**
    * Function for Projects .
    * Using
    */
    public function projects(){
        return "Projects";
    }

    /**
    * Function for clients .
    * Using
    */
    public function dashboard(){
        if (Auth::check()) {
            return view('core.standard');
        } else {
            return Redirect::to('login');
        }
    }

}
