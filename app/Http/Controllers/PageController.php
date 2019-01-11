<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home()
    {
    	return view('welcome');
    }
    function founder()
    {
    	$name = "BRYTAHUB";
    	$role = "Instructor";
    	return view('pages.founder', compact('name', 'role'));
    	//return view('pages.founder')->with(['name'=>$name, 'founder'=>$founder]);
    }
    function about()
    {
    	return view('pages.about');
    }
    function category()
    {
        return view('pages.category');
    }
    function contact()
    {
        return view('pages.contact');
    }
    function cart()
    {
        return view('pages.cart');
    }
    function checkout()
    {
        return view('pages.checkout');
    }
}
