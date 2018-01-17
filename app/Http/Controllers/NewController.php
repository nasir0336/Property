<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Model\LandList;
 use App\Model\information;
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
		$houses = LandList::orderBy('updated_at', 'desc')->take(4)->get();


		return view('house_list', ['houses' => $houses ] );

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
		 $lands = LandList::paginate(9);
		 return view('land_list', ['name' => $lands ] );
	 }
	 public function landView()
	 {
		 $lands = LandList::paginate(9);

		 return view('land-view', ['lands' => $lands ] );
	 }
	 public function home()
	 {
		 $lands = LandList::paginate(9);
		 return view('/welcome', ['lands' => $lands ] );
	 }
	 public function imagePath()
	 {

		 $path = $request->file('imagepath')->store('avatars');
		 //dd($path);
		 //return $path;
	 }
	 public function deleteRecord($id)
	 {
		 $record = LandList::find( $id);
		 $record->delete();
		 return redirect("/Admin/Land");
		// $lands = LandList::paginate(9);
		// return view('land-view', ['lands' => $lands ] );
	 }
	 public function addLand()
	 {
		 return view("landlist");
	 }
	 public function design()
	 {return view("design");
	 }
	 public function updateRecord($id)
	 {
		// $records = LandList::find( $id);
		 $record = LandList::where('id', $id)->first();
		 return view("landlist", ['record' => $record ]);
	 }
	 public function searchCity($city)
	 {
	 	 $cities = LandList::where('city',$city)->paginate(6);

		 return view("welcome", ['cities' => $cities ]);
	 }

 }
