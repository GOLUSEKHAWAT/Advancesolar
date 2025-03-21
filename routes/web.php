<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OurvisionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\RequirmentformController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// // Home Page
// Route::get('/', function () {
//     return view('welcome');
// });

// // Dashboard
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// // Authenticated User Routes
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
// ✅ Register Routes
Route::get('/register', function () {
    return view('register');
})->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register.user');

// ✅ Login Routes
Route::get('/login', function () {
    return view('login'); // Proper login page
})->name('login');

// ✅ Dashboard Route with Auth Middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])
        ->name('dashboard')
        ->middleware('admin'); // Apply Admin Middleware
});

require __DIR__.'/auth.php';

// 🌐 Website Routes
Route::get('/index', [WebsiteController::class, 'index'])->name('home');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/project', [WebsiteController::class, 'project'])->name('project');
Route::get('/product', [WebsiteController::class, 'product'])->name('product');
Route::get('/product-detail', [WebsiteController::class, 'product_detail'])->name('product_detail');
Route::get('/project-information', [WebsiteController::class, 'project_information'])->name('project_information');
Route::get('/our-vision', [WebsiteController::class, 'ourvision'])->name('ourvision');
Route::get('/careers', [WebsiteController::class, 'career'])->name('career');
Route::get('/career-details', [WebsiteController::class, 'career_details'])->name('career_details');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contacts');
Route::get('/query', [WebsiteController::class, 'query'])->name('query');



// ✅ Dynamic Index Page Content Routes
Route::get('/indexview',[IndexController::class,'index']);
Route::get('/indexcreate',[IndexController::class,'create']); 
Route::post('/indexs',[IndexController::class,'store']); 
Route::get('indexedit/{id}',[IndexController::class,'edit']); 
Route::post('indexupdate/{id}',[IndexController::class,'update']);
Route::get('indexdestroy/{id?}',[IndexController::class,'destroy']);
Route::get('indexpdelete/{id?}',[IndexController::class,'indexdelete']);

// ✅ Dynamic About Page Content Routes
Route::get('/aboutview',[AboutController::class,'index']);
Route::get('/aboutcreate',[AboutController::class,'create']); 
Route::post('/abouts',[AboutController::class,'store']); 
Route::get('aboutedit/{id}',[AboutController::class,'edit']); 
Route::post('aboutupdate/{id}',[AboutController::class,'update']);
Route::get('aboutdestroy/{id?}',[AboutController::class,'destroy']);
Route::get('aboutpdelete/{id?}',[AboutController::class,'aboutdelete']);

// ✅ Dynamic Our-Vision Page Content Routes
Route::get('/ourvisionview',[OurvisionController::class,'index']);
Route::get('/ourvisioncreate',[OurvisionController::class,'create']); 
Route::post('/ourvisions',[OurvisionController::class,'store']); 
Route::get('ourvisionedit/{id}',[OurvisionController::class,'edit']); 
Route::post('ourvisionupdate/{id}',[OurvisionController::class,'update']);
Route::get('ourvisiondestroy/{id?}',[OurvisionController::class,'destroy']);
Route::get('ourvisionpdelete/{id?}',[OurvisionController::class,'ourvisiondelete']);

// ✅ Project Routes
Route::get('/projectview',[ProjectController::class,'index']);
Route::get('/projectcreate',[ProjectController::class,'create']);  
Route::post('/projects',[ProjectController::class,'store']); 
Route::get('/project-information/{slug}', [ProjectController::class, 'show'])->name('project_information');
Route::get('projectedit/{id}',[ProjectController::class,'edit']); 
Route::post('projectupdate/{id}',[ProjectController::class,'update']);
Route::get('projectdestroy/{id?}',[ProjectController::class,'destroy']);
Route::get('projectpdelete/{id?}',[ProjectController::class,'projectdelete']);

// ✅ Career Routes
Route::get('/careerview',[CareerController::class,'index']);
Route::get('/careercreate',[CareerController::class,'create']);  
Route::post('/careers',[CareerController::class,'store']); 
Route::get('career-details/{slug}',[CareerController::class,'show'])->name('career_details'); 
Route::get('careeredit/{id}',[CareerController::class,'edit']); 
Route::post('careerupdate/{id}',[CareerController::class,'update']);
Route::get('careerdestroy/{id?}',[CareerController::class,'destroy']);
Route::get('careerpdelete/{id?}',[CareerController::class,'careerdelete']);

// ✅ Contact Routes
Route::get('/contactview',[ContactController::class,'index']);
Route::get('/contactcreate',[ContactController::class,'create']);  
Route::post('/contacts',[ContactController::class,'store']);  
Route::get('contactdestroy/{id?}',[ContactController::class,'destroy']);
Route::get('contactpdelete/{id?}',[ContactController::class,'contactdelete']);

// ✅ Requirement Form Route
Route::get('/reqformsview',[RequirmentformController::class,'index']);
Route::get('/career',[RequirmentformController::class,'create']);  
Route::post('reqforms',[RequirmentformController::class,'store']);  
Route::get('reqformdestroy/{id?}',[RequirmentformController::class,'destroy']);
Route::get('reqformpdelete/{id?}',[RequirmentformController::class,'reqformdelete']);

// ✅ Meta Tag Routes
Route::get('/metatagview',[MetaController::class,'index']);
Route::get('/metatagcreate',[MetaController::class,'create']);
Route::post('/metatags',[MetaController::class,'store']);  
Route::get('metatagedit/{id}',[MetaController::class,'edit']); 
Route::post('metatagupdate/{id}',[MetaController::class,'update']);
Route::get('metatagdestroy/{id?}',[MetaController::class,'destroy']);
Route::get('metatagpdelete/{id?}',[MetaController::class,'metadelete']);

// ✅ Contact Routes
Route::get('/queryview',[QueryController::class,'index']);
// Route::get('/querycreate',[QueryController::class,'create']);  
Route::post('/querys',[QueryController::class,'store']);  
Route::get('querydestroy/{id?}',[QueryController::class,'destroy']);
Route::get('querypdelete/{id?}',[QueryController::class,'querydelete']);

