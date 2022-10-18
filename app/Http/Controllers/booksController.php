<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books;

class booksController extends Controller
{
    public function index()
    {
        $books = books::all();
        return view('pages.books')->with('books', $books);
    }

    public function create(Request $request){
        $request->validate([
            'ISBN' => 'required|min:12',
            'id' => 'required|min:1',
            'title' => 'required|min:3',
            'co_authors' => 'required|min:3'
        ]);

        $data = books::insert([
            'ISBN' => $request->ISBN,
            'id' => $request->id,
            'title' => $request->title,
            'co_authors' => $request->co_authors
        ]);

        if($data){
            return redirect()->to('/')->with('msg', 'Book created successfully');
        }else{
            return redirect()->to('/')->with('error', 'Book creation failed');
        }
    }

    public function delete($id){
        $book = books::find($id);
        if($book == null){
            return redirect()->to('/')->with('error', 'Book not found');
        }

        $book_delete = books::find($id)->delete();

        if($book_delete){
            return redirect()->to('/')->with('msg', 'Book deleted successfully');
        }else{
            return redirect()->to('/')->with('error', 'Book deletion failed');
        }
    }
}
