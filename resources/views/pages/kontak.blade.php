@extends('layouts.app')
@section('title', 'Kontak')

@section('content')

    <x-my-breadcrumb :links="['Beranda' => '/', 'Kontak' => '/kontak']" />

    <h2 class="fw-bold mb-4">📬 Hubungi Kami</h2>

    <div class="row g-4">
        <div class="col-md-7">
            <x-my-card title="Kirim Pesan">
                <x-my-alert type="info" message="Form ini hanya tampilan, belum berfungsi." />

                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama lengkap">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control" placeholder="contoh@email.com">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Subjek</label>
                    <input type="text" class="form-control" placeholder="Subjek pesan">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Pesan</label>
                    <textarea class="form-control" rows="4" placeholder="Tulis pesan kamu di sini..."></textarea>
                </div>
                <x-my-button label="Kirim Pesan 📨" variant="danger" />
            </x-my-card>
        </div>

        <div class="col-md-5">
            <x-my-card title="Informasi Kontak">
                <ul class="list-unstyled">
                    <li class="mb-3">
                        📍 <strong>Alamat</strong><br>
                        <span class="text-muted">Cimahi, Jawa Barat, Indonesia</span>
                    </li>
                    <li class="mb-3">
                        📧 <strong>Email</strong><br>
                        <span class="text-muted">naufal@belajarlaravel.com</span>
                    </li>
                    <li class="mb-3">
                        📱 <strong>WhatsApp</strong><br>
                        <span class="text-muted">+62 812-3456-7890</span>
                    </li>
                    <li class="mb-3">
                        🕐 <strong>Jam Aktif</strong><br>
                        <span class="text-muted">Senin - Jumat, 08.00 - 17.00 WIB</span>
                    </li>
                </ul>
            </x-my-card>
        </div>
    </div>

@endsection
