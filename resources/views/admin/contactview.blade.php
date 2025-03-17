
@extends('admin.layouts.app')

@section('admin.content')

<main id="main" class="main">
   <div class="pagetitle">
      <h1>Table Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('contact')}}">Home</a></li>
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
                  <a href="{{url('contact')}}"><button class="btn btn-primary mx-2">Create</button></a>
 
                   
               </div>
               <table class="table table-bordered mt-3">
                  <thead>
                    
                     <tr class="text-center">
                        <th>ID</th> 
                        <th>FirstName</th> 
                        <th>LastName</th>
                        <th>Email</th>  
                        <th>Address</th>  
                        <th>Solar</th> 
                        <th>Status</th>
                        <th colspan="2">Action</th>
                     </tr>
                  </thead>
                  <tbody> 
                  @foreach($content as $c) 
                     <tr class="text-center">
                        <td>{{$loop->iteration}}</td>  
                        <td>{{$c->fname}}</td>
                        <td>{{$c->lname}}</td> 
                        <td>{{$c->email}}</td> 
                        <td>{{$c->address}}</td>  
                        <td>{{$c->solar}}</td> 
                        <td> @if($c->status ==1)
                            <span style="color:green;">Active</span>
                            @else
                            <span style="color:red;">Unactive</span>
                            @endif</td> 
                      
                        <td><a  class="btn btn-danger" href="{{url('contactdestroy',$c->id)}}">Delete</a></td>
                        <td><a  class="btn btn-danger" href="{{url('contactpdelete',$c->id)}}">Delete<b>(P)</b></a></td> 
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