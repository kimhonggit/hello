@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="{{ route('student') }}" class="btn btn-primary form-group">Back</a>
        <form>
            <div class="form-group row">
                <label for="staticFname" class="col-sm-2 col-form-label font-weight-bold">First Name</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticFname" value="{{ $post->fname }}" placeholder="First Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticLname" class="col-sm-2 col-form-label font-weight-bold">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticLname" value="{{ $post->lname }}" placeholder="Last Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticGender" class="col-sm-2 col-form-label font-weight-bold">Gender</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticGender" value="{{ $post->gender }}" placeholder="Gender">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticAddress" class="col-sm-2 col-form-label font-weight-bold">Address</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticAddress" value="{{ $post->address }}" placeholder="Address">
                </div>
            </div>
        </form>  
        <a href="{{ route('update', ['id' => $post->id]) }}" class="btn btn-primary">Edit</a>
    </div>
        
@endsection