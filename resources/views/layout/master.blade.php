<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard | {{ $title }}</title>
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav class="sidebar shadow-lg p-2 ">
        <div class="ms-1 header">
            <h4><a href="/dashboard" class="text-decoration-none text-white">Dashboard</a></h4>
        </div>

        @if ($title == 'produk')
        <a href="/input" class=" text-decoration-none btn btn-outline-light slink">Tambah Data Produk</a>
        @else
        <a href="/produk" class=" text-decoration-none btn btn-outline-light slink">Kelola Data Produk</a>
        @endif

        <div class="logout ms-1" style="position:relative; top:450px;">
            <form id="logout-form" action="/logout" method="post" style="display: none;">
                @csrf
            </form>
            <a href="#" class="btn btn-outline-light button-logout"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>

</html>