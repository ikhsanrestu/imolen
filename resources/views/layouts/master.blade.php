<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Human Capital Service - PT. Len </title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../../assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="../../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../../assets/css/app.css">
    <link rel="shortcut icon" href="../../assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        @include('layouts.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3> @yield('title')</h3>
            </div>
            <div class="page-content">
                @yield('content')
            </div>

        </div>
    </div>
    <script src="../../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../../assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="../../assets/js/pages/dashboard.js"></script>

    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    
    <script src="../../assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    {{-- <script>
        // Handling SweetAlert2 flash messages
        @if(session('success'))
          Swal.fire({
            icon: 'success',
            title: 'BERHASIL!',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 4000
          });
        @elseif(session('error'))
          Swal.fire({
            icon: 'error',
            title: 'GAGAL!',
            text: '{{ session('error') }}',
            showConfirmButton: false,
            timer: 4000
          });
        @endif
      
        // Handle logout confirmation
        document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('logoutLink').addEventListener('click', function(event) {
          event.preventDefault(); // Prevent the default link behavior
          Swal.fire({
            title: 'Konfirmasi Logout',
            text: "Anda yakin ingin keluar dari akun ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, logout',
            cancelButtonText: 'Batal'
          }).then((result) => {
            if (result.isConfirmed) {
              // Redirect to logout route
              window.location.href = '{{ route("actionLogout") }}';
            }
          });
        });
      });
      </script> --}}
      
</body>

</html>