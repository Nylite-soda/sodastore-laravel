<!-- resources/views/layouts/admin.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="admin-sidebar">
        <ul>
            <li><a href="admin.contacts">Contacts</a></li>
        </ul>
    </div>
    <div class="admin-content">
        @yield('content')
    </div>
</body>
</html>
