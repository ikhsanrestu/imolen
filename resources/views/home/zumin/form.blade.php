<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Absen Zumba Senin</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for PT Len Industri Theme */
        body {
            background-color: #f4f4f9;
            font-family: 'Arial', sans-serif;
        }

        .card {
            border: none;
            border-radius: 8px;
        }

        .card-header {
            background-color: #003366; /* Warna biru khas PT Len Industri */
            color: #ffffff;
            font-weight: bold;
        }

        .card-body {
            background-color: #ffffff;
            border-top: 4px solid #003366;
            padding: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #333333;
        }

        .form-control {
            border: 1px solid #003366;
            border-radius: 4px;
            transition: box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: #00509e;
            box-shadow: 0 0 6px rgba(0, 80, 158, 0.6);
        }

        .btn-primary {
            background-color: #00509e;
            border-color: #00509e;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #003366;
            border-color: #003366;
        }

        .btn-secondary {
            background-color: #cccccc;
            border-color: #cccccc;
            color: #333333;
            transition: background-color 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #999999;
            border-color: #999999;
        }

        .form-check-input:checked {
            background-color: #00509e;
            border-color: #00509e;
        }

        .text-center button {
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header text-center">
                        <h4>Form Absen Zumba Senin</h4>
                    </div>
                    <div class="card-body">
                        <form action="/zumin/simpan" method="POST">
                            <!-- CSRF Token (Laravel specific) -->
                            @csrf
                            <!-- ID Presensi -->
                            <div class="mb-3">
                                <label for="id_presensi" class="form-label">ID Presensi</label>
                                <input type="text" class="form-control" id="id_presensi" name="id_presensi" placeholder="Masukkan ID Presensi" required>
                            </div>

                            <!-- Nama -->
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
                            </div>

                            <!-- Tanggal -->
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                            </div>

                            <!-- Presensi -->
                            <input type="hidden" name="presensi" value="Tidak Hadir"> <!-- Default value -->
                            <div class="form-check container pr-24">
                                <input class="form-check-input" type="checkbox" id="presensi" name="presensi" value="Hadir">
                                <label class="form-check-label pr-10" for="presensi">
                                    Hadir
                                </label>
                            </div>

                            <!-- Tombol Submit -->
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
