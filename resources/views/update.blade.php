@extends('layouts.app')

@section('content')

    <div class="container">
        <form method="post" action="{{ route('save',['id' => $post->id]) }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleFname" class="font-weight-bold">First Name</label>
                <input type="text" name="txtFname" class="form-control" value="{{ $post->fname }}" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="exampleLname" class="font-weight-bold">Last Name</label>
                <input type="text" name="txtLname" class="form-control" value="{{ $post->lname }}" placeholder="Last Name">
            </div>
            
            <div class="form-group">
                <label for="validationTooltip03" class="font-weight-bold">Gender</label>
                <div class="col-md-6 mb-3">
                    <div class="custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="gender" value="Male"
                               @if($post->gender == "Male")
                                {{"checked"}}
                               @endif
                        />
                        <label class="badge" for="gender">Male</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="gender" value="Female"
                               @if($post->gender == "Female")
                                {{"checked"}}
                               @endif
                        />
                        <label class="badge" for="gender">Female</label>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label for="exampleAddress" class="font-weight-bold">Address</label>
                <input type="text" name="txtAddress" class="form-control" value="{{ $post->address }}" placeholder="Adress">
            </div>
            <input type="submit" value="Save" class="btn btn-primary">
            <a href="{{ route('student') }}" class="btn btn-danger float-right">Cancel</a>
        </form>
    </div>
        
@endsection