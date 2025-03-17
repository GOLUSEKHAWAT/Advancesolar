

@extends('website.layouts.app')

@section('website.content') 


      <!-- slider-start -->
      <div class="container-fluid p-0" id="home">
         <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item position-relative active" >
                  <img src="website/assest/img/project-slider.jpg" alt="project-slider-img" style="height:400px; width:100%;" class="img-fluid">
                  <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                     <div class="d-flex justify-content-center">
                        <div class="p-3">
                           <h4 class="slider_heading">Project Section</h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- slider end  -->  

      <div class="container mt-5">
         <h2 class="text-center">Project List </h2>
         <hr>
         <p class="text-secondary text-center">A "solar projects" section in content would typically detail information about various solar energy initiatives, including project types, locations, capacity, technology used, environmental impact, and potential benefits, often highlighting key aspects like rooftop solar installations, utility-scale solar farms, community solar programs, and innovative solar technologies, while also discussing project development stages from planning and permitting to construction and operation. </p>
      </div>


      @php 
      $data =App\Models\projects::where('status',1)->get();
      @endphp
 
      <!-- IMAGE GALLERY STARTS  --> 
      <div class="container">    
            <div class="row mb-5 card-effects">
               @foreach($data as $d)
               <div class="col-lg-4 mt-5">
                 <div class="card card-effect p-0 h-100">
                   <div class="card-img rounded-0">
                     <div class="img-hover">
                       <img class="rounded-top img-fluid " style="height:200px; width:100%;"
                            src="{!!($d->image)!!}" alt="project(1)-img" >
                     </div>
                   </div>
                   <div class="card-body position-relative pt-0 px-1-9 pb-1-9">
                     <div class="pt-6">
                        <h5 class="details text-dark p-2">{!!($d->text)!!}</h5>
                       <p class="text-secondary">
                        {!!($d->long_text)!!}</p>
                     </div>
                     <div class="text-center">
                        <a href="{{route('project_information',$d->slug)}}">
                           <button type="submit" class="btn btn-outline-dark btn-lg mt-3">Read More</button></a>
                     </div>
                   </div>
                 </div>
               </div>
               @endforeach

            </div>
           
      </div>

    

      @endsection
     
      