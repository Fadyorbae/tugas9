@extends('layouts.app')

@section('title', 'cobaaaa')

@section('content')
    <div class="card">
        <div class="card-body">
        <h3>Nama Group : {{ $groups['name'] }}</h3>
        <h3>Description : {{ $groups['description'] }}</h3>
        <h3>Jumlah anggota : {{ $groups['jumlah_anggota'] }}</h3>
        <h3>Jumlah anggota yang pernah masuk : {{ $groups['anggota_masuk'] }} </h3>
        <h3>Jumlah anggota yang keluar : {{ $groups['anggota_keluar'] }}</h3>
        </div>
    </div>
@endsection