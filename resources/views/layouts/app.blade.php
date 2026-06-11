<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Belajar Laravel') | Belajar Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * { transition: background-color 0.3s ease, color 0.3s ease; }
        .card:hover { transform: translateY(-5px); transition: transform 0.3s ease; }
        footer { margin-top: auto; }
        body { display: flex; flex-direction: column; min-height: 100vh; }
        .main-content { flex: 1; }
    </style>
    @stack('styles')
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-danger navbar-dark shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                🎓 Belajar Laravel
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active fw-bold' : '' }}" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('tentang') ? 'active fw-bold' : '' }}" href="/tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('portofolio') ? 'active fw-bold' : '' }}" href="/portofolio">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('blog') ? 'active fw-bold' : '' }}" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('kontak') ? 'active fw-bold' : '' }}" href="/kontak">Kontak</a>
                    </li>
                </ul>
                <button id="darkModeToggle" class="btn btn-sm btn-outline-light">
                    🌙 Dark Mode
                </button>
            </div>
        </div>
    </nav>

    {{-- Konten Utama --}}
    <div class="main-content container py-4">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="bg-dark text-white text-center py-3 mt-4">
        <div class="container">
            <p class="mb-0">© 2024/2025 Belajar Laravel — Modul Praktikum</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

    <script>
        // Terapkan dark mode dari localStorage saat halaman dimuat
        const savedMode = localStorage.getItem('darkMode');
        const toggleBtn = document.getElementById('darkModeToggle');
        if (savedMode === 'dark') {
            document.documentElement.setAttribute('data-bs-theme', 'dark');
            toggleBtn.textContent = '☀️ Light Mode';
        }

        toggleBtn.addEventListener('click', function () {
            const html = document.documentElement;
            if (html.getAttribute('data-bs-theme') === 'dark') {
                html.setAttribute('data-bs-theme', 'light');
                localStorage.setItem('darkMode', 'light');
                this.textContent = '🌙 Dark Mode';
            } else {
                html.setAttribute('data-bs-theme', 'dark');
                localStorage.setItem('darkMode', 'dark');
                this.textContent = '☀️ Light Mode';
            }
        });
    </script>
</body>
</html>
