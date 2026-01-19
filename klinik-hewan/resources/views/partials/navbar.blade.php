<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container-fluid">
        <span class="navbar-brand fw-bold">Dashboard</span>

        <div class="d-flex align-items-center">
            <span class="me-3">
                {{ auth()->user()->name ?? 'Admin' }}
            </span>

            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-outline-danger btn-sm">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>
