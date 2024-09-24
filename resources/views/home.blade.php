<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Primi Passi</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="d-flex justify-content-between align-items-center py-3">
                <h3 class="text-danger">Laravel</h3>
                <ul class="list-unstyled d-flex m-0">
                    <li class="p-2"><a class="text-decoration-none text-black" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="p-2"><a class="text-decoration-none text-black" href="{{ route('aboutus') }}">Chi
                            Siamo</a></li>
                    <li class="p-2"><a class="text-decoration-none text-black"
                            href="{{ route('contacts') }}">Contattaci</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <h1 class="text-center my-5">{{ $Hello }}</h1>
    </main>
</body>

</html>
