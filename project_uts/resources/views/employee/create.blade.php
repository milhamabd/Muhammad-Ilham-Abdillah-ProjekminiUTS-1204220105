<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data Master</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link active" ><i class="bi bi-house-fill me-2"></i> Home</a></li>
                    <li class="nav-item"><a href="{{ route('employees.index') }}" class="nav-link"><i class="bi bi-person-check-fill me-2"></i> Employee List</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>

    <div class="container-sm mt-5">
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-primary text-white rounded-3 border col-xl-6">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $error }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endforeach
                    @endif

                    <div class="container mt-5">
                        <h1 class="text-center mb-5">Form Input Barang</h1>
                        <form>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control bg-light @error('kodeBarang') is-invalid @enderror"
                                id="kodeBarang" name="kodeBarang" value="{{ old('kodeBarang') }}"
                                placeholder="Enter product kode">
                                @error('kodeBarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                                <label for="kodeBarang" class="form-label text-dark">Kode Product</label>

                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control bg-light @error('namaProduk') is-invalid @enderror"
                                id="namaProduk" name="namaProduk" value="{{ old('namaProduk') }}"
                                placeholder="Enter product name">
                                @error('namaProduk')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                                <label for="namaProduk" class="form-label text-black">Nama Product</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-light">Rp</span>
                                <input type="number" class="form-control bg-light @error('harga') is-invalid @enderror"
                                id="harga" name="harga" value="{{ old('harga') }}"
                                aria-label="Amount (without decimal)" step="100">
                                @error('harga')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                                <span class="input-group-text bg-light"></span>
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control bg-light @error('deskripsi') is-invalid @enderror"
                                id="deskripsi" name="deskripsi" value="{{ old('deskripsi') }}"
                                rows="3" placeholder="Enter product description"></textarea>
                                @error('deskripsi')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                                <label for="deskripsi" class="form-label text-black">Deskripsi Product</label>
                            </div><br>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control bg-light @error('satuanID') is-invalid @enderror"
                                id="satuanID" name="satuanID" value="{{ old('satuanID') }}"
                                placeholder="Enter Satuan ID">
                                @error('satuanID')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                                <label for="satuanID" class="form-label text-black">Satuan ID</label>
                            </div>

                            <button type="submit" class="btn btn-light btn-lg mt-3">
                                <i class="bi bi-check-circle-fill me-2"></i>Simpan
                            </button>
                            <a href="{{ route('employees.index') }}" class="btn btn-outline-light btn-lg mt-3">
                                <i class="bi bi-arrow-left-circle-fill me-2"></i>Batal
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </div>





    @vite('resources/js/app.js')
</body>
</html>
