<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Item as Item;

class NavController extends Controller
{
    public function showStore() {
      $items = Item::all();
      return view('store', ['items' => $items]);
    }
    public function insert() {
      return view('insert');
    }
    public function update(Request $request) {
      $item = Item::findOrFail($request['id']);
      return view('update', ['item' => $item]);
    }
}
