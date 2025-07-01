<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lampung Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">Lampung Shop</a>
    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
  </div>
</nav>
<div class="container mt-4">
    @yield('content')
</div>
</body>
</html>
