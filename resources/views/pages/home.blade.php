@extends('layouts.app')
@section('title', 'Beranda')

@section('content')

    <x-my-alert type="success" message="Selamat datang di Laravel 13!" />
    <x-my-alert type="warning" message="Ini adalah latihan Blade Component." />
    <x-my-alert type="danger" message="Contoh alert error Bootstrap." />

    {{-- Hero Section --}}
    <div class="p-5 mb-4 bg-danger text-white rounded-3">
        <div class="container-fluid py-3">
            <h1 class="display-5 fw-bold">🎓 Belajar Laravel 13</h1>
            <p class="col-md-8 fs-4">
                Selamat datang di modul praktikum Laravel. Mari belajar
                membangun aplikasi web modern bersama!
            </p>
            <x-my-button href="/portofolio" label="Lihat Portofolio →" variant="light" />
        </div>
    </div>

    {{-- Fitur Cards --}}
    <div class="row g-4">
        <div class="col-md-4">
            <x-my-card title="🚀 MVC Architecture">
                Pelajari konsep Model-View-Controller yang terstruktur
                dan modular untuk pengembangan aplikasi yang scalable.
            </x-my-card>
        </div>
        <div class="col-md-4">
            <x-my-card title="🗄️ Eloquent ORM">
                Berinteraksi dengan database menggunakan Eloquent ORM
                yang intuitif dan powerful tanpa menulis SQL manual.
            </x-my-card>
        </div>
        <div class="col-md-4">
            <x-my-card title="🎨 Blade Template">
                Gunakan Blade Template Engine untuk membuat tampilan
                web yang dinamis dan reusable dengan sintaks yang bersih.
            </x-my-card>
        </div>
    </div>

@endsection
