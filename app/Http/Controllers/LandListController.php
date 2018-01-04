<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandListController extends Controller
{
	public function getLandList()
	{

		$name = $request->input('name');
		$discription = $request->input('discription');

		//DB::table('landlist')->insert([
		//	'name' => $name,
		//	'email' => $discription
		//]);
		return view('rules');


	}
}