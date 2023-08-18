@extends('layouts.main')
@section('main-section')

    <h1>Customers Trash List </h1>
    <div class='row'>
        <div class='col-12'>
     <a name="" id="" class="btn btn-success float-end" href="{{route('customer.view')}}" role="button">Go to View</a>
    </div>
    </div>
    <div class="table-responsive mt-5">
        <table class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>gender</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Active/InActive</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    @isset($customers)                                        
                    @foreach ($customers as $cust )
                    <tr class="table-primary" >
                        <td scope="row">{{$cust->customer_id}}</td>
                        <td>{{$cust->name}}</td>
                        <td>{{$cust->email}}</td>
                        <td>{{$cust->mobile}}</td>
                        <td>{{$cust->gender==='M'?'Male':'Female'}}</td>
                        <td>{{formattedDate($cust->dob)}}</td>
                        <td>{{$cust->address}}</td>
                        <td>
                            @if($cust->isActive==1)
                               
                                <span class="badge bg-success"> Active</span>
                            @else
                            <span class="badge bg-danger"> InActive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('customer.restore',['id'=>$cust->customer_id])}}" class="btn btn-success">Restore</a>
                          {{-- <a  href="{{route('customer.forceDelete',['id'=>$cust->customer_id])}}"> --}}
                            <form action="{{route('customer.forceDelete',['id'=>$cust->customer_id])}}">
                            <input name="" id="" class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('are you sure to delete??')">    
                            </form>
                        
                        {{-- </a> --}}
                        </td>
                    </tr>
                    @endforeach
                    @endisset
                </tbody>
                
        </table>
    </div>
    
@endsection