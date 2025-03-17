@extends('website.layouts.app')
 
@section('website.content')

  {{-- slider section start --}}
  <div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
       <div class="carousel-inner">
          <div class="carousel-item active">
             <img src="website/assest/img/product-banner.webp" alt="product-slider-img" style="height:400px; width:100%;" class="img-fluid">
             <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0 ">
                <h4 class="slider_heading">Product Page</h4> 
             </div>
          </div>
       </div>
    </div>
 </div>
 {{-- slider section end --}}
 {{-- <div class="container mt-5">
    <h2 class="mb-4">Product Listing</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://market-resized.envatousercontent.com/previews/files/447246068/590+%288%29.jpeg?w=590&h=590&cf_fit=crop&format=auto&q=85&s=6bef2a2f4f64aaf907c420895ffe43223be7cf780126290bea1f2dc269ebf0bb" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">Price: ₹1000</p>
                    <a href="{{route('product_detail')}}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://energytheory.com/wp-content/uploads/2023/07/JAN-23-best-solar-products-4.jpg" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Product 2</h5>
                    <p class="card-text">Price: ₹1500</p>
                    <a href="{{route('product_detail')}}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTldGpNXRi6Vb-uH-0sBSd-3qVJ9BDWh6bsIMn6Cqb9maY7owj9cmt1LsOXAO5oBssGDNM&usqp=CAU" class="card-img-top" alt="Product 3">
                <div class="card-body">
                    <h5 class="card-title">Product 3</h5>
                    <p class="card-text">Price: ₹2000</p>
                    <a href="{{route('product_detail')}}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container mt-4">
    <h2 class="text-center">Product Listing</h2>
    <hr>
   
    <div class="row mt-5 images">
        <div class="col-lg-4">
            <img src="{{ asset('website/assest/img/solarimg1.png') }}" alt="solarimg(1)" class="img-fluid img-thumbnail clickable-image"> 
        </div>
        <div class="col-lg-4">
            <img src="{{ asset('website/assest/img/solarimg2.png') }}" alt="solarimg(2)" class="img-fluid img-thumbnail clickable-image"> 
        </div>
        <div class="col-lg-4">
            <img src="{{ asset('website/assest/img/solarimg3.png') }}" alt="solarimg(3)" class="img-fluid img-thumbnail clickable-image">
        </div>
    </div>
    
    <!-- Modal for displaying full image -->
    <div id="image-viewer" class="modal" style="display:none;">
        <span class="close" style="cursor:pointer; position:absolute; top:15px; right:35px; font-size:40px;">&times;</span>
        <img class="modal-content" id="full-image" style="margin:auto; display:block; max-width:65%; max-height:85%;">
    </div>
    
    
    <div class="row mt-5 images">
        <div class="col-lg-4">
            <img src="{{asset('website/assest/img/solarimg4.png')}}" alt="solarimg(4)" class="img-fluid img-thumbnail clickable-image"> 
        </div>
        <div class="col-lg-4">
            <img src="{{asset('website/assest/img/solarimg5.png')}}" alt="solarimg(5)" class="img-fluid img-thumbnail clickable-image"> 
        </div>
        <div class="col-lg-4">
            <img src="{{asset('website/assest/img/solarimg6.png')}}" alt="solarimg(6)" class="img-fluid img-thumbnail clickable-image">  
        </div>
        <!-- Modal for displaying full image -->
    <div id="image-viewer" class="modal" style="display:none;">
        <span class="close" style="cursor:pointer; position:absolute; top:15px; right:35px; font-size:40px;">&times;</span>
        <img class="modal-content" id="full-image" style="margin:auto; display:block; max-width:65%; max-height:85%;">
    </div>
    </div>
    <div class="row mt-5 images">
        <div class="col-lg-4">
            <img src="{{asset('website/assest/img/solarimg7.png')}}" alt="solarimg(7)" class="img-fluid img-thumbnail clickable-image"> 
        </div>
        <div class="col-lg-4">
            <img src="{{asset('website/assest/img/solarimg8.png')}}" alt="solarimg(8)" class="img-fluid img-thumbnail clickable-image"> 
        </div>
        <div class="col-lg-4">
            <img src="{{asset('website/assest/img/solarimg9.png')}}" alt="solarimg(9)" class="img-fluid img-thumbnail clickable-image"> 
        </div>
        <!-- Modal for displaying full image -->
    <div id="image-viewer" class="modal" style="display:none;">
        <span class="close" style="cursor:pointer; position:absolute; top:15px; right:35px; font-size:40px;">&times;</span>
        <img class="modal-content" id="full-image" style="margin:auto; display:block; max-width:65%; max-height:85%;">
    </div>
    </div>
    <div class="row mt-5 images">
        <div class="col-lg-4">
            <img src="{{asset('website/assest/img/solarimg10.png')}}" alt="solarimg(10)" class="img-fluid img-thumbnail clickable-image"> 
        </div>
        <div class="col-lg-4">
            <img src="{{asset('website/assest/img/solarimg11.png')}}" alt="solarimg(11)" class="img-fluid img-thumbnail clickable-image"> 
        </div>
        
        <!-- Modal for displaying full image -->
    <div id="image-viewer" class="modal" style="display:none;">
        <span class="close" style="cursor:pointer; position:absolute; top:15px; right:35px; font-size:40px;">&times;</span>
        <img class="modal-content" id="full-image" style="margin:auto; display:block; max-width:65%; max-height:85%;">
    </div>
    </div>
 
</div>

@endsection