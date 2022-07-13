@extends('layouts.app')

@section('content')
<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Tags</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $posts as $post )
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->category->name}}</td>
                <td></td>
                <td class="d-flex">
                    <a href="#" class="btn btn-primary">SHOW</a>
                    <a href="#" class="btn btn-warning mx-1">MODIFY</a>
                    <form action="#"
                    method="post">
                    @csrf
                    @method('DELETE')

                        <button type="sumbit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
