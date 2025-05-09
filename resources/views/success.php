<!-- success.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Reservasi Berhasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body style="background-color: #F9F9F9; font-family: 'Segoe UI', sans-serif;">
    <div class="container text-center mt-5">
        <h1 class="text-success mb-4">Reservasi Berhasil!</h1>
        <p class="lead">Terima kasih telah melakukan reservasi di <strong>Beauty Salon</strong>.</p>
        <p>Kami akan segera menghubungi Anda untuk konfirmasi.</p>
        <a href="index.php" class="btn btn-dark mt-4">Kembali ke Beranda</a>
    </div>

    <script>
        Swal.fire({
            icon: 'success',
            title: 'Reservasi Berhasil!',
            text: 'Kami telah menerima reservasi Anda.',
            confirmButtonColor: '#8E5A51'
        });
    </script>
</body>
</html>
