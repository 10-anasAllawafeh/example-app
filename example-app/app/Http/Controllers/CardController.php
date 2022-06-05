<?php

namespace App\Http\Controllers;

use App\Models\card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function display(){
        $products= card::all();
        return view('pages.index', compact('products'));
    }
    public function add(){
        return view('pages.addproduct');
    }

    public function insert(Request $request){
        $product= new card();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->picture = $request->input('picture');
        $product->save();
        return redirect('index')->with("message","Product Added Succefully");
    }
    public function destroy($id){
        $delete= card::find($id);
        $delete->delete();
        return redirect('index')->with('message',"product Deleted successfully");
    }
    public function edit($id){
        $edit= card::find($id);
        return view('pages.updateproduct', compact('edit'));
    }
    public function update(Request $request,$id){
        $product= card::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->picture = $request->input('picture');
        $product->update();
        return redirect('index')->with("message","Product Edited Succefully");
    }


}
