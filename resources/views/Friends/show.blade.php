@extends('layouts.app')

@section('title', 'Cobaaaaaa')

@section('content')
<div class="card">
    <div class="card-body">
        <h3> Nama teman : {{ $friend['nama'] }} </h3>
        <h3> No Hp teman : {{ $friend['no_hp'] }} </h3>
        <h3> Alamat teman : {{ $friend['alamat'] }} </h3>
    </div>
</div>
@endsection