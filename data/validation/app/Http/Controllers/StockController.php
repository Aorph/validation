<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Item as Item;

class StockController extends Controller
{
  public function insertIntoDB(Request $request) {
    $item = new Item();
    $item->type = $request->type;
    $item->name = $request->name;
    $item->description = $request->description;
    $item->price = $request->price;
    $item->stock = $request->stock;
    $item->save();
    return redirect('/');
  }
  public function updateIntoDB(Request $request) {
    $item = Item::findOrFail($request->input('id'));
    $item->type = $request->type;
    $item->name = $request->name;
    $item->description = $request->description;
    $item->price = $request->price;
    $item->stock = $request->stock;
    $item->save();
    return redirect('/');
  }
  public function delete(Request $request) {
    Item::destroy($request->input('id'));
    return redirect('/');
  }
}
