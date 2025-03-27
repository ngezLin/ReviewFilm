<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class GuestFilmController extends Controller
{
    public function index()
    {
        $films = Film::latest()->get();
        return view('guest.films', compact('films'));
    }
}
