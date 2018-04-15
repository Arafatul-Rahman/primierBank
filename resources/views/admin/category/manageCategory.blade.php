@extends('admin.master')

@section('content')
<hr>
<div class="container-flude">
  <h2>All Info hare</h2>
  <h3 class="text-center text-success">{{Session::get('massege')}}</h3>
  <hr>
                                                                                        
  <div class="table-responsive">          
  <table class="table table-striped table-bordered" style="width: 100%">
    <thead>

      <tr>
        <th>Name</th>
        
       
        <th>Acount/Card Number</th>
        <th>Contact Number</th>
        <th>Category</th>
        <th>Quary</th>
        <th>Branch Name</th>
        <th>Account Type</th>
        <th>remarks</th>
        <th>Servise TYpe</th>
        <th>Creat time</th>
        
     
        
      </tr>
      <tr>
        
        
     
        
            
        @foreach($saveinfo as $saveinf)
        <tr>
        <td>{{$saveinf->username}}</td>
       
        <td>{{$saveinf->cardNumber}}</td>
        <td>{{$saveinf->contuctNumber}}</td>
        <td>{{$saveinf->categoryinfo}}</td>
        <td>{{$saveinf->quaryinfo}}</td>
        <td>{{$saveinf->branchinfo}}</td>
        <td>{{$saveinf->accountsinfo}}</td>
        <td>{!!$saveinf->categorydes!!}</td>
        <td>{!!$saveinf->serviceType!!}</td>
        <td>{{$saveinf->created_at}}</td>
        </tr>
        @endforeach
     
        
      

    </thead>
    <tbody>
    
        
      
        	
 
        
        
        
      </tr>
      
    </tbody>
  </table>
  </div>
</div>

@endsection