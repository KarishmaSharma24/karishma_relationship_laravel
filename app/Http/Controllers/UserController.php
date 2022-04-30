<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use Hash;
use Auth;

class UserController extends Controller
{
    public function userregform(){
        return view('userregister');
    }
    public function userregdata(Request $request){
        $user = new User;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        //dd($request->has('email')=='null');
        if($request->has('email') && $request->has('password'))
        {
            $user->save();
            return redirect()->route('userlogin')->with('msg','Registered successfully !');
            
        }
        else
        {
            return redirect()->back()->with('msg','Something went wrong Register again !');
        }

        if($request->has('email')=='null')
        {
            return redirect()->back()->with('msg','Something went wrong Register again !');
        }
            
    }

    public function userloginform(){
        return view('userlogin');
    }
    public function userlogin(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {   
             return redirect()->route('book');
        }
        else
        {
            
           return redirect()->back()->with('msg','Something went wrong try again');
        }
    }
    public function bookview(){
        if(Auth::check())
        {
            $login_user = Auth::user();
            // dd($login_user);
            $purchased_book = User::with('book')->where('id',Auth::id())->get()->toArray();
            //dd($purchased_book[0]);
            $user = User::with('book')->find(Auth::id())->toArray();
            // echo "<pre>";
            // print_r($purchased_book[0]['book']);
            // echo "</pre>";
            $book = Book::all();
            return view('book',compact('book','login_user','purchased_book'))->with('msg','Welcome !');
        }
        else
        {
            return redirect()->route('userlogin');
        }
        
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('userlogin');
    }

   
}
