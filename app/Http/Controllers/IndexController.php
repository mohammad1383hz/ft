<?php

namespace App\Http\Controllers;


use App\Http\Helpers\Cart\Cart;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        auth()->loginUsingId(1);

        $categories=Category::all();
        return view('index',compact('categories'));


    }
    public function admin(){
        $categories=Category::all();
        return view('admin.index',compact('categories'));


    }
}
