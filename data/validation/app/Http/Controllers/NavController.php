<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Item as Item;
use \App\Disc as Disc;
use \App\Genre as Genre;

class NavController extends Controller
{
  //INSTRUMENTS FUNCTIONS
  public function showInstruments() {
    $items = Item::all();
    return view('instruments', ['items' => $items]);
  }
  public function insertInstruments() {
    return view('insertInstrument');
  }
  public function updateInstrument(Request $request) {
    $item = Item::findOrFail($request['id']);
    return view('updateInstrument', ['item' => $item]);
  }
  //CD FUNCTIONS
  public function showCDs() {
    $cds = Disc::all();
    $genres = Genre::all();
    return view('cds', ['cds' => $cds, 'genres' => $genres]);
  }
  public function insertCD() {
    $genres = Genre::all();
    return view('insertCD', ['genres' => $genres]);
  }
  public function updateCD(Request $request) {
    $cd = Disc::findOrFail($request['id']);
    $genres = Genre::all();
    return view('updateCD', ['cd' => $cd], ['genres' => $genres]);
  }
  public function secret() {
    return view('wow');
  }
}
