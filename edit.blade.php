@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">

    <h1> Edit Catogry </h4>
    </div>

    <div class="card-body">
    
        <form action="{{url('update/'.$add->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="row">
                <div class="col-md-6 mb-3">

                <label for="">Name</label>
                <input type="text" value="{{$add->name}}" class="form-control" name="name">

                </div>


                <div class="col-md-6 mb-3">
                <label for="">Slug</label>
                <input type="text" value="{{$add->slug}}" class="form-control" name="slug">
                </div>


                <div class="col-md-12 mb-3">          
                <label for="">Description</label>
                <input type="text" value="{{$add->description}}" class="form-control" name="description">

                </div>
                <div class="col-md-6 mb-3"> 
                <label for="">Status</label>
                <input type="checkbox" {{$add->status =="1" ?'checked':''}} class="form-control" name="status">
                </div>

                <div class="col-md-3 mb-3">          
                <label for="">Popular</label>
                <input type="checkbox"  {{$add->popular =="1" ?'checked':''}}  class="form-control" name="popular">
                </div>


                <div class="col-md-6 mb-3">
                <label for="">Meta_Title</label>
                <input type="text" value="{{$add->meta_title}}" class="form-control" name="meta_title">
                </div>

                <div class="col-md-6 mb-3">
                <label for="">Meta_Discript</label>
                <input type="text" value="{{$add->meta_descrip}}" class="form-control" name="meta_descrip">
                </div>

                <div class="col-md-6 mb-3">              
                <label for="">Meta_Keywords</label>
                <input type="text" value="{{$add->meta_keywords}}" class="form-control" name="meta_keywords">
               </div>
@if($add->image)
<img src ="{{asset('storage/image/'.$add->image)}}" alt="add image">
@endif
               <div class="col-md-6 mb-3">              
                
               <input type="file" class="form-control" name="image">
               </div>
               <div class="col-md-6 mb-3">

                <button type="submit" class="btn btn-primary">submit</button>
                </div> 
</div>
</div>


        </form>

</div>
</div>


@endsection


