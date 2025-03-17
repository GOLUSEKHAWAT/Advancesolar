
@extends('admin.layouts.app')

@section('admin.content')
 
<main id="main" class="main">
   <div class="pagetitle">
      <h1>Table Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('projectcreate')}}">Home</a></li>
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
                  <a href="{{url('projectcreate')}}"><button class="btn btn-primary mx-2">Create</button></a>
 
                   
               </div>
               <table class="table table-bordered mt-3">
                  <thead>
                    
                     <tr class="text-center">
                        <th>ID</th> 
                        <th>Image</th> 
                        {{-- <th>Content</th>   --}}
                        <th>text</th> 
                        <th>slug</th> 
                        <th>long_text</th> 
                        <th>Status</th>
                        <th colspan="3">Action</th>
                     </tr>
                  </thead>
                  <tbody> 
                  @foreach($data as $d) 
                     <tr class="text-center">
                        <td>{{$loop->iteration}}</td> 
                        <td><img src="{{ asset($d->image) }}" width="50px"  alt="image"></td>  
                        {{-- <td>{{$d->content}}</td>  --}}
                        <td>{{$d->text}}</td>
                        <td>{{$d->slug}}</td>
                        <td>{{$d->long_text}}</td>
                        <td> @if($d->status ==1)
                            <span style="color:green;">Active</span>
                            @else
                            <span style="color:red;">Unactive</span>
                            @endif</td> 
                        <td><a  class="btn btn-success" href="{{url('projectedit',$d->id)}}">Edit</a></td>
                        <td><a  class="btn btn-danger" href="{{url('projectdestroy',$d->id)}}">Delete</a></td>
                        <td><a  class="btn btn-danger" href="{{url('projectpdelete',$d->id)}}">Delete<b>(P)</b></a></td> 
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