@extends('layouts.app')
@section('title', 'Blog')

@section('content')

    <x-my-breadcrumb :links="['Beranda' => '/', 'Blog' => '/blog']" />

    <h2 class="fw-bold mb-4">📝 Blog Laravel</h2>

    @php
        $artikel = [
            ['judul' => 'Mengenal Laravel: Framework PHP Terpopuler',
             'ringkasan' => 'Laravel adalah framework PHP yang elegan dan ekspresif. Pelajari kenapa Laravel menjadi pilihan utama para developer web modern.',
             'tanggal' => '10 Juni 2025', 'kategori' => 'Tutorial', 'badge' => 'danger'],
            ['judul' => 'Memahami Blade Template Engine',
             'ringkasan' => 'Blade adalah template engine bawaan Laravel yang powerful. Pelajari cara menggunakan directive, component, dan layout bersama.',
             'tanggal' => '8 Juni 2025', 'kategori' => 'Blade', 'badge' => 'primary'],
            ['judul' => 'Eloquent ORM: Cara Mudah Kelola Database',
             'ringkasan' => 'Dengan Eloquent ORM, kamu bisa berinteraksi dengan database menggunakan sintaks PHP yang bersih tanpa perlu menulis query SQL manual.',
             'tanggal' => '5 Juni 2025', 'kategori' => 'Database', 'badge' => 'success'],
            ['judul' => 'Membuat REST API dengan Laravel',
             'ringkasan' => 'Laravel mempermudah pembuatan REST API. Pelajari cara membuat endpoint, mengelola response JSON, dan autentikasi API.',
             'tanggal' => '1 Juni 2025', 'kategori' => 'API', 'badge' => 'warning'],
        ];
    @endphp

    <div class="row g-4">
        @foreach($artikel as $post)
        <div class="col-md-6">
            <x-my-card :title="$post['judul']" :footer="'📅 ' . $post['tanggal']">
                <div class="mb-2">
                    <x-my-badge :color="$post['badge']" :text="$post['kategori']" />
                </div>
                <p class="card-text">{{ $post['ringkasan'] }}</p>
                <x-my-button href="#" label="Baca Selengkapnya →" variant="outline-danger" />
            </x-my-card>
        </div>
        @endforeach
    </div>

@endsection
