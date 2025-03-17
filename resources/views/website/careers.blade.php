

@extends('website.layouts.app')



@section('website.content')
      <!-- slider start  -->
      <div class="container-fluid p-0" id="home">
         <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item position-relative active" >
                  <img src="website/assest/img/career-slider.jpg" alt="career-slider-img" style="height:400px; width:100%;" class="img-fluid">
                  <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                     <div class="d-flex justify-content-center">
                        <div class="p-3">
                           <h4 class="slider_heading">Career page</h4>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- slider end  -->
      @php 
$data =App\Models\careers::where('status',1)->get();
@endphp 
       
      <div class="container mt-5">
         <div class="row">
            @foreach($data as $d)
            <div class="col-lg-4 mt-3">
               <div class="card">
                  <img src="{!!($d->main_img)!!}" class="card-img-top" alt="main_img">
                   <div class="card-body">
                     <h5 class="card-title text-secondary">{!!($d->text)!!}</h5>
                     <p class="card-text text-secondary">{!!($d->long_text)!!}</p>
                     <a href="{{route('career_details',$d->slug)}}">
                        <button type="submit" class="btn btn-outline-dark btn-lg mt-3">Apply Now</button></a>
                  </div>
               </div>
            </div>
            @endforeach 
            {{-- <div class="col-lg-4 mt-3">
               <div class="card">
                  <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dXNlciUyMHByb2ZpbGV8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="Engineer_img">
                  <div class="card-body">
                     <h5 class="card-title text-secondary">Engineer</h5>
                     <p class="card-text text-secondary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     <a href="{{url('career-details' ,$d->slug)}}"><button type="button" class="btn btn-outline-dark btn-lg mt-3">Apply Now</button></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 mt-3">
               <div class="card">
                  <img src="https://codingyaar.com/wp-content/uploads/bootstrap-profile-card-image.jpg" class="card-img-top" alt="Sales_img">
                  <div class="card-body">
                     <h5 class="card-title text-secondary">Sales</h5>
                     <p class="card-text text-secondary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     <a href="{{url('career-details')}}"><button type="button" class="btn btn-outline-dark btn-lg mt-3">Apply Now</button></a>
                  </div>
               </div>
            </div> --}}
         </div>
      </div>
    

      @endsection
     