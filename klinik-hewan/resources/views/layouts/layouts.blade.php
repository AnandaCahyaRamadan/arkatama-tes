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
    </style>

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
