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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f2f5;
        }

        .jumbotron {
            background: linear-gradient(135deg, #494e69, #a85969); \
            color: white;
            padding: 3rem 2rem; /* More padding */
            margin-bottom: 0; /* Remove default margin */
            border-radius: 0; /* Ensure no unwanted border-radius */
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 150px; /* Increased height */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        .jumbotron h1 {
            font-size: 2.8rem; /* Larger font size */
            font-weight: 700; /* Bold text */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Text shadow for depth */
        }

        .navbar {
            background-color: #343a40 !important; /* Darker navbar */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        .navbar-nav .nav-link {
            color: #ffffff !important; /* White text for links */
            padding: 0.8rem 1.2rem; /* More generous padding */
            transition: background-color 0.3s ease; /* Smooth hover effect */
            border-radius: 0.3rem; /* Slightly rounded links */
            margin-right: 0.5rem; /* Space between links */
        }

        .navbar-nav .nav-link:hover {
            background-color: #495057; /* Darker on hover */
            color: #ffffff !important;
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
            .navbar-nav {
                flex-direction: column; /* Stack nav items on small screens */
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
    <div class="jumbotron text-center">
        <h1>5026231145 : Abrorus Shobah</h1>
    </div>

    <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto"> <!-- Centering nav links -->
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-desktop mr-2"></i>All Front End</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pegawai"><i class="fas fa-users mr-2"></i>Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mouse"><i class="fas fa-mouse-pointer mr-2"></i>Mouse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-tasks mr-2"></i>Tugas CRUD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-book mr-2"></i>EAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-calculator mr-2"></i>Latihan 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-pencil-alt mr-2"></i>Latihan 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-file-alt mr-2"></i>Latihan 3</a>
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
