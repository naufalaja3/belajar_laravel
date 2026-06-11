@extends('layouts.app')
@section('title', 'Portofolio')

@section('content')

    <x-my-breadcrumb :links="['Beranda' => '/', 'Portofolio' => '/portofolio']" />

    <h2 class="fw-bold mb-4">💼 Portofolio Proyek</h2>

    @php
        $proyek = [
            ['judul' => 'Sistem Manajemen Mahasiswa', 'teknologi' => 'Laravel + MySQL',
             'deskripsi' => 'Aplikasi CRUD untuk mengelola data mahasiswa dengan fitur pencarian dan pagination.',
             'badge' => 'danger', 'status' => 'Selesai'],
            ['judul' => 'Website Profil IPM', 'teknologi' => 'Laravel + Bootstrap',
             'deskripsi' => 'Website profil organisasi IPM dengan fitur administrasi anggota berbasis web.',
             'badge' => 'primary', 'status' => 'Selesai'],
            ['judul' => 'Undangan Digital', 'teknologi' => 'HTML + CSS + JS',
             'deskripsi' => 'Website undangan digital Walimatul Khitan dengan animasi dan custom domain.',
             'badge' => 'success', 'status' => 'Selesai'],
            ['judul' => 'Aplikasi Flutter CRUD', 'teknologi' => 'Flutter + REST API',
             'deskripsi' => 'Aplikasi mobile untuk manajemen data mahasiswa menggunakan Flutter dan REST API.',
             'badge' => 'warning', 'status' => 'Selesai'],
            ['judul' => 'Blog Pribadi', 'teknologi' => 'Laravel + Blade',
             'deskripsi' => 'Blog pribadi dengan fitur artikel, kategori, dan komentar menggunakan Laravel.',
             'badge' => 'info', 'status' => 'Dalam Pengerjaan'],
            ['judul' => 'E-Commerce Sederhana', 'teknologi' => 'Laravel + Midtrans',
             'deskripsi' => 'Toko online sederhana dengan fitur keranjang belanja dan pembayaran online.',
             'badge' => 'secondary', 'status' => 'Rencana'],
        ];
    @endphp

    <div class="row g-4">
        @foreach($proyek as $item)
        <div class="col-md-4">
            <x-my-card :title="$item['judul']" :footer="'Teknologi: ' . $item['teknologi']">
                <p class="card-text">{{ $item['deskripsi'] }}</p>
                <x-my-badge :color="$item['badge']" :text="$item['status']" />
            </x-my-card>
        </div>
        @endforeach
    </div>

@endsection
