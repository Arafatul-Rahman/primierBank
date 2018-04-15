@extends('admin.master')

@section('content')
<br>
<br>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  
    <ul class="nav navbar-nav">
      <li><a href="{{url('/inbound/add')}}">Inbound</a></li>
    </ul>
    <form method="POST" action="{{ url('search') }}" class="navbar-form navbar-left">
                        @csrf
      <div class="input-group">
        
          <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search..." name="search">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
      </div>
    </form>
   <div style="float: right;">
    
  
     <ul class="nav navbar-nav">
      
      <li><a href="{{url('/outbound/add')}}">OUTbound</a></li>
    </ul>
    <form method="POST" action="{{ url('searchoutbound') }}" class="navbar-form navbar-left">
                        @csrf
      <div class="input-group">
        
          <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search outbound" name="searchoutbound">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
      </div>
    </form>
    </div>
  </div>
</nav>
<div>
  @if(isset($details))
  <P>your search result for your query <b>{{$query}}</b></P>
  <h1>your sample result</h1>
  <table class="table table-bordered">
    <tr>
      <th>user name</th>
      <th>Contact Number</th>
    <th>Acount/Card Number</th>
        
        <th>Category</th>
        <th>Quary</th>
        <th>Branch Name</th>
        <th>Account Type</th>
        <th>remarks</th>
        <th>Create time</th>
    </tr>
    @foreach($details as $searchdata )

    <tr>
      
      <td>{{$searchdata->username}}</td>
      <td>{{$searchdata->contuctNumber}}</td>
      <td>{{$searchdata->cardNumber}}</td>
      <td>{{$searchdata->categoryinfo}}</td>
      <td>{{$searchdata->quaryinfo}}</td>
      <td>{{$searchdata->branchinfo}}</td>
      <td>{{$searchdata->accountsinfo}}</td>
      <td>{!!$searchdata->categorydes!!}</td>
      <td>{!!$searchdata->created_at!!}</td>
      
    </tr>
    @endforeach
  </table>
  @elseif(isset($message))
  <h1>No data hare</h1>
  @endif
  
</div>

@endsection