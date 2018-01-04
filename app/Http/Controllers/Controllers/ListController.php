<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
	public function getLandList()
	{
		$name= $request->input('name');
		$discription= $request->input('discription');
		DB::table('landlist')->insert( [
			'name' => $name,
			'discription' => $discription
			]
		);

	}
}
