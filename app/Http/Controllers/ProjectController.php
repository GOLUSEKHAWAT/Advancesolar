<?php
namespace App\Http\Controllers;
use App\Models\Projects;
use App\Models\Metatags;
use Illuminate\Http\Request;
class ProjectController extends Controller
{
/**
* Display a listing of the resource.
*/
public function index()
{
$data =  Projects::orderby('id','desc')->get();
return view('admin/projectview',compact('data'));
}
/**
* Show the form for creating a new resource.
*/
public function create()
{
return view('admin/projectcreate');
}
/**
* Store a newly created resource in storage.
*/
public function store(Request $request)
{
// dd($request);
$data = new Projects; 
$data->content=$request->content;  
$data->text=$request->text; 
$data->slug=$request->slug; 
$data->long_text=$request->long_text; 
if($request->hasfile('image')){
$image =$request->file('image');
$filename = time().''.$image->getClientOriginalName();
$destinationPath = public_path('uploads/new/');
$image->move($destinationPath,$filename);
$data->image="uploads/new/".$filename;
}
$data->save();
$request->session()->flash('alert-success','Thank you');
//  return back()->with('success','thank you for Contact'); 
return redirect('projectview');
}
/** 
* Display the specified resource.
*/
public function show($slug)
{
$data = Projects::where('slug', $slug)->firstOrFail();
// Meta Tags fetch karna
$metaData = Metatags::where('route_name', 'project_information')->first();
return view('website.project-information', compact('data', 'metaData'));
}
/**
* Show the form for editing the specified resource.
*/
public function edit(string $id)
{
$data = Projects::where('id', $id)->first();
if(is_null($data)) {
return redirect()->back();
} 
return view ('admin/projectupdate',compact('data'));
}
/**
* Update the specified resource in storage.
*/
public function update(Request $request, string $id)
{
$data = Projects::find($id); 
if($request->hasfile('image'))
{ 
$image = $request->file('image');
$filename = time().''.$image->getClientOriginalName();
$destinationPath = public_path('uploads/new/');
$image->move($destinationPath,$filename);
$data->image="uploads/new/".$filename;
}   
$data->content= $request->content; 
$data->text= $request->text;  
$data->slug= $request->slug; 
$data->long_text= $request->long_text; 
$data->status= $request->status;  
$data->save();   
// $request->session()->flash('alert-success');
return redirect('projectview');
}
/**
* Remove the specified resource from storage.
*/
public function destroy(string $id)
{
$data = Projects::where('id',$id)->first();
if(is_null($data)) {
return redirect()->back();
} 
$data->status='0';
$data->save();
return redirect('projectview');
}
public function projectdelete($id)
{
$data = Projects::find($id); 
$data->delete();
return back();
}
}