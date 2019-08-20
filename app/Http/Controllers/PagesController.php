<?php

namespace demo\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['about']]);
    }
 
    public function index(){

        return view('pages.index');
    }

    public function about(){
          $title ='about us';
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $data = array(
            #'title' => 'Welcome to Laravel',
            #compact('data')
            'services' => ['Web Design', 'Programming', 'SEO','java']
        );
        
        return view('pages.services')->with('data',$data);
    }

    public function login(){

        return view('pages.login');
    }

    public function register(){

        return view('pages.register');
    }
}
