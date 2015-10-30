<?php

namespace App\Http\Controllers;

use App\Article;
use App\ContactMe;
use App\Correspondence;
use App\Http\Requests;
use App\Http\Requests\ContactEmail;
use App\Http\Requests\CorrespondenceRequest;
use App\Meta;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
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
        $pagecode = 'skzae4YRmyDGX4JR';
        $meta = Meta::where('code', $pagecode)->firstOrFail();

        return view('core.pages.about', compact('meta'));
    }

    public function contact() {
        $pagecode = 'skzae4YRmyDGX4JR';
        $meta = Meta::where('code', $pagecode)->firstOrFail();
        return view('core.pages.contact', compact('meta'));
    }

    /**
     * Function for Contact Form Submit.
     * Triggered when the user submits the e-mail form.
     *
     * @param ContactEmail|CorrespondenceRequest $request
     * @param $errors
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function contactPost(CorrespondenceRequest $request){

        // SAVE MESSAGE IN DATABASE //
        Correspondence::create($request->all());
        $request['created_at'] = Carbon::now()->format('dS F Y @ g:iA');

        // SEND EMAIL TO USER //
        Mail::send('emails.thanks', ['request' => $request->all()], function ($m) use ($request) {
            $m->from('no-reply@joecurran.codes', 'Joe Curran Codes');
            $m->to($request['email']);
            $m->replyTo('hello@joecurran.codes', 'Joe Curran');
            $m->subject("Thanks for your message!");
        });

        // SEND EMAIL TO ME //
        Mail::send('emails.incoming', ['request' => $request->all()], function ($m) use ($request){
            $m->from('no-reply@joecurran.codes', 'Joe Curran Codes');
            $m->to('hello@joecurran.codes');
            $m->replyTo($request['email'], $request['name']);
            $m->subject($request['subject']);
        });
        /**
         *
         * Add the check box
         */

        return Redirect::to('contact')->with('success', 'true');
    }

    /**
    * Function for Projects .
    * Using
    */
    public function projects(){
        $pagecode = 'skzae4YRmyDGX4JR';
        $meta = Meta::where('code', $pagecode)->firstOrFail();
        return view('core.pages.folio', compact('meta'));
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
