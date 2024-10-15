<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'E-Waste Dashboard')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            background: linear-gradient(135deg, #f0f4f8, #dfe9f3);
            font-family: 'Roboto', sans-serif;
            color: #444;
        }

        .sidebar {
            background: #2d3436;
            height: 100vh;
            padding: 30px 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            transition: width 0.3s ease;
            z-index: 1000;
        }

        .sidebar:hover {
            width: 280px;
        }

        .sidebar a {
            color: #f8f9fa;
            font-size: 16px;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
            margin-bottom: 12px;
            border-radius: 8px;
            transition: background-color 0.3s ease, padding-left 0.3s ease;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: linear-gradient(135deg, #00bfa6, #17a2b8);
            padding-left: 30px;
        }

        .sidebar .logo {
            font-size: 28px;
            font-weight: bold;
            color: #f8f9fa;
            text-align: center;
            margin-bottom: 40px;
        }

        .sidebar .submenu {
            margin-left: 20px;
            padding-left: 10px;
            border-left: 2px solid #2a2b2d;
            display: none;
            transition: all 0.3s ease;
        }

        .sidebar .submenu a {
            font-size: 14px;
            padding: 8px 15px;
            background: #444;
            margin-bottom: 8px;
        }

        .content {
            margin-left: 250px;
            padding: 40px;
            background-color: #fff;
            min-height: 100vh;
            transition: all 0.3s ease;
        }

        /* Floating Profile Icon */
        .profile-container {
            position: fixed;
            top: 20px;
            right: 30px;
            z-index: 9999;
            background: #fff;
            padding: 10px;
            border-radius: 50%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .profile-container i {
            font-size: 32px;
            color: #444;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .profile-container i:hover {
            color: #00bfa6;
        }

        .dropdown-menu {
            margin-top: 10px;
            right: 0;
            left: auto;
        }

        /* Additional Styling for Smooth Dropdown Menu */
        .dropdown-menu {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .dropdown-menu .dropdown-item {
            color: #555;
            font-size: 14px;
            padding: 12px 20px;
            transition: background-color 0.3s ease;
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #f0f4f8;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stats .card {
            background: #ffffff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .stats .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
        }

        .card h4 {
            font-size: 18px;
            color: #555;
            margin-bottom: 12px;
        }

        .card h2 {
            font-size: 40px;
            font-weight: bold;
            background: linear-gradient(135deg, #00bfa6, #17a2b8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .transactions-table {
            margin-top: 40px;
        }

        .transactions-table table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            background: #fff;
        }

        .transactions-table th,
        .transactions-table td {
            text-align: center;
            padding: 15px;
            color: #555;
            font-size: 14px;
        }

        .transactions-table thead {
            background: linear-gradient(135deg, #00bfa6, #17a2b8);
            color: #fff;
        }

        .transactions-table tbody tr {
            transition: background-color 0.3s ease;
        }

        .transactions-table tbody tr:hover {
            background-color: #f0f4f8;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <div class="logo">E-Waste</div>
        <nav>
            <a href="#" class="active">Beranda</a>
            <a href="#" class="sampah-menu">Sampah</a>
            <div class="submenu">
                <a href="#">Kategori</a>
                <a href="#">Jenis</a>
            </div>
            <a href="#">Pelanggan</a>
            <a href="#">Kurir</a>
            <a href="#">Dropbox</a>
        </nav>
    </div>

    <div class="content">
        <!-- Profile icon and dropdown -->
        <div class="profile-container">
            <i class="fas fa-user-circle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false"></i>
            <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </li>
            </ul>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

        @yield('content')

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript for Sidebar Interaction -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sampahMenu = document.querySelector('.sampah-menu');
            const submenu = document.querySelector('.submenu');

            sampahMenu.addEventListener('click', function (e) {
                e.preventDefault();
                submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
            });
        });
    </script>
</body>

</html>
