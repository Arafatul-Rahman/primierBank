@extends('admin.master')

@section('content')
<div>

  <table class="table table-bordered">
    <tr>
      <th> Name</th>
      <th> Email</th>
      <th> Create Time</th>
      <th> Update time</th>
  
    @foreach($users as $user )

    <tr>
      
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->created_at}}</td>
      <td>{{$user->updated_at}}</td>
   
      
    </tr>
    @endforeach

  
</div>

@endsection