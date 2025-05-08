<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <title>My Laravel App</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Tajawal', sans-serif;
            .fs-20px {
                font-size: 20px !important;
            }
        }
    </style>
</head>
<body>
    <!-- تضمين الناف بار -->
    @include('components.Navbar')

    <!-- تضمين الهيرو -->
    @include('components.Hero')

    <!-- تضمين الهيرو -->
    @include('components.info')

    <!-- تضمين الهيرو -->
    @include('components.How')

     <!-- تضمين الهيرو -->
    @include('components.Service')

    <!-- محتوى الصفحة -->
    <div class="container">
        @yield('content')
    </div>

    <!-- تضمين الفوتر -->
    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>