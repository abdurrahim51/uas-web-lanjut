<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <main class="flex-shrink-0">

        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html">
                    <img src="/img/Logo.png" alt="Logo" style="height: 40px;">
                    <!-- Sesuaikan path dan style sesuai kebutuhan Anda -->
                </a>
                <a class="navbar-brand" href="index.html">MARKET FRESH</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('login') }}">Login</a>
                                </li>

                            </ul>
                    </ul>
                </div>
            </div>
        </nav>


        <style>
            .bg-dark.py-5 {
                background-image: url('/img/fp.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                color: rgb(255, 255, 255);
                /* Warna teks untuk kontras dengan background */
            }
        </style>
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6 d-flex flex-column align-items-center">
                        <div class="my-5 text-center text-xl-start">
                            <br>
                            <br>
                            <br>
                            <br>
                            <h1>NEW YEAR, NEW FLAVORS</h1>
                            <p>Shop new flavors, functional foods and seasonal citrus to start the year!</p>
                            <br>
                            <br>
                            <div class="text-center">
                                <a class="btn btn-success btn-lg px-4 me-sm-3" href="#features">Shop Now</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>


        <br>
        <br>

        <div class="container">
            <h2>Kategori</h2>
            <div class="row card-footer p-4 pt-0 border-top-0 bg-transparent">
                @foreach ($categories as $category)
                    <div class="col-md-4 mb-4 btn btn-outline-success ">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                                    <!-- Icon dari FontAwesome -->
                                    {{ $category->name }}
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>



        <br>
        <br>

        <div class="container mb-5">
            <h2>Produk</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @forelse ($product as $row)
                    <div class="col mb-4">
                        <div class="card h-100 shadow-sm"> <!-- Menambahkan shadow-sm di sini -->
                            <img src="/images/{{ $row->image }}" alt="{{ $row->image }}" class="card-img-top"
                                width="200" height="300">
                            <div class="card-body">
                                <h5 class="card-title fw-bolder text-center">{{ $row->name }}</h5>
                                <p class="card-text text-center">{{ $row->price }}</p>
                                <p class="card-text text-center">{{ $row->description }}</p>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-success"
                                        href="https://api.whatsapp.com/send/?phone=085792401051">Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty

                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="alert alert-danger m-0">
                                Data masih kosong
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>



        {{-- @include('frontend.footer') --}}





    </main>


</body>
<footer class="text-center text-lg-start bg-dark py-3 text-white">

    <section class="">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <img src="/img/abdur.jpg" alt="Logo " class="img-fluid" width="30%">
                    <h6 class="text-uppercase fw-bold mb-4">
                        ABDURRAHIM
                    </h6>
                    <p>
                        Ini dibuat untuk menyelsaikan tugas akhir Matakuliah Web Lanjut
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Sosial Media
                    </h6>
                    <p>
                        <i class="fa-brands fa-instagram"></i>
                        <a href="https://www.instagram.com/aswnsyrf/?next=%2F&hl=en" class="text-reset">Instagram

                        </a>
                    </p>
                    <p>
                        <i class="fa-brands fa-facebook"></i>
                        <a href="#!" class="text-reset">Facebook</a>
                    </p>
                    <p>
                        <i class="fa-brands fa-twitter"></i>
                        <a href="#!" class="text-reset">Twitter</a>
                    </p>
                    <p>
                        <i class="fa-brands fa-youtube"></i>
                        <a href="#!" class="text-reset">YouTube</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Hubungi Kami
                    </h6>
                    <p>
                        <i class="fa-solid fa-location-dot"></i>
                        Alamat: Gelumpang Desa Mamben Daya, Kec.Wanasaba, Lombok Timur
                    </p>
                    <p>
                        <i class="bi bi-envelope"></i>
                        Abdurrahim@gmail.com
                    </p>
                    <p><i class="bi bi-phone"></i> (+62) 0878123095333</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center py-4" style="background-color: rgba(0, 0, 0, 0.05);">
        Copyright &copy; 2024 Abdurrahim | Design by Abdur Web
    </div>
    <!-- Copyright -->
</footer>

</html>
