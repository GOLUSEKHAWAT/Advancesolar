
@extends('admin.layouts.app')

@section('admin.content')

<main id="main" class="main">
   <div class="pagetitle">
      <h1>Table Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item">Table</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div>  
    
      <div class="container-fluid mt-5">
        <h3 class="text-center text-success">Query User Data Table</h3>
         <div class="row">
            <div class="d-flex justify-content-center">
            <div class="col-lg-12">
               <div class="d-flex justify-content-end">
  
               </div>
               <table class="table table-bordered mt-3">
                  <thead>
                    
                     <tr class="text-center">
                        <th>ID</th> 
                        <th>FirstName</th>  
                        <th>Email</th>  
                        <th>Address</th>  
                        <th>Ph_Number</th>  
                        <th>house_size</th>
                        <th>roof_type</th>
                        <th>Daily_Ele_Use</th>
                        <th>Mon_Ele_bill</th>
                        <th>battery_backup</th>
                        <th>Solat_type</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th colspan="2">Action</th>
                     </tr>
                  </thead>
                  <tbody> 
                  @foreach($data as $d) 
                     <tr class="text-center">
                        <td>{{$loop->iteration}}</td>  
                        <td>{{$d->fname}}</td> 
                        <td>{{$d->email}}</td> 
                        <td>{{$d->address}}</td> 
                        <td>{{$d->mobilenumber}}</td> 
                        <td>{{$d->house_size}}</td>   
                        <td>{{$d->roof_type}}</td> 
                        <td>{{$d->light_avg}}</td> 
                        <td>{{$d->monthly_bill}}</td> 
                        <td>{{$d->battery_backup}}</td> 
                        <td>{{$d->solar_type}}</td>  
                        <td><img src="{{ asset($d->image) }}" width="50px"  alt="image"></td> 

                        <td> @if($d->status ==1)
                            <span style="color:green;">Active</span>
                            @else
                            <span style="color:red;">Unactive</span>
                            @endif</td> 
                      
                        <td><a  class="btn btn-danger" href="{{url('querydestroy',$d->id)}}">Delete</a></td>
                        <td><a  class="btn btn-danger" href="{{url('querypdelete',$d->id)}}">Delete<b>(P)</b></a></td> 
                     </tr> 
                     @endforeach          
                  </tbody>
               </table>
               
            </div>
         </div>
         </div>
      </div>
</main>
@endsection