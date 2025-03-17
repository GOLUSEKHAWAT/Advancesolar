
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
                        <th>LastName</th>
                        <th>Email</th>  
                        <th>Address</th>  
                        <th>mobile_number</th>
                        <th>Solar_Req</th> 
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
                        <td>{{$d->lname}}</td> 
                        <td>{{$d->email}}</td> 
                        <td>{{$d->address}}</td> 
                        <td>{{$d->mobile_number}}</td>   
                        <td>{{$d->solar_req}}</td>  
                        <td><img src="{{ asset($d->image) }}" width="50px"  alt="image"></td> 

                        <td> @if($d->status ==1)
                            <span style="color:green;">Active</span>
                            @else
                            <span style="color:red;">Unactive</span>
                            @endif</td> 
                      
                        <td><a  class="btn btn-danger" href="{{url('reqformdestroy',$d->id)}}">Delete</a></td>
                        <td><a  class="btn btn-danger" href="{{url('reqformpdelete',$d->id)}}">Delete<b>(P)</b></a></td> 
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