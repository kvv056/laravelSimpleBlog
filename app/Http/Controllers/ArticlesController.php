<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
	
	public function __construct()
	{
		$this->middleware('auth')->only(['userArticles']);
	}
	
    public function index()
	{
		return 'articles';
	}
	
	public function userArticles(Request $request)
	{
		$user = $request->user(); 
//		dd($user->test);
		dd($user->articles()->where('articles.id', 1)->get());
	}
}
