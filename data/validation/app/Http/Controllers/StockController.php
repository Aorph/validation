<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Item as Item;
use \App\Disc as Disc;

class StockController extends Controller
{
  //INSTRUMENTS FUNCTIONS
  public function insertInstrumentIntoDB(Request $request) {
    $item = new Item();
    $item->type = $request->type;
    $item->name = $request->name;
    $item->description = $request->description;
    $item->price = $request->price;
    $item->stock = $request->stock;
    $item->save();
    return redirect('/instruments');
  }
  public function updateInstrumentIntoDB(Request $request) {
    $item = Item::findOrFail($request->input('id'));
    $item->type = $request->type;
    $item->name = $request->name;
    $item->description = $request->description;
    $item->price = $request->price;
    $item->stock = $request->stock;
    $item->save();
    return redirect('/instruments');
  }
  public function deleteInstrument(Request $request) {
    Item::destroy($request->input('id'));
    return redirect('/instruments');
  }
  //CD FUNCTIONS
  public function insertCDIntoDB(Request $request) {
    $cd = new Disc();
    $cd->name = $request->name;
    $cd->artist = $request->artist;
    $cd->genre = $request->genre;
    $cd->price = $request->price;
    $cd->stock = $request->stock;
    $cd->save();
    return redirect('/cds');
  }
}
