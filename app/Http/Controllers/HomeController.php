<?php

namespace App\Http\Controllers;

use App\Model\LandList;
use Illuminate\Http\Request;
use App\Model\Roles;
use App\Model\Model_Has_Permissions;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
//Importing laravel-permission models
use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;

//Enables us to output flash messaging
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	public function uploadFile($request, $path, $fileName, $resize=true)
	{
		if (!$path)
			return false;

		try {
			$dt = Carbon::parse(Carbon::Now());
			$timeStamp = $dt->timestamp;
			$destinationPath = public_path() . '/' .$path;
			$file = Input::file($fileName);
			$extension = Input::file($fileName)->getClientOriginalExtension();
			$originalName = Input::file($fileName)->getClientOriginalName();
			$fileOriginalName = Input::file($fileName)->getClientOriginalName();
			$fileOriginalName = str_replace('.' . $extension, "", $fileOriginalName);

			$fileName = $timeStamp . '__' . $fileOriginalName . '.' . $extension;

			if($resize) {
				$destinationPath = $destinationPath.'/'.$fileName;
				\Image::make($file->getRealPath())->resize($resize['0'], $resize['1'])->save($destinationPath);
			} else {
				$file->move($destinationPath, $fileName);
			}
			return collect([
				'status' => 'success',
				'icon' => $fileName,
				'fileName' => $originalName
			]);
		} catch (\Exception $e) {
			return $e;
		}
	}
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $permissions = Auth::user()->permissions;

	    foreach($permissions as $value)
	    {
		    if($value["name"]=="AdminPermission")
		    {
			    return view("landlist");
		    }
	    }

		    return redirect("shope");

    }
	public function createLand(request $request)
	{
			$landlist = new LandList();
			$name = $request->input("name");
			$discription = $request->input("discription");
			$fileName = $request->file("filename");
			$record = self::uploadFile($request, "/images", "filename", array(100,100));
			$path=$record["icon"];
			$landlist->name = $name;
			$landlist->discription = $discription;
			$landlist->imageurl = $path;
			$landlist->save();
			return view("landlist");


	}
	public function updateLand(request $request,$id)
	{
		//$landlist = new LandList();
		$updateLand = LandList::find($id);
		$name = $request->input("name");
		$discription = $request->input("discription");
		$fileName = $request->file("filename");
         if($fileName != null )
         {
	         $record = self::uploadFile($request, "/images", "filename", array(100,100));
	         $path=$record["icon"];
	         $updateLand->name = $name;
	         $updateLand->discription = $discription;
	         $updateLand->imageurl = $path;
	         $updateLand->save();
	         return redirect("/Admin/add/land");
         }
         else
         {
	         $updateLand->name = $name;
	         $updateLand->discription = $discription;
	         $updateLand->save();
	         return redirect("/Admin/add/land");
         }



	}
}
