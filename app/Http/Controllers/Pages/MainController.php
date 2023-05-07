<?php

namespace App\Http\Controllers\Pages;


use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MainController extends Controller
{
   
        public function connected()
            {
                return view('Pages.home',['movies' => Movies::all()]);
            }
        
        public function about()
            {
                return view('Pages.about');
            }
        
        public function faq()
            {
                return view('Pages.help');
            }

        public function index()
            {
                return view('Pages.movielist',['movies' => Movies::all()]);
            }

        public function notfound()
            {
                return view('Pages.404');
            }
        public function price()
            {
                return view('Pages.pricing');
            }

        public function review()
            {   
                return view('Pages.single',
                [
                    'movies' => Movies::all()
                ]);
             }
    }
