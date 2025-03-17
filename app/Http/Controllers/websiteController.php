<?php
namespace App\Http\Controllers; // Keep only one namespace 
use Illuminate\Http\Request;
use App\Models\Metatags;
class WebsiteController extends BaseController // Extend BaseController
{
public function index()
{  
return view('website.index');
}
public function about()
{ 
return view('website.about-us');
}
public function project()
{ 
return view('website.project');
}
public function product()
{ 
return view('website.product');
}
public function product_detail()
{ 
return view('website.product-detail');
}
public function project_information()
{
return view('website.project-information');
}
public function ourvision()
{ 
return view('website.our-vision');
}
public function career()
{  
return view('website.careers');
}
public function career_details()
{ 
return view('website.career-details');
}
public function contact() 
{   
return view('website.contact');
}
public function query()
{
return view('website.query');
}
}