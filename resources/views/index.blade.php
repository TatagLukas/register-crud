<?php
$status = null; // Inisialisasi variabel status

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $phone = $_POST['phone'];
    $tanggal = $_POST['tanggal'];
    $layanan = $_POST['layanan'];

    $to = "pabbloz06@gmail.com";  // Ganti dengan email pemilik
    $subject = "Reservasi Baru di Beauty Salon";

    $message = "
    <html>
    <head><title>Reservasi Baru</title></head>
    <body>
        <h2>Reservasi Baru</h2>
        <p><strong>Nama:</strong> $nama</p>
        <p><strong>Nomor Telepon:</strong> $phone</p>
        <p><strong>Tanggal Reservasi:</strong> $tanggal</p>
        <p><strong>Layanan yang Dipilih:</strong> $layanan</p>
    </body>
    </html>";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: reservasi@beautysalon.co.id\r\n";

    // Kirim email
    if (mail($to, $subject, $message, $headers)) {
        $status = "success";
    } else {
        $status = "error";
    }
}
?>



<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Beauty SalonBeauty Salon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Salon Beauty Clone</title>

    <title>Beauty</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<?php if ($status === "success"): ?>
<script>
    Swal.fire({
        icon: 'success',
        title: 'Reservasi Berhasil!',
        text: 'Terima kasih, reservasi Anda telah kami terima.',
        confirmButtonColor: '#8E5A51'
    });
</script>
<?php elseif ($status === "error"): ?>
<script>
    Swal.fire({
        icon: 'error',
        title: 'Gagal Mengirim!',
        text: 'Maaf, terjadi kesalahan saat mengirim reservasi.',
        confirmButtonColor: '#8E5A51'
    });
</script>
<?php endif; ?>


<body>
    <style>
        body {
          font-family: 'Segoe UI', sans-serif;
          scroll-behavior: smooth;   
        }
      
        h2 {
          color: #8E5A51;
          font-weight: bold;
          margin-bottom: 20px;
        }
      
        .navbar-brand img {
          border-radius: 50%;
        }
      
        .carousel-item img {
          height: 500px;
          object-fit: cover;
        }
      
        footer a:hover {
          text-decoration: underline;
        }
      </style>
      
    <header class="bg-dark text-white text-center p-5">

        <h1>Beauty Salon</h1>
        <form class="container mt-4" style="max-width: 500px;" method="POST" action="{{ route('reservasi.simpan') }}">
            @csrf
        
        <p>Selamat datang di Beauty Salon, tempat perawatan kecantikan terbaik untuk Anda!</p>
        
        </select>
        

    </header>

    <nav class="navbar navbar-expand-lg bg-white shadow-sm px-5">
        <div class="container-fluid">
          <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="images/download (5).jpg" alt="Logo" height="60" class="me-2">
          </a>
        </div>
    </nav>
      
      <style>
    .carousel-inner img {
        height: 500px; /* Atur tinggi sesuai kebutuhan */
        object-fit: cover; /* Atau gunakan 'contain' jika ingin seluruh gambar terlihat */
        width: 100%;
    }

    /* Optional: Membuat carousel responsif di layar kecil */
    @media (max-width: 768px) {
        .carousel-inner img {
            height: 300px;
        }
    }
