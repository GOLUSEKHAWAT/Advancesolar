
     
     @extends('website.layouts.app')

     @section('website.content') 

     @php 
     $data =App\Models\ourvisions::where('status',1)->get();
     @endphp
     <!-- slider start  -->
      <div class="container-fluid p-0" id="home">
         <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item position-relative active" >
                  <img src="website/assest/img/our-vision-slider.jpg" alt="our-vision-slider-img" style="height:400px; width:100%;" class="img-fluid">
                  <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                     <div>
                        <h4 class="slider_heading">Our Vision Page</h4>
                       
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- slider end  -->
     
      <div class="container">
         <div class="row"> 
            @foreach($data as $d)
          
            <div class="col-lg-12">
               <p>{!!($d->content)!!}</p>
            </div>
            @endforeach
     
        
      </div>
      </div>
      </section>

      @endsection
    