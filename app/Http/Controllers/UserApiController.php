<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserApiController extends Controller
{
	
	/*
	 * Api Request example to get the user information
	 */
	public function getUserInformation(Request $request)
	{
		$user = $request->user();
		
		if ($request->has('test'))
			return response()->json(['message' => 'failed'], 500);
		
		return response()->json([
			'username'        => $user->name,
			'email'           => $user->email,
			'time_registered' => $user->created_at->diffForHumans(),
		]);
		
	}
}
