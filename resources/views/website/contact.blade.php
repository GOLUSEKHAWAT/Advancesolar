

@extends('website.layouts.app')

@section('website.content')
      {{-- slider section start --}}
      <div class="container-fluid p-0">
         <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="website/assest/img/contact-slider.jpg" alt="contact-slider-img" style="height:400px; width:100%;" class="img-fluid">
                  <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0 ">
                     <h4 class="slider_heading">Contact Page</h4> 
                  </div>
               </div>
            </div>
         </div>
      </div>
      {{-- slider section end --}}
      
     {{-- contact section start --}}
     <div class="container mt-5">
      <div class="row justify-content-center">
          <!-- Contact Form -->
          <div class="col-lg-6 mt-4">
              <form class="p-4 shadow text-dark" id="contact" action="{{url('contacts')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <h2 class="text-center mb-4 text-dark">📩 Contact Us</h2>
  
                  <div class="form-group mb-3">
                      <label for="fname" class="fw-bold">First Name:</label>
                      <input type="text" class="form-control border-0 shadow-sm p-2" name="fname" placeholder="Enter first name">
                  </div>
  
                  <div class="form-group mb-3">
                      <label for="lname" class="fw-bold">Last Name:</label>
                      <input type="text" class="form-control border-0 shadow-sm p-2" name="lname" placeholder="Enter last name">
                  </div>
  
                  <div class="form-group mb-3">
                      <label for="email" class="fw-bold">Email Address:</label>
                      <input type="email" class="form-control border-0 shadow-sm p-2" name="email" placeholder="Enter your email">
                  </div>
  
                  <div class="form-group mb-3">
                      <label for="address" class="fw-bold">Address:</label>
                      <input type="text" class="form-control border-0 shadow-sm p-2" name="address" placeholder="Enter your address">
                  </div> 
  
                  <div class="form-group mb-3">
                      <label for="select" class="fw-bold">Select Requirement:</label> 
                      <select class="form-select border-0 shadow-sm p-2" name="solar">
                          <option selected disabled>Choose an option...</option>
                          <option>Residential Solar Panel</option>
                          <option>Commercial Solar Panel</option>
                          <option>Industrial Solar Panel</option>
                      </select>
                  </div>
  
                  <button type="submit" id="form-submit" class="btn btn-primary btn-lg w-100 shadow-sm fw-bold mt-3">🚀 Submit</button>
              </form>
          </div>
  
          <!-- Image Section -->
          <div class="col-lg-6 mt-4">
            <img src="website/assest/img/contact-1.jpg" alt="contact-left" class="img-fluid h-100 w-100">
         </div>
      </div>
  </div>
  
      {{-- conatct section end --}}

      @endsection
    