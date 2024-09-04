<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SonicPulse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Marope:wght@400;700&display=swap');

        body {
            font-family: 'Manrope', sans-serif;
            margin: 0;
            padding: 0;
        }

        .row {
            margin-right: 0;
            margin-left: 0;
        }

        .col-md-4 {
            padding-left: 0;
            padding-right: 0;
        }

        /* Loader CSS */
        .loader-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.8);
            /* Optional: semi-transparent background */
            z-index: 9999;
            /* Make sure loader is on top */
        }

        .loader {
            width: 50px;
            aspect-ratio: 1;
            display: grid;
            border: 4px solid #0000;
            border-radius: 50%;
            border-right-color: #009EF2;
            animation: l15 1s infinite linear;
        }

        .loader::before,
        .loader::after {
            content: "";
            grid-area: 1/1;
            margin: 2px;
            border: inherit;
            border-radius: 50%;
            animation: l15 2s infinite;
        }

        .loader::after {
            margin: 8px;
            animation-duration: 3s;
        }

        @keyframes l15 {
            100% {
                transform: rotate(1turn)
            }
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ffff;
            padding: 10px 75px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-nav {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
            align-items: center;
        }

        .nav-item {
            margin-left: 18px;
            position: relative;
        }

        .nav-item a {
            color: #808080;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }

        .nav-item a:hover,
        .nav-item a:focus {
            color: #009EF2;
        }

        .nav-item a.active {
            color: #009EF2;
        }

        .logo {
            width: 115px;
        }

        .rectangle {
            background-color: #F5FAFF;
            padding: 80px;
            width: 100%;
            text-align: center;
        }

        h1 {
            background: linear-gradient(to right, #009EF2, #F32323);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 32px;
            font-weight: 500;
        }

        .card {
            width: 18rem;
            margin: 0 auto;
            margin-top: 23px;
            margin-bottom: 23px;
            border: 2px solid #009EF2;
            border-radius: 18px;
        }

        .card img {
            margin: 10px auto;
            /* Menambahkan ruang di sekitar gambar */
            background: #fff;
            width: 92%;
            height: 280px;
            border-radius: 14px;
            /* Opsional: membuat sudut gambar lebih lembut */
        }

        .card-img-top {
            width: 100%;
            /* Mengatur lebar gambar sesuai dengan lebar card */
            object-fit: cover;
            /* Memastikan gambar tidak terdistorsi dan mengisi area dengan baik */
            border-radius: 14px;
            /* Opsional: membuat sudut gambar lebih lembut */
        }

        .card-text {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
            /* Memungkinkan teks membungkus */
            text-align: justify;
        }

        .card-title {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .card:hover {
            background-color: #009EF2;
            color: #ffffff;
        }

        .card:hover .card-title {
            color: #ffffff;
        }


        /* Tablet 768px */
        @media (max-width: 768px) {
            .navbar {
                padding: 10px 40px;
            }

            .logo {
                width: 100px;
            }

            .rectangle {
                padding: 60px;
            }

            .h1 {
                font-size: 28px;
            }

            .card {
                max-width: 85%;
            }

            .card img {
                height: 150px;
            }

            .card-title {
                font-size: 20px;
            }

            footer {
                font-size: 18px;
            }
        }

        /* Mobile L 425px */
        @media (max-width: 425px) {
            .navbar {
                padding: 10px 20px;
            }

            .logo {
                width: 80px;
            }

            .rectangle {
                padding: 40px;
            }

            h1 {
                font-size: 24px;
            }

            .card {
                max-width: 80%;
            }

            .card img {
                height: 260px;
            }

            .card-title {
                font-size: 18px;
            }

            footer {
                font-size: 16px;
            }
        }

        /* Mobile M 375px */
        @media (max-width: 375px) {
            .navbar {
                padding: 10px 15px;
            }

            .logo {
                width: 70px;
            }

            .rectangle {
                padding: 30px;
            }

            h1 {
                font-size: 22px;
            }

            .card {
                max-width: 75%;
            }

            .card img {
                height: 220px;
            }

            .card-title {
                font-size: 16px;
            }

            footer {
                font-size: 14px;
            }
        }

        /* Untuk layar 320px */
        @media (max-width: 320px) {
            .navbar {
                padding: 10px 10px;
            }

            .logo {
                width: 60px;
            }

            .rectangle {
                padding: 20px;
            }

            h1 {
                font-size: 20px;
            }

            .card {
                max-width: 70%;
            }

            .card img {
                height: 180px;
            }

            .card-title {
                font-size: 14px;
            }

            footer {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>

    <!-- Loader -->
    <div class="loader-container">
        <div class="loader"></div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="IMG/Logo.png" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="artikel">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #009EF2;" href="produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aktivitas">Aktivitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak">Kontak</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Bahasa
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Indonesia</a></li>
                            <li><a class="dropdown-item" href="#">English</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Background -->
    <div class="rectangle">
        <h1>Produk Kami</h1>
    </div>

    <!-- Card Produk -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <a href="detail-produk" style="text-decoration: none; color: #009EF2;">
                    <div class="card">
                        <img src="IMG/S3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title text-center">Card title 1aaaaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaa
                                aaaaaaaaaa</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="detail-produk" style="text-decoration: none; color: #009EF2;">
                    <div class="card">
                        <img src="IMG/S3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title text-center">Card title 2</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="detail-produk" style="text-decoration: none; color: #009EF2;">
                    <div class="card">
                        <img src="IMG/S3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title text-center">Card title 3</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="detail-produk" style="text-decoration: none; color: #009EF2;">
                    <div class="card">
                        <img src="IMG/S3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title text-center">Card title 3</h3>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer style="background-color: #F5FAFF;">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <h5 class="mb-3 text">footer content</h5>
                    <p style="color: #555;">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                        voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-3 text-dark">links</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1">
                            <a href="#!" style="color: #555;">Instagram</a>
                        </li>
                        <li class="mb-1">
                            <a href="#!" style="color: #555;">Facebook</a>
                        </li>
                        <li class="mb-1">
                            <a href="#!" style="color: #555;">Twitter</a>
                        </li>
                        <li>
                            <a href="#!" style="color: #555;">Safety</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-1 text-dark">opening hours</h5>
                    <table class="table" style="border-color: #666;">
                        <tbody>
                            <tr>
                                <td style="color: #555;">Mon - Fri:</td>
                                <td style="color: #555;">8am - 9pm</td>
                            </tr>
                            <tr>
                                <td style="color: #555;">Sat - Sun:</td>
                                <td style="color: #555;">8am - 1am</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: #555; color:#ffff;"> © 2020 Copyright: Muhammad Rudi</div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

    <script>
        // Hide loader after page loads
        window.addEventListener('load', function () {
            document.querySelector('.loader-container').style.display = 'none';
        });
    </script>
</body>

</html>