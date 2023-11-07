<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchUserController extends Controller
{
    public function search(){
        return view('user.search');
    }
}
