@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="row ">
        <div class="form-area card border-dark  p-2 ">
            <form action="{{route('employee.store')}}" method="post">
                @csrf
                <div class="row ">
                    <div class="col-md-6 ">
                        <label for="">Employee Name</label>
                        <input type="text" name="employee_name" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Employee DOB</label>
                        <input type="date" name="employee_dob" class="form-control">
                    </div>                    
                    <div class="col-md-12">
                        <label for="">Employee Phone Number</label>
                        <input type="text" name="employee_phone" class="form-control">
                    </div>
                                       
                    <div class="mt-2">
                        
                        <button type="submit" class="btn btn-outline-success" value="Register">Submit</button>
                    </div>

                </div>
            </form>
        </div>


        {{-- table --}}   
            <div class="row m-1 p-1 card border-dark ">
                <div class="text-center p-1 bg-info"><h1>Employees List...</h1></div>
                <table class="table ">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">Sr. No.</th>
                        <th scope="col">Employee Name</th>
                        <th scope="col">Employee DOB</th>
                        <th scope="col">Employee Phone Number</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $key=>$employee)
                        <tr>
                            <td scope="col">{{++$key}}</td>
                            <td scope="col">{{$employee->employee_name}}</td>
                            <td scope="col">{{$employee->employee_dob}}</td>
                            <td scope="col">{{$employee->employee_phone}}</td>
                            <td scope="col" class="btn-group" role="group" >
                                <a href="{{route('employee.edit',$employee->id)}}">
                                <button class="btn btn-outline-primary btn-sm">
                                    
                                    Edit
                                </button>
                            </a>
                            
                                <form action="{{route('employee.destroy',$employee->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                </form>
                            </td>
                            
                          </tr>
                        @endforeach
                      
                      
                    </tbody>
                  </table>
            </div>
        
     </div>
</div>
@endsection