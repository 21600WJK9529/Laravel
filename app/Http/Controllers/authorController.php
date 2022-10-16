<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\author;

class authorController extends Controller
{
    public function index()
    {
        $authors = author::all();
        return view('welcome')->with('authors', $authors);
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'surname' => 'required|min:3'
        ]);

        $data = author::insert([
            'name' => $request->name,
            'surname' => $request->surname
        ]);

        if($data){
            return redirect()->to('/')->with('success', 'Author created successfully');
        }else{
            return redirect()->to('/')->with('error', 'Author creation failed');
        }
    }
}