</style>


    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="images/9.jpg" class="d-block w-100" alt="Slide 4">
            </div>
            <div class="carousel-item active">
                <img src="images/5.jpg" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="images/6.jpg" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="images/7.jpg" class="d-block w-100" alt="Slide 3">
            </div>
            <div class="carousel-item">
                <img src="images/8.jpg" class="d-block w-100" alt="Slide 4">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="container my-5">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    
        <h2 class="animate__animated animate__fadeInUp">Layanan Kami:</h2>
    
        <p>
            Di Beauty Salon, kami menawarkan berbagai layanan perawatan kecantikan yang dirancang untuk memenuhi kebutuhan Anda.
            Setiap layanan dilakukan oleh profesional berpengalaman dengan produk berkualitas tinggi.
        </p>
        <p>Berikut adalah beberapa layanan yang kami tawarkan:</p>
    
        
            <div class="row text-center mt-4">
                <div class="col-md-4">
                    <div class="service-box">
                        <h4>Haircut</h4>
                        <p>
                            Potongan rambut profesional yang disesuaikan dengan gaya dan karakter Anda.
                            Dapatkan tampilan terbaik yang segar dan stylish setiap kali berkunjung.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <h4>Nail Treatment</h4>
                        <p>
                            Perawatan dan seni kuku yang elegan, mulai dari manicure, pedicure, hingga nail art.
                            Bersih, sehat, dan cantik untuk tangan dan kaki yang memesona.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <h4>Body Treatment</h4>
                        <p>
                            Relaksasi tubuh menyeluruh melalui layanan spa, pijat, dan body scrub.
                            Rasakan kenyamanan dan kesegaran yang menyeluruh di setiap sesi.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <style>
            .service-box {
                border: 2px solid #ccc;
                border-radius: 10px;
                padding: 20px;
                margin-bottom: 20px;
                background-color: #f9f9f9;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
        
            .service-box h4 {
                margin-bottom: 15px;
                font-size: 1.25rem;
                color: #333;
            }
        
            .service-box p {
                color: #666;
                font-size: 1rem;
            }
        </style>
        
            </div>
        
    </section>
    

    <section class="bg-light py-5 text-center">
        <h2>Reservasi Sekarang</h2>
        <form class="container mt-4" style="max-width: 500px;" method="POST" action="">
            <input type="text" name="nama" class="form-control mb-3" placeholder="Nama" required>
            <input type="tel" name="phone" class="form-control mb-3" placeholder="Nomor Telepon" required>
            <input type="date" name="tanggal" class="form-control mb-3" required>
            <select name="layanan" class="form-control mb-3" required>
                <option value="">-- Pilih Layanan --</option>
                <option value="Haircut">Haircut</option>
                <option value="Nail Art">Nail Art</option>
                <option value="Body Massage">Body Massage</option>
            </select>
            <button class="btn btn-dark w-100">Kirim Reservasi</button>
        </form>
    </section>
    
    <?php if ($status === "success"): ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Reservasi Berhasil!',
        text: 'Terima kasih, reservasi Anda telah kami terima.',
        confirmButtonColor: '#8E5A51'
    });
    </script>
    <?php elseif ($status === "error"): ?>
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Gagal Mengirim!',
        text: 'Maaf, terjadi kesalahan saat mengirim reservasi.',
        confirmButtonColor: '#8E5A51'
    });
    </script>
    <?php endif; ?>
    

        </form>
        
        <!-- Tambahkan pesan status di sini -->
        <?php if ($status === "success"): ?>
            <div class="alert alert-success mt-3" role="alert">
                Reservasi berhasil dikirim! Terima kasih atas pemesanan Anda.
            </div>
        <?php elseif ($status === "error"): ?>
            <div class="alert alert-danger mt-3" role="alert">
                Maaf, terjadi kesalahan saat mengirim reservasi. Silakan coba lagi nanti.
            </div>
        <?php endif; ?>
        

    </section>

    <footer style="background-color: #D1C6B6; color: #4A3B32; padding: 40px 20px; font-family: 'Segoe UI', sans-serif;">
        <div style="display: flex; flex-wrap: wrap; justify-content: space-between; max-width: 1200px; margin: auto;">
              <!-- Deskripsi Brand -->
          <div style="flex: 1 1 250px; margin-bottom: 20px;">
            <h2 style="color: #4A3B32;">Beauty Salon</h2>
            <p>Beauty Salon adalah tempat terbaik untuk perawatan modern dan elegan, menghadirkan suasana nyaman dengan pelayanan profesional.</p>
            <div style="margin-top: 10px;">
                <a href="#" style="color: #4A3B32; margin-right: 10px; font-size: 20px;"><i class="bi bi-facebook"></i></a>
                <a href="#" style="color: #4A3B32; margin-right: 10px; font-size: 20px;"><i class="bi bi-instagram"></i></a>
                <a href="#" style="color: #4A3B32; margin-right: 10px; font-size: 20px;"><i class="bi bi-whatsapp"></i></a>
                <a href="#" style="color: #4A3B32; margin-right: 10px; font-size: 20px;"><i class="bi bi-tiktok"></i></a>
                <a href="#" style="color: #4A3B32; margin-right: 10px; font-size: 20px;"><i class="bi bi-youtube"></i></a>
              </div>
              
          </div>
      
          <!-- Info Perusahaan -->
          <div style="flex: 1 1 150px; margin-bottom: 20px;">
            <h4 style="color: #4A3B32;">COMPANY</h4>
            <ul style="list-style: none; padding: 0;">
              <li><a href="#" style="color: #4A3B32; text-decoration: none;">Tentang Kami</a></li>
              <li><a href="#" style="color: #4A3B32; text-decoration: none;">Layanan</a></li>
              <li><a href="#" style="color: #4A3B32; text-decoration: none;">Galeri</a></li>
              <li><a href="#" style="color: #4A3B32; text-decoration: none;">Karier</a></li>
            </ul>
          </div>
      
          <!-- Kontak -->
          <div style="flex: 1 1 200px; margin-bottom: 20px;">
            <h4 style="color: #4A3B32;">SUPPORT</h4>
            <p>📍 Jl. Anggrek No.123, Jakarta Selatan</p>
            <p>📞 0812-3456-7890</p>
            <p>📧 info@beautysalon.co.id</p>
          </div>
        </div>

    <footer class="bg-dark text-white text-center p-3">
        <p>© 2025 Beauty Salon | All rights reserved.</p>
    </footer>

    
</body>

</html>