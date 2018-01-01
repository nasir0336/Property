<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;

 class NewController extends Controller
 {
	public function view()
	{
		return view('newfile');
	}
	public function template()
	{
		return view('NewTemplate');
	}
	public function header()
	{
		return view('layout/header');
	}
	public function footer()
	{
		return view('layout/footer');
	}
	public function master()
	{
		return view('layout/master');
	}
	public function houseList()
	{
		return view('house_list');
	}
	public function landList()
	{
		return view('land_list');
	}
	public function shopeList()
	{
		return view('shope_list');
	}
	public function plazaList()
	{
		return view('plaza_list');
	}
	public function officeList()
	{
		return view('office_list');
	}
	public function contact()
	{
		return view('contact');
	}
	public function about()
	{
		return view('about_us');
	}
	public function home()
	{
		return view('home');
	}
	public function ruleList()
	{
		return view('rules');
	}
 }
