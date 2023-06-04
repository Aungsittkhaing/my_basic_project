<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create(){
        return view('inventory.create');
    }
    public function index(){
        return view('inventory.index',[
            "items"=> Item::all()
        ]);
    }
    public function show($id){
//        $item = Item::findOrFail($id);
//        if (is_null($item)){
//            return abort(404);
//        }
//        return view('inventory.show',compact("item"));
        return view('inventory.show',['item'=> Item::findOrFail($id)]);
    }
    public function store(Request $request){
        $item = new Item();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->save();
//        return $item;
        return redirect()->route('item.index');
//        $item = Item::create($request->all());
    }
    public function edit($id){
        return view('inventory.edit',['item'=> Item::findOrFail($id)]);
    }
    public function update($id, Request $request){
        $item = Item::findOrFail($id);
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->update();
        return redirect()->route('item.index');
    }
    public function destroy($id){
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->back();
    }
}
