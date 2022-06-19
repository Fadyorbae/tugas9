@extends('layouts.app')

@section('title', 'friends')

@section('content')
<a href="/friends/create" class="card-link btn btn-primary">Tambah teman</a>
<div class="row row-cols-4">
@foreach  ($friends as $friend)
<div class="col">
    <div class="card mt-2 me-2 bg-light" style="width: 18rem;">
      <div class="card-body">
        <a href="/friends/{{ $friend['id']}}" class="card-title">{{ $friend['nama'] }}</a>
          <h6 class="card-subtitle mb-2 text-muted">{{ $friend['no_hp'] }}</h6>
          <p class="card-text">{{ $friend['alamat'] }}.</p>
    
        <a href="/friends/{{$friend['id']}}/edit" class="card-link btn btn-warning">Edit teman</a>
        <form action="/friends/{{ $friend['id']}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="card-link btn btn-danger">Delete teman</button>
        </form>
      </div>
  
    </div>
    </div>
    @endforeach
</div>
    
@endsection