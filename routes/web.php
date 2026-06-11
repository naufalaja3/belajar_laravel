<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $fitur = [
        ['icon' => '
🚀
', 'judul' => 'MVC Architecture', 'desc' => 'Struktur
kode yang rapi dan terorganisir'],
        ['icon' => '
🗄
', 'judul' => 'Eloquent ORM',     'desc' => 'Akses
database dengan cara yang elegan'],
        ['icon' => '
🎨
', 'judul' => 'Blade Template',   'desc' => 'Template
engine yang powerful dan fleksibel'],
        ['icon' => '
🔐
', 'judul' => 'Security',         'desc' => 'Fitur
keamanan bawaan yang komprehensif'],
        ['icon' => '
⚡
', 'judul' => 'Artisan CLI',      'desc' => 'Command
line tool untuk produktivitas'],
        ['icon' => '
📦
', 'judul' => 'Package Ecosystem', 'desc' => 'Ribuan
paket siap pakai dari Composer'],
    ];
    return view('pages.home', compact('fitur'));
})->name('home');
// Halaman Tentang
Route::get('/tentang', function () {
    $tim = [
        ['nama' => 'Dina Budhi Utami, M.T.', 'peran' => 'Dosen Pengampu',
'foto' => null],
        ['nama' => 'Firayza',          'peran' => 'Asisten Lab',    'foto' =>
null],
        ['nama' => 'Fahmy',           'peran' => 'Asisten Lab',    'foto' =>
null],
    ];
    return view('pages.tentang', compact('tim'));
})->name('tentang');

// Halaman Kontak
Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

Route::get('/halo', function () {
    return 'Halo Dunia! Ini adalah halaman pertama saya di Laravel!';
});

Route::get('/sapa/{nama}', function (string $nama) {
    return 'Halo, ' . $nama . '! Selamat datang di Laravel.';
});

Route::get('/profil/{nama?}', function (string $nama = 'Tamu') {
    return 'Profil pengguna: ' . $nama;
});

Route::get('/tentang-kami', function () {
    return 'Halaman Tentang Kami';
})->name('tentang');

Route::get('/halo-blade', function () {
    return view('halo');
});

Route::get('/api/info', function () {
    return response()->json([
        'aplikasi' => 'Belajar Laravel',
        'versi'    => '1.0.0',
        'status'   => 'aktif',
    ]);
});

Route::get('/profil-mahasiswa', function () {
    // Cara 1: Menggunakan array compact()
    $nama  = 'Andi Pratama';
    $nim   = '12345678';
    $jurusan = 'Teknik Informatika';
    $semester = 3;
    $ipk   = 3.75;

    return view('profil-mahasiswa', compact('nama', 'nim', 'jurusan',
'semester', 'ipk'));
    // compact() mengambil nama variabel dan nilainya menjadi array

    // Cara 2: Menggunakan array manual (ekuivalen dengan cara 1)
    // return view('profil-mahasiswa', [
    //     'nama'     => 'Andi Pratama',
    //     'nim'      => '12345678',
    //     'jurusan'  => 'Teknik Informatika',
    //     'semester' => 3,
    //     'ipk'      => 3.75,
    // ]);

    // Cara 3: Menggunakan method with() (method chaining)
    // return view('profil-mahasiswa')
//     ->with('nama', 'Andi Pratama')
    //     ->with('nim', '12345678');
});

Route::get('/blade-latihan', function () {

    $nama = 'Andi Pratama';
    $ipk = 3.75;
    $statusMahasiswa = 'aktif';

    $mahasiswas = [
        [
            'nama' => 'Andi',
            'nim' => '123'
        ],
        [
            'nama' => 'Budi',
            'nim' => '456'
        ],
        [
            'nama' => 'Citra',
            'nim' => '789'
        ]
    ];

    return view('blade-latihan', compact(
        'nama',
        'ipk',
        'statusMahasiswa',
        'mahasiswas'
    ));
});
