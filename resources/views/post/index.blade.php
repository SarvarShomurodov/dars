@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
    <table>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Content</th>
          <th>Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
          <td>{{ $post->id }}</td>
          <td>{{ $post->name }}</td>
          <td>{{ $post->content }}</td>
          <td>
            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
            @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection