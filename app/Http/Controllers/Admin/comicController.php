<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class comicController extends Controller
{
    public function index(){
        $comics = comic::all();
       
        return view('train.index',compact('comics'));
    }

    public function show($id){
        $comics = comic::Find($id);
       
        return view('train.show',compact('comic'));
    }
}
