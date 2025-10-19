<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Favenue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; overflow-x: hidden; }
        .navbar { background-color: #0d6efd; }
        .navbar-brand { color: white !important; font-weight: bold; }
        .sidebar {
            position: fixed; top: 56px; left: 0; width: 230px; height: calc(100vh - 56px);
            background-color: #0d6efd; color: white; padding-top: 20px;
        }
        .sidebar a {
            color: white; display: block; padding: 10px 20px; text-decoration: none; font-size: 15px;
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #0056d2; border-radius: 5px;
        }
        .content { margin-left: 250px; margin-top: 70px; padding: 20px; }
        .logout { color: #ffc107 !important; }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Favenue</a>
            <div class="d-flex align-items-center text-white">
                Halo, <strong>&nbsp;@yield('user_role')</strong>
                <a href="/logout" class="btn btn-outline-light btn-sm ms-3">Logout</a>
            </div>
        </div>
    </nav>

<body>
    @include($sidebar)

    <div class="content">
        <h3 class="mb-4">{{ $title }}</h3>
        @yield('content')
    </div>
</body>
</html>
