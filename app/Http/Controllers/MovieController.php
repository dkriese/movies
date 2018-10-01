<?php

namespace App\Http\Controllers;

use App\User;
use App\Movie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        if (!$user) {
            return redirect('login');;
        }
        $movies = $user->movies->sortByDesc('release_year')->take(5);

        return view('home',compact('movies'));
    }

}
