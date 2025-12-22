<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Wisata Sebatu</title>

    <link rel="icon" type="image/png" href="{{ asset('img/logo2.png') }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body class="font-sans antialiased bg-gray-100">
    <div class="flex min-h-screen">
        @include('components.navbar')

        <main class="flex-1">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
