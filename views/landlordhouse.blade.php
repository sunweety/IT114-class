@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                <h3>List of my properties</h3>
                </div>
                
                
                

                <table class="table">
             <thead>
                     <tr>
      <th >My house ID</th>
      <th>Address</th>
      <th >Rent</th>
      <th >Administrator</th>
      <th>Tenant</th>
    </tr>
  </thead>

  <tbody>

    @foreach($admins as $admin)
    @foreach ($results as $houserecord)
    <tr>
      
      <th>{{$houserecord->house_id}}</th>
      <td>{{$houserecord->address}}</td>
      <td>{{$houserecord->rent}}</td>
      <td>{{$admin->name}}</td>
      <td>{{$houserecord->records->tenant_id}}</td>
      

    </tr>
    
    @endforeach
    @endforeach
  </tbody>
</table>




            </div>
        </div>
    </div>
</div>
@endsection