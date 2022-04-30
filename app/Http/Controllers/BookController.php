<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;

use Auth;

class BookController extends Controller
{
    public function addbook($id)
    {
        $user = User::find($id);
        $book = new Book;
        $book->book_name = 'education';
        $book->book_author = 'rachita singh';
        $user->book()->save($book);
       
    }

    public function purchases($id){
        if(isset($id))
        {
            $book = Book::find($id);
            $user = Auth::user();
            //dd(Book::with('users')->find(1));
            if(!$book->users()->where('user_id', $user->id)->exists())
            {
                $user->book()->attach($book);
                return redirect()->route('book');
            }
        }
        $book = Book::with('users')->get();
        //return redirect()->route('book',['id'=>$id, 'book'=>$book]);
       return view('book',compact('book'));
    }

    //get purchsed book via user id
  
}
