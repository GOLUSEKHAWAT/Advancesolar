
@extends('admin.layouts.app')

@section('admin.content')

<main id="main" class="main">
   <div class="pagetitle">
      <h1>Table Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('metatagcreate')}}">Home</a></li>
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
                  <a href="{{url('metatagcreate')}}"><button class="btn btn-primary mx-2">Create</button></a>
 
                   
               </div>
               <table class="table table-bordered mt-3">
                  <thead>
                    
                     <tr class="text-center">
                        <th >ID</th> 
                        <th>Route_name</th> 
                        <th>Meta_title</th> 
                        <th>Meta_description</th> 
                        <th>Meta_keywords</th>  
                        <th>Status</th>
                        <th colspan="3">Action</th>
                     </tr>
                  </thead>
                  <tbody> 
                  @foreach($metadata as $m) 
                     <tr class="text-center">
                        <td>{{$loop->iteration}}</td> 
                        <td>{{$m->route_name}}</td>
                        <td>{{$m->meta_title}}</td> 
                        <td>{{$m->meta_description}}</td> 
                        <td>{{$m->meta_keywords}}</td> 
                       
                        <td> @if($m->status ==1)
                            <span style="color:green;">Active</span>
                            @else
                            <span style="color:red;">Unactive</span>
                            @endif</td> 
                        <td><a  class="btn btn-success" href="{{url('metatagedit',$m->id)}}">Edit</a></td>
                        <td><a  class="btn btn-danger" href="{{url('metatagdestroy',$m->id)}}">Delete</a></td>
                        <td><a  class="btn btn-danger" href="{{url('metatagpdelete',$m->id)}}">Delete<b>(P)</b></a></td> 
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