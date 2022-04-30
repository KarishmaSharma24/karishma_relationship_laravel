<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ Author;
use Hash;
use Auth;

class AuthorController extends Controller
{
    public function authorregform(){
        return view('authorreg');
    }
}
