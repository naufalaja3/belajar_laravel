@extends('layouts.app')
@section('title', 'Tentang Kami')

@section('content')

    <x-my-breadcrumb :links="['Beranda' => '/', 'Tentang' => '/tentang']" />

    <h2 class="fw-bold mb-4">👥 Tentang Kami</h2>

    <div class="row mb-5">
        <div class="col-md-6">
            <h4>Cerita Kami</h4>
            <p>
                Kami adalah tim mahasiswa Teknik Informatika yang sedang belajar
                membangun aplikasi web modern menggunakan framework Laravel.
                Proyek ini merupakan bagian dari mata kuliah Pemrograman Web
                Berbasis Framework semester 6.
            </p>
            <p>
                Dengan semangat belajar yang tinggi, kami berkomitmen untuk
                menguasai setiap konsep Laravel mulai dari routing, Blade template,
                Eloquent ORM, hingga deployment aplikasi.
            </p>
        </div>
        <div class="col-md-6 text-center">
            <img src="https://via.placeholder.com/400x250?text=Foto+Tim"
                 class="img-fluid rounded shadow" alt="Foto Tim">
        </div>
    </div>

    <h4 class="fw-bold mb-3">👨‍💻 Tim Kami</h4>
    <div class="row g-4">
        @php
            $tim = [
                ['nama' => 'Naufal', 'peran' => 'Full Stack Developer', 'badge' => 'danger'],
                ['nama' => 'Anggota 2', 'peran' => 'UI/UX Designer', 'badge' => 'primary'],
                ['nama' => 'Anggota 3', 'peran' => 'Backend Developer', 'badge' => 'success'],
            ];
        @endphp

        @foreach($tim as $anggota)
        <div class="col-md-4">
            <x-my-card footer="{{ $anggota['peran'] }}">
                <div class="text-center">
                    <div class="rounded-circle bg-secondary d-inline-flex align-items-center
                         justify-content-center mb-3"
                         style="width:80px;height:80px;font-size:2rem;">
                        👤
                    </div>
                    <h5 class="card-title">{{ $anggota['nama'] }}</h5>
                    <x-my-badge :color="$anggota['badge']" :text="$anggota['peran']" />
                </div>
            </x-my-card>
        </div>
        @endforeach
    </div>

@endsection
