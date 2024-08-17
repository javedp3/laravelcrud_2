@extends('layouts.app')

@section('content')
<h1 class="text-center">Employee Details Updated</h1>
<div class="container mt-3">
    <div class="row ">
        <div class="form-area card m-2 p-2 border-dark">
            <form action="{{route('employee.update',$employee->id)}}" method="post">
                @csrf
                @method('patch')
                <div class="row ">
                    <div class="col-md-6 ">
                        <label for="">Employee Name</label>
                        <input type="text" name="employee_name" class="form-control" value="{{$employee->employee_name}}">
                    </div>
                    <div class="col-md-6">
                        <label for="">Employee DOB</label>
                        <input type="date" name="employee_dob" class="form-control" value="{{$employee->employee_dob}}">
                    </div>                    
                    <div class="col-md-12">
                        <label for="">Employee Phone Number</label>
                        <input type="text" name="employee_phone" class="form-control" value="{{$employee->employee_phone}}">
                    </div>
                                       
                    <div class="mt-2">
                        
                        <button type="submit" class="btn btn-outline-success" value="Update">Update</button>
                    </div>

                </div>
            </form>
        </div>


        
          
     </div>
</div>
@endsection
