<!DOCTYPE html>
<html lang="en">

<head>
    <title>Abrorus Shobah : 5026231145</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        xintegrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
        }

        .jumbotron {
            background: linear-gradient(135deg, rgb(50, 0, 80), rgb(0, 0, 0));
            color: white;
            padding: 3rem 2rem;
            margin-bottom: 0;
            border-radius: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 150px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .jumbotron h1 {
            font-size: 2.8rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .navbar {
            /* Warna navbar lebih terang dan sesuai */
            background-color: rgb(52, 59, 94) !important; /* Nuansa biru-ungu */
            margin-top: -2rem; /* Mengangkat navbar sedikit ke atas untuk efek tumpang tindih dengan jumbotron */
            margin-left: auto; /* Pusatkan navbar */
            margin-right: auto; /* Pusatkan navbar */
            max-width: 67%; /* Tidak memanjang dari ujung ke ujung */
            border-radius: 0.75rem; /* Sudut membulat */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25); /* Bayangan yang lebih menonjol */
            z-index: 1000; /* Pastikan navbar berada di atas */
            position: relative; /* Diperlukan untuk z-index agar bekerja */
            padding-left: 1.5rem; /* Tambahkan padding agar tidak terlalu mepet */
            padding-right: 1.5rem; /* Tambahkan padding agar tidak terlalu mepet */
        }

        .navbar-nav .nav-link {
            color: #ffffff !important; /* Warna teks putih */
            padding: 0.8rem 1.2rem;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
            border-radius: 0.3rem;
            margin-right: 0.5rem;
            position: relative;
            overflow: hidden;
        }

        .navbar-nav .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1); /* Sedikit transparan saat hover */
            color: #ffffff !important;
            transform: translateY(-2px);
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: #00bcd4; /* Warna underline yang serasi (biru cyan) */
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease-out;
        }

        .navbar-nav .nav-link:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }


        .container {
            margin-top: 2rem;
            padding-bottom: 2rem;
            background-color: #ffffff;
            border-radius: 0.75rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            padding: 2rem;
        }

        /* Responsive adjustments for smaller screens */
        @media (max-width: 576px) {
            .jumbotron h1 {
                font-size: 2rem;
            }
            .navbar {
                max-width: 95%; /* Lebih lebar di mobile tapi tetap ada margin */
                margin-top: -1.5rem;
            }
            .navbar-nav {
                flex-direction: column;
            }
            .navbar-nav .nav-item {
                width: 100%;
            }
            .navbar-nav .nav-link {
                text-align: center;
                margin-right: 0;
                margin-bottom: 0.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="jumbotron text-center" id="jumbotronDynamic">
        <h1>5026231145 : Abrorus Shobah</h1>
    </div>

    <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/frontend"><i class="fas fa-desktop mr-2"></i>All Front End</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pegawai"><i class="fas fa-users mr-2"></i>Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mouse"><i class="fas fa-mouse-pointer mr-2"></i>Tugas CRUD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/eas"><i class="fas fa-book mr-2"></i>EAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pagecounter"><i class="fas fa-calculator mr-2"></i>Latihan 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/karyawan"><i class="fas fa-pencil-alt mr-2"></i>Latihan 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/karyawan"><i class="fas fa-file-alt mr-2"></i>Latihan 3</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
