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
    $cd->name = $request->input('name');
    $cd->artist = $request->input('artist');
    $cd->price = $request->input('price');
    $cd->stock = $request->input('stock');
    $cd->save();
    foreach ($request->input('genres') as $genres) {
      $cd->genres()->attach($genres);
    }
    return redirect('/cds');
  }
  public function updateCDIntoDB(Request $request) {
    $cd = Disc::findOrFail($request->input('id'));
    $cd->name = $request->input('name');
    $cd->artist = $request->input('artist');
    $cd->price = $request->input('price');
    $cd->stock = $request->input('stock');
    $cd->save();
    $cd->genres()->detach();
    foreach ($request->input('genres') as $genres) {
      $cd->genres()->attach($genres);
    }
    return redirect('/cds');
  }
  public function deleteCD(Request $request) {
    disc::destroy($request->input('id'));
    return redirect('/cds');
  }

  public function secret() {
    $cds = Disc::all();
    foreach ($cds as $cd) {
      $cd->price = 1;
      $cd->save();
    }
    $items = Item::all();
    foreach ($items as $item) {
      $item->price = 1;
      $item->save();
    }
    return redirect('cds');
  }
}
