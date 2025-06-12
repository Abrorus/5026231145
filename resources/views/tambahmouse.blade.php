<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Data Mouse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .card {
            border: none;
            border-radius: 0.75rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            max-width: 500px;
            width: 100%;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            border-radius: 0.75rem 0.75rem 0 0 !important;
            padding: 1.5rem;
            font-size: 1.5rem;
            font-weight: 600;
            text-align: center;
        }

        .card-body {
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-control {
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
            border: 1px solid #ced4da;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 0.5rem;
            padding: 0.75rem 1.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-link {
            display: block;
            text-align: center;
            margin-top: 1.5rem;
            font-size: 1rem;
            color: #007bff;
        }

        .btn-link:hover {
            text-decoration: none;
            color: #0056b3;
        }

        
        .form-check-input {
            margin-top: 0.3rem;
            margin-left: 0;
            width: 1.25em;
            height: 1.25em;
        }
        .form-check-label {
            padding-left: 0.5rem;
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-header">
            Tambah Data Mouse
        </div>
        <div class="card-body">
            <form action="/mouse/store" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="merkmouse">Merk Mouse</label>
                    <input type="text" class="form-control" id="merkmouse" name="merkmouse" required="required" placeholder="Masukkan Merk Mouse">
                </div>

                <div class="form-group">
                    <label for="hargamouse">Harga Mouse</label>
                    <input type="number" class="form-control" id="hargamouse" name="hargamouse" required="required" placeholder="Masukkan Harga Mouse">
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="tersedia" name="tersedia" value="1">
                    <label class="form-check-label" for="tersedia">Tersedia</label>
                </div>

                <div class="form-group">
                    <label for="berat">Berat (Kg)</label>
                    <input type="number" step="0.01" class="form-control" id="berat" name="berat" required="required" placeholder="Masukkan Berat Mouse (cth: 0.063)">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
            </form>

            <a href="/mouse" class="btn-link">Kembali</a>
        </div>
    </div>

</body>

</html>
