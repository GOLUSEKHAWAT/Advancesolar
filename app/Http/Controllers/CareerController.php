<?php
namespace App\Http\Controllers;
use App\Models\Careers;
use App\Models\Metatags;
use Illuminate\Http\Request;
class CareerController extends Controller
{
/**
* Display a listing of the resource.
*/
public function index()
{
$data =  Careers::orderby('id','desc')->get();
return view('admin/careerview',compact('data'));
}
/**
* Show the form for creating a new resource.
*/
public function create()
{
return view('admin/careercreate');
}
/**
* Store a newly created resource in storage.
*/
public function store(Request $request)
{
// dd($request);
$data = new Careers; 
$data->banner_text=$request->banner_text;  
$data->slug=$request->slug;  
$data->content=$request->content; 
$data->text=$request->text;  
$data->long_text=$request->long_text; 
if($request->hasfile('banner_img')){
$banner_img = $request->file('banner_img');
$filename = time().''.$banner_img->getClientOriginalName();
$destinationPath = public_path('uploads/new/');
$banner_img->move($destinationPath,$filename);
$data->banner_img="uploads/new/".$filename;
}
if($request->hasfile('main_img')){
$main_img = $request->file('main_img');
$filename = time().''.$main_img->getClientOriginalName();
$destinationPath = public_path('uploads/new/');
$main_img->move($destinationPath,$filename);
$data->main_img="uploads/new/".$filename;
}
$data->save();
$request->session()->flash('alert-success','Thank you');
//  return back()->with('success','thank you for Contact'); 
return redirect('careerview');
}
/**
* Display the specified resource.
*/
public function show($slug)
{
// Fetch career data based on slug
$data = Careers::where('slug', $slug)->firstOrFail();
// Fetch meta data for career_details route
$metaData = Metatags::where('route_name', 'career_details')->first();
return view('website.career-details', compact('data', 'metaData'));
}
/**
* Show the form for editing the specified resource.
*/
public function edit(string $id)
{
$data = Careers::where('id', $id)->first();
if(is_null($data)) {
return redirect()->back();
} 

return view ('admin/careerupdate',compact('data'));
}
/**
* Update the specified resource in storage.
*/
public function update(Request $request, string $id)
{
$data = Careers::find($id); 
if($request->hasfile('banner_img')){
$banner_img =$request->file('banner_img');
$filename = time().''.$banner_img->getClientOriginalName();
$destinationPath = public_path('uploads/new/');
$banner_img->move($destinationPath,$filename);
$data->banner_img="uploads/new/".$filename;
} 
$data->banner_text = $request->banner_text; 
$data->content = $request->content;   
$data->text = $request->text;  
$data->long_text = $request->long_text;  
if($request->hasfile('main_img')){
$main_img = $request->file('main_img');
$filename = time().''.$main_img->getClientOriginalName();
$destinationPath = public_path('uploads/new/');
$main_img->move($destinationPath,$filename);
$data->main_img="uploads/new/".$filename;
} 
$data->status = $request->status;  
$data->save();   
// $request->session()->flash('alert-success');
return redirect('careerview');
}
/**
* Remove the specified resource from storage.
*/
public function destroy(string $id)
{
$data = Careers::where('id',$id)->first();
if(is_null($data)) {
return redirect()->back();
} 
$data->status='0';
$data->save();
return redirect('careerview');
}
public function careerdelete($id)
{
$data = Careers::find($id); 
$data->delete();
return back();
}
}