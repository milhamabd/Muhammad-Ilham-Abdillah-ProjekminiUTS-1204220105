<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Controller & View pada Laravel</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container text-center my-5">
        <h1 class="mb-4">Projek Master Barang Sederhana</h1>
        {{-- Contoh cara mereferensikan gambar di dalam file blade dengan menggunakan pendekatan Vite --}}
        <img class="img-thumbnail" src="{{ Vite::asset('resources/images/pusing.jpg') }}" alt="image">

        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <a class="btn btn-dark btn-lg btn-block" href="{{ route('home') }}">Masuk</a>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
