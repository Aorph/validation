<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Genre as Genre;

class GenreController extends Controller
{
  public function addGenre() {
    return view('addGenre');
  }
  public function insertGenre(Request $request) {
    $genre = new Genre();
    $genre->name = $request->name;
    $genre->save();
    return redirect('/cds');
  }
}
