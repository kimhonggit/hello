@extends('layouts.app')

@section('content')

    <div class="container">
        <form method="post" action="{{ route('store') }}">
            <fieldset >

                
           
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="exampleFname" class="font-weight-bold col-sm-2">First Name</label>
                <input type="text" name="txtFname" class="form-control col-sm-10" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="exampleLname" class="font-weight-bold">Last Name</label>
                <input type="text" name="txtLname" class="form-control" placeholder="Last Name">
            </div>
            
            <div class="form-group row">
                <label for="validationTooltip03" class="font-weight-bold col-sm-2">Gender</label>
                <div class="col-sm-10 ">
                    <div class="custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="gender" value="Male" checked>
                        <label class="badge" for="gender">Male</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="gender" value="Female">
                        <label class="badge" for="gender">Female</label>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label for="exampleAddress" class="font-weight-bold">Address</label>
                <input type="text" name="txtAddress" class="form-control" placeholder="Adress">
            </div>
            <input type="submit" value="Save" class="btn btn-primary">
            <a href="{{ route('student')}}" class="btn btn-danger float-right">Cancel</a>
        </fieldset>
        </form>
    </div>

@endsection