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
            return redirect()->to('/')->with('msg', 'Author created successfully');
        }else{
            return redirect()->to('/')->with('error', 'Author creation failed');
        }
    }

    public function updateRecord($id){
        $author = author::find($id);
        return view('pages.update_author')->with(['author' => $author, 'id' => $id]);
    }

    public function update($id, Request $request){
        $author = author::find($id);
        if($author == null){
            return redirect()->to('/')->with('error', 'Author not found');
        }

        $request->validate([
            'name' => 'required|min:3',
            'surname' => 'required|min:3'
        ]);

        $author_update = author::find($id)->update([
            'name' => $request->name,
            'surname' => $request->surname
        ]);

        if($author_update){
            return redirect()->to('/')->with('msg', 'Author updated successfully');
        }else{
            return redirect()->to('/')->with('error', 'Author update failed');
        }

    }

    public function delete($id){
        $author = author::find($id);
        if($author == null){
            return redirect()->to('/')->with('error', 'Author not found');
        }

        $author_delete = author::find($id)->delete();

        if($author_delete){
            return redirect()->to('/')->with('msg', 'Author deleted successfully');
        }else{
            return redirect()->to('/')->with('error', 'Author deletion failed');
        }
    }

}
