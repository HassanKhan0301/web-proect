@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header"></div>
    <h4>Catogry Page</h4>
    <hr>
    <div class="card-body">
    <table class="table table-border table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>

      

    </tr>
  </thead>
  <tbody>
    @foreach($add as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->description}}</td>
      <td>
        
          <img src="{{asset('storage/image/'.$item->image)}}" class="cate-image" >  
    </td>
      <td>
        <a href="{{url('edit-prod/'.$item->id)}}" class="btn btn-primary">Edit</a>
        <a href="{{url('delete-prod/'.$item->id)}}" class="btn btn-primary">delete</a>
        
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</hr>


@endsection