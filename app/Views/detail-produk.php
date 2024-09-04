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

        .product-gallery {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .main-image {
            width: 100%;
            max-width: 600px;
            height: 400px;
            /* Ukuran tinggi tetap */
            object-fit: cover;
            /* Menjaga proporsi gambar */
            margin-bottom: 10px;
            border-radius: 12px;
        }

        .thumbnails {
            display: flex;
            gap: 20px;
        }

        .thumbnail {
            width: 80px;
            height: 80px;
            object-fit: cover;
            cursor: pointer;
            border: 2px solid transparent;
            border-radius: 8px;
        }

        .thumbnail.active {
            border-color: #009EF2;
        }

        .product-description {
            padding: 20px;
            background-color: #F5FAFF;
            border-radius: 12px;
        }

        p,
        ul {
            font-size: 18px;
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

            h1 {
                font-size: 28px;
            }

            .main-image {
                max-height: 220px;
            }

            .thumbnails {
                gap: 8px;
            }

            .thumbnail {
                width: 70px;
                height: 55px;
            }

            .product-description {
                padding: 18px;
            }

            p,
            ul {
                font-size: 18px;
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

            .main-image {
                max-height: 240px;
            }

            .thumbnails {
                gap: 10px;
                margin-bottom: 12px;
            }

            .thumbnail {
                width: 75px;
                height: 60px;
            }

            .product-description {
                padding: 16px;
            }

            p,
            ul {
                font-size: 16px;
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

            .main-image {
                max-height: 220px;
            }

            .thumbnails {
                gap: 8px;
                margin-bottom: 12px;
            }

            .thumbnail {
                width: 70px;
                height: 55px;
            }

            .product-description {
                padding: 14px;
            }

            p,
            ul {
                font-size: 14px;
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

        /* Mobile S 320px */
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

            .main-image {
                max-height: 180px;
            }

            .thumbnails {
                gap: 6px;
                margin-bottom: 12px;
            }

            .thumbnail {
                width: 65px;
                height: 50px;
            }

            .product-description {
                padding: 12px;
            }

            p,
            ul {
                font-size: 12px;
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
        <h1>Detail Produk</h1>
    </div>

    <!-- Konten Utama -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6">
                <div class="product-gallery">
                    <!-- Main Image -->
                    <img id="mainImage" src="IMG/S1.jpg" class="main-image" alt="Main Product Image">

                    <!-- Thumbnails -->
                    <div class="thumbnails">
                        <img src="IMG/S2.jpg" class="thumbnail active" alt="Thumbnail 1"
                            onclick="changeImage('IMG/S2.jpg')">
                        <img src="IMG/S3.jpg" class="thumbnail" alt="Thumbnail 2" onclick="changeImage('IMG/S3.jpg')">
                        <img src="IMG/S5.jpg" class="thumbnail" alt="Thumbnail 3" onclick="changeImage('IMG/S5.jpg')">
                        <img src="IMG/S4.jpg" class="thumbnail" alt="Thumbnail 4" onclick="changeImage('IMG/S4.jpg')">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="product-description">
                    <h2>SonicPulse Elite</h2>
                    <!-- Deskripsi -->
                    <p><strong>Deskripsi:</strong></p>
                    <p style="color: #555;">SonicPulse Elite adalah headset premium yang dirancang untuk audiophile
                        sejati. Dengan teknologi
                        noise-canceling canggih dan kualitas audio resolusi tinggi, headset ini menawarkan pengalaman
                        mendengarkan yang tak tertandingi, baik untuk mendengarkan musik, menonton film, maupun bekerja.
                    </p>

                    <!-- Keunggulan -->
                    <p><strong>Keunggulan:</strong></p>
                    <ul style="color: #555;">
                        <li>Noise-Canceling Canggih: Mengurangi kebisingan sekitar secara efektif, memungkinkan Anda
                            fokus
                            pada audio tanpa gangguan.</li>
                        <li>Audio Resolusi Tinggi: Menyediakan kejernihan suara yang luar biasa dan detail yang tajam.
                        </li>
                        <li>Desain Ergonomis: Kenyamanan yang optimal dengan bantalan telinga yang lembut dan headband
                            yang
                            dapat disesuaikan.</li>
                    </ul>

                    <!-- Spesifikasi -->
                    <p><strong>Spesifikasi</strong></p>
                    <ul style="color: #555;">
                        <li>Driver: 40mm neodymium</li>
                        <li>Frekuensi Respon: 20Hz - 20kHz</li>
                        <li>Konektivitas: Bluetooth 5.0 / Kabel 3.5mm</li>
                        <li>Noise-Canceling: Ya, aktif</li>
                        <li>Baterai: Hingga 30 jam pemutaran</li>
                        <li>Fitur Tambahan: Kontrol sentuh, mikrofon built-in, mode transparansi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Garis Pemisah -->
    <hr class="my-4">

    <!-- Related Produk Section -->
    <div class="related-products text-center">
        <h3 style="color: #009EF2;">Produk Terkait</h3>
    </div>

    <!-- card Produk -->
    <div class="container mt-4 mb-5">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4">
                <a href="detail-produk" style="text-decoration: none; color: #009EF2;">
                    <div class="card">
                        <img src="IMG/S3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title text-center">Card title 1</h3>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <a href="detail-produk" style="text-decoration: none; color: #009EF2;">
                    <div class="card">
                        <img src="IMG/S3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title text-center">Card title 1</h3>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <a href="detail-produk" style="text-decoration: none; color: #009EF2;">
                    <div class="card">
                        <img src="IMG/S3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title text-center">Card title 1</h3>
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

    <!-- Script -->
    <!-- Dropdown Nav -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

    <!-- Change Imgae -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9gybV5xjU8bhFSl8t1gVm1KgiJT7ljI6Gx7JRc73sarT05Pyy6K"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeBkoS1Kr5yzHIr6qI8IXIRyYWIQwWtn+Y7EWwCQ73SIW3eCufzzxcJ08BJN1M"
        crossorigin="anonymous"></script>

    <script>
        function changeImage(imageSrc) {
            const mainImage = document.getElementById('mainImage');
            mainImage.src = imageSrc;

            const thumbnails = document.querySelectorAll('.thumbnail');
            thumbnails.forEach(thumbnail => {
                thumbnail.classList.remove('active');
            });

            const activeThumbnail = document.querySelector(`.thumbnail[src="${imageSrc}"]`);
            activeThumbnail.classList.add('active');
        }
    </script>

    <script>
        // Hide loader after page loads
        window.addEventListener('load', function () {
            document.querySelector('.loader-container').style.display = 'none';
        });
    </script>
</body>

</html>