<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movies= movie::all();
        return view('movies.home', compact('movies'));
    }
    public function storeMovie($id){
        $movie= movie::find($id);
        return view('movies.view', compact('movie'));
    }
    public function addMovie(Request $request){
        
        $movie= new movie();
        // dd($movie);
        $movie->name = $request->input('name');
        $movie->description =$request->input('description');
        $movie->genre =$request->input('genre');
        $movie->trailer =$request->input('trailer');
        
        $movie->save();
        return redirect('movies.home')->with('message','Movie Added Successfully');
    }
    public function editMovie($id){
        $movie= movie::find($id);
        return redirect('movies.update', compact('movie'));
    }
    public function updateMovie($id){
        $movie= movie::find($id);
        $movie->name = request('name');
        $movie->description =request('description');
        $movie->genre =request('genre');
        $movie->save();
        return redirect('movies.home')->with('message','Movie Updated Successfully');
    }
    public function deleteMovie($id){
        $movie= movie::find($id);
        $movie->delete();
        return redirect('movies.home')->with('message','Movie Deleted Successfully');
    }
}
