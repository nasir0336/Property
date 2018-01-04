<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Model\LandList;

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
	 public function admin()
	 {
		 return view('admin');
	 }
	 public function landList2()
	 {
		 //$landlistdetail = new LandList()
		 //Land
		 $lands = LandList::all();

		 return view('land_list', ['name' => $lands ] );

	 }
	 public function deleteRecord($id)
	 {
	 	//dd($id);

		 $record = LandList::find( $id);
		 $record->delete();
		 $lands = LandList::all();
		 return view('land_list', ['name' => $lands ] );

	 }


 }
