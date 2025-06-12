<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Data Karyawan</title>
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
            /* Diperluas untuk mengakomodasi form horizontal */
            max-width: 800px; /* Lebar maksimal diperbesar */
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

        /* Menggunakan form-group default Bootstrap, label-col-form-label & col-sm-X untuk horizontal */
        .form-group.row { /* Pastikan ini adalah form-group.row untuk styling horizontal */
            margin-bottom: 1.5rem;
            align-items: center; /* Menyelaraskan label dan input secara vertikal */
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

        /* Styling khusus untuk checkbox (tidak digunakan di form ini, tapi tetap ada dari CSS sebelumnya) */
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
            Tambah Data Karyawan
        </div>
        <div class="card-body">
            <form action="/karyawan/store" method="post">
                {{ csrf_field() }}

                <!-- Kode Pegawai -->
                <div class="form-group row">
                    <label for="kodepegawai" class="col-sm-4 col-form-label">Kode Pegawai</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="kodepegawai" name="kodepegawai" required="required" placeholder="Masukkan Kode Pegawai">
                    </div>
                </div>

                <!-- Nama Lengkap -->
                <div class="form-group row">
                    <label for="namalengkap" class="col-sm-4 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="namalengkap" name="namalengkap" required="required" placeholder="Masukkan Nama Lengkap">
                    </div>
                </div>

                <!-- Divisi -->
                <div class="form-group row">
                    <label for="divisi" class="col-sm-4 col-form-label">Divisi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="divisi" name="divisi" required="required" placeholder="Masukkan Divisi">
                    </div>
                </div>

                <!-- Departemen -->
                <div class="form-group row">
                    <label for="departemen" class="col-sm-4 col-form-label">Departemen</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="departemen" name="departemen" required="required" placeholder="Masukkan Departemen">
                    </div>
                </div>

                <!-- Tombol Simpan Data -->
                <div class="form-group row">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
                    </div>
                </div>
            </form>

            <a href="/karyawan" class="btn-link">Kembali</a> <!-- Perbaiki link kembali ke /karyawan -->
        </div>
    </div>

</body>

</html>
