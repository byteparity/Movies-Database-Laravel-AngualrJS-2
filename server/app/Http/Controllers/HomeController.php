<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Movies;
use App\Models\Peoples;
use App\Models\Genres;
use App\Models\Proffessions;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users_count = User::count();
        $movies_count = Movies::count();
        $peoples_count = Peoples::count();
        $genres_count = Genres::count();
        $proffessions_count = Proffessions::count();

        return view('home')->with('users_count', $users_count)->with('movies_count', $movies_count)->with('peoples_count', $peoples_count)->with('genres_count', $genres_count)->with('proffessions_count', $proffessions_count);
    }
}
