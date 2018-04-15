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




                    
                    
            
            

@endsection

