@extends('layouts.main')
@section('main-section')

    <h1>Customers List </h1>
    <div class='row'>
        <div class='col-6'>
        <form action="{{url('/customer/view')}}">
            <div>
                <div class="mb-3 input-group">
                    <input type="search" name="search" class="form-control" placeholder="name or email">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    </div>
    <div class='col-6'>
     <a name="" id="" class="btn btn-danger float-end" href="{{route('customer.trash')}}" role="button">Go to Trash</a>
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
                            <a href={{route('customer.edit',['id'=>$cust->customer_id])}} class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                            {{-- <a href={{url('/customer/delete/'.$cust->customer_id)}} class="btn btn-danger"><i class="bi bi-trash"></i></a> --}}

                            <a href={{route('customer.delete',['id'=>$cust->customer_id])}} class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @endisset
                </tbody>
                
        </table>
            @if($search==null)
                 {{ $customers->links('pagination::bootstrap-5'); }}
            @endif
    </div>
    
@endsection