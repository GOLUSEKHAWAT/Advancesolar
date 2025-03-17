
@extends('admin.layouts.app')

@section('admin.content')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Layouts</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('metacreate')}}">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Layouts</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row d-flec justify-content-center">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Insert Form</h5>

          <!-- Horizontal Form -->
          
          <form method="POST" enctype="multipart/form-data" action="{{url('metatags')}}">
            @csrf
            <div class="row mb-3 p-3">
                <label for="route_name" class="col-sm-2 col-form-label">Route_name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control p-3 bg-light" id="route_name" name="route_name">
                </div>
              </div>  
              
            <div class="row mb-3 p-3">
              <label for="meta_title" class="col-sm-2 col-form-label">Meta_title</label>
              <div class="col-sm-8">
                <input type="text" class="form-control p-3 bg-light" id="meta_title" name="meta_title">
              </div>
            </div>  
            <div class="row mb-3 p-3">
                <label for="meta_description" class="col-sm-2 col-form-label">Meta_description</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control p-3 bg-light" id="meta_description" name="meta_description">
                </div>
              </div>
              <div class="row mb-3 p-3">
                <label for="meta_keywords" class="col-sm-2 col-form-label">Meta_keywords</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control p-3 bg-light" id="meta_keywords" name="meta_keywords">
                </div>
              </div>
            
            
            <div class="text-center mt-3">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
            </div>
          </form><!-- End Horizontal Form -->

        </div>
      </div>  
    </div> 
  </div>
</section>

</main><!-- End #main -->


@endsection