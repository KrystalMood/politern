@extends('layouts.main')

@section('judul')
    Masuk
@endsection

@section('deskripsi')
    Selamat datang di Politern!
@endsection

@section('konten')
    <main class="min-h-screen w-full flex flex-col md:flex-row bg-gradient-to-br from-blue-50 to-gray-100">
        @include('components.auth.gambar')
        @include('components.auth.formulir')
    </main>
@endsection