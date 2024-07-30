<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Memorandum Of Understanding</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('/css/twitterbootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/dataTables.bootstrap5.min.css') }}">

    <!-- Boxicons -->
    <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">

</head>

<body>


    <!-- Sidebar -->
    <section class="sidebars">
        <div class="sidebars-header">
            <h2 class="sidebars-title">Mou</h2>
        </div>
        <div class="sidebars-menu">
            <ul class="menu">
                <li class="separator">Menu</li>
                <a href="/dashboard" class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
                    <i class="bx bxs-dashboard icon"></i>
                    <li class="text">Dashboard</li>
                </a>
                <a href="/MoU" class="menu-item {{ Request::is('MoU') ? 'active' : '' }}">
                    <i class="bx bxs-file icon"></i>
                    <li class="text">Mou</li>
                </a>
                @if(Auth::user()->role == "admin")
                <a href="/categories" class="menu-item {{ Request::is('categories') ? 'active' : '' }}">
                    <i class="bx bxs-grid icon"></i>
                    <li class="text">Categories</li>
                </a>
                <a href="/users" class="menu-item {{ Request::is('users') ? 'active' : '' }}">
                    <i class="bx bxs-user-account icon"></i>
                    <li class="text">Users</li>
                </a>
                @endif
            </ul>
        </div>
        <div class="account">
            <ul class="menu">
                <li class="separator">Account</li>
                <a href="/keluar" class="menu-item">
                    <i class="bx bx-log-out icon"></i>
                    <li class="text">Logout</li>
                </a>
            </ul>
        </div>
    </section>

    <!-- Navbar -->
    <section class="nav-header">
        <nav class="navigation">
            <!-- Toggle Menu -->
            <div class="toggle">
                <i class="bx bx-menu" id="toggle"></i>
            </div>
            <div class="nav-menu">
                <div class="nav-item">
                    <i class="bx bxs-notification"></i>
                </div>
                <div class="nav-item">
                    <i class="bx bxs-user"></i>
                    <span class="user-icon">{{ Auth::user()->username }}</span>
                </div>
            </div>
        </nav>
    </section>

    <!-- Content -->
    <section class="content">
        @yield('contents')
    </section>

    <script src="{{ asset('js/sidebar.js') }}"></script>

    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(function() {

            $('#example').DataTable({
                search: {
                    return: true
                },
                "language": {
                    "url": "{{ asset('/id/Indonesian.json') }}"
                }
            });
        });
    </script>
</body>

</html>