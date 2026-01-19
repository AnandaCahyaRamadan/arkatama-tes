<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
        }
        .sidebar {
            min-height: 100vh;
        }
        .stat-card {
            border: none;
            border-radius: 1rem;
            transition: all .3s ease;
        }

        .stat-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0,0,0,.15);
        }

        .icon-box {
            font-size: 3rem;
            opacity: .4;
        }

        .bg-gradient-primary {
            background: linear-gradient(135deg, #4e73df, #224abe);
        }

        .bg-gradient-success {
            background: linear-gradient(135deg, #1cc88a, #13855c);
        }

        .bg-gradient-warning {
            background: linear-gradient(135deg, #f6c23e, #dda20a);
        }

        .bg-gradient-danger {
            background: linear-gradient(135deg, #e74a3b, #be2617);
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    @stack('css')
</head>
<body>

<div class="d-flex">
    {{-- Sidebar --}}
    @include('partials.sidebar')

    <div class="flex-grow-1">
        {{-- Navbar --}}
        @include('partials.navbar')

        {{-- Content --}}
        <main class="p-4">
            @yield('content')
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('js')

</body>
</html>
