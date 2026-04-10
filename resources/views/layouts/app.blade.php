<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poketto - Finance Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .navbar-brand { font-weight: bold; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #ffffff; border-bottom: 2px solid #f28f33; padding: 15px 0;">
        <div class="container">
            <a class="navbar-brand" href="/" style="font-weight: 800; color: #f28f33; font-family: 'Poppins', sans-serif; font-size: 1.5rem;">
                POKETTO
            </a>
            <div class="ms-auto">
                <ul class="navbar-nav flex-row gap-3">
                    <li class="nav-item">
                        <a class="nav-link" href="/login" style="color: #666; font-weight: 600; font-size: 0.95rem;">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn" href="/register" 
                        style="background-color: #f28f33; color: white; border-radius: 20px; padding: 5px 20px; font-weight: 600; font-size: 0.95rem; transition: 0.3s;">
                            Register
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>