<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
	{
		$user = Auth::user();
//		$avatarUrl = Storage::url($user->avatar);
		$avatarUrl = asset($user->avatar);

		return view('profile', ['user'=>$user, 'avatar'=>$avatarUrl]);
	}
}
