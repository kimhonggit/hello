


@extends('layouts.app')

@section('content')


    
    @if(count($posts) >= 1)
    <div class="container">

  
  
 

    <a href="{{ route('create') }}" class="btn btn-danger" style="float:right; margin:10px 0;"><i class="fas fa-plus"> Add</i></a>
  




            <table border=1 class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
               @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->fname }}</td>
                        <td>{{ $post->lname }}</td>
                        <td>{{ $post->gender }}</td>
                        <td>{{ $post->address }}</td>
                        <td><a href="{{ route('view', $post->id) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('update', $post->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('delete',$post->id) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>


       
       
            @endif
@endsection

