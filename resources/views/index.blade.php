<?php
$status = null; // Inisialisasi variabel status

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $phone = $_POST['phone'];
    $tanggal = $_POST['tanggal'];
    $layanan = $_POST['layanan'];

    // Simpan data ke file
    $reservasi = [
        'nama' => $nama,
        'phone' => $phone,
        'tanggal' => $tanggal,
        'layanan' => $layanan,
        'waktu_submit' => date('Y-m-d H:i:s'),
    ];

    $file = 'reservations.json';
    $data = [];

    if (file_exists($file)) {
        $data = json_decode(file_get_contents($file), true);
    }

    $data[] = $reservasi;

    // Simpan ke file JSON
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

    // Email setup
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
        header("Location: success.php");
        exit;
    } else {
        $status = "error";
    }
}
?>




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
        height: 500px; 
        object-fit: cover; 
        width: 100%;
    }

    
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
    
       
    
        <!DOCTYPE html>
        <html lang="id">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Layanan Kami</title>
          <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Open+Sans&display=swap" rel="stylesheet">
          <style>
            * {
              box-sizing: border-box;
            }
        
            body {
              font-family: 'Open Sans', sans-serif;
              background: #fff8f6;
              padding: 40px 20px;
              margin: 0;
            }
        
            .section-title {
              font-family: 'Playfair Display', serif;
              font-size: 36px;
              text-align: center;
              color: #8b4c39;
              margin-bottom: 10px;
            }
        
            .section-description {
              text-align: center;
              font-size: 16px;
              color: #444;
              max-width: 800px;
              margin: 0 auto 40px;
              line-height: 1.8;
            }
        
            .services-container {
              display: grid;
              grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
              gap: 30px;
              max-width: 1100px;
              margin: 0 auto;
            }
        
            .service-card {
              background: white;
              border-radius: 16px;
              padding: 30px 20px;
              text-align: center;
              box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
              transition: all 0.3s ease;
              position: relative;
              overflow: hidden;
            }
        
            .service-card:hover {
              transform: translateY(-8px);
              box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
            }
        
            .service-icon {
              font-size: 40px;
              margin-bottom: 15px;
              transition: transform 0.3s ease;
            }
        
            .service-card:hover .service-icon {
              transform: scale(1.2) rotate(5deg);
            }
        
            .service-title {
              font-family: 'Playfair Display', serif;
              font-size: 22px;
              margin-bottom: 10px;
              color: #333;
            }
        
            .service-description {
              font-size: 15px;
              color: #555;
              line-height: 1.6;
            }
        
            @media (max-width: 500px) {
              .section-title {
                font-size: 28px;
              }
        
              .section-description {
                font-size: 14px;
              }
            }
          </style>
        </head>
        <body>
        
          <h2 class="section-title">✨ Layanan Kami ✨</h2>
          <p class="section-description">
            Temukan transformasi terbaik untuk diri Anda bersama layanan perawatan kecantikan premium dari Beauty Salon.
            Dirancang khusus untuk memenuhi kebutuhan dan gaya hidup Anda, setiap layanan kami ditangani oleh tenaga profesional berpengalaman dan menggunakan produk berkualitas tinggi.
            💆‍♀️ Nikmati pengalaman yang memanjakan dan hasil yang memukau — karena Anda layak tampil sempurna setiap hari.
          </p>
        
          <div class="services-container">
            <div class="service-card">
              <div class="service-icon">💇‍♀️</div>
              <div class="service-title">Haircut</div>
              <div class="service-description">
                Potongan rambut profesional sesuai gaya dan karakter Anda. Dapatkan tampilan segar dan stylish setiap kali berkunjung.
              </div>
            </div>
        
            <div class="service-card">
              <div class="service-icon">💅</div>
              <div class="service-title">Nail Treatment</div>
              <div class="service-description">
                Perawatan kuku elegan dari manicure, pedicure hingga nail art. Bersih, sehat, dan cantik untuk tangan dan kaki Anda.
              </div>
            </div>
        
            <div class="service-card">
              <div class="service-icon">🧖‍♀️</div>
              <div class="service-title">Body Treatment</div>
              <div class="service-description">
                Relaksasi menyeluruh melalui spa, pijat, dan scrub. Rasakan kenyamanan dan kesegaran maksimal setiap sesi.
              </div>
            </div>
          </div>
        
        </body>
        </html>
        
    

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4" style="color: #8E5A51;">Reservasi Sekarang</h2>
                <form action="{{ route('reservations.store') }}" method="POST" id="reservationForm">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="name" id="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Nomor Telepon</label>
                        <input type="number" name="number" id="telepon" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Reservasi</label>
                        <input type="date" name="reservation_date" id="tanggal" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="layanan" class="form-label">Pilih Layanan</label>
                        <select name="service" id="layanan" class="form-select" required>
                            <option value="">-- Pilih Layanan --</option>
                            <option value="Hair Cut">Hair Cut</option>
                            <option value="Nail Treatment">Nail Treatment</option>
                            <option value="Body Treatment">Body Treatment</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark w-100">Kirim Reservasi</button>
                    <form action="reservasi.php" method="POST" id="reservationForm">

                </form>
            </div>
        </div>
    </div>
    
    
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
                <!-- Media Sosial -->
                <div style="margin-top: 10px; display: flex; gap: 15px; align-items: center;">
                    <a href="https://www.instagram.com/moir.salon?igsh=MWJyeWd3czcwcTgzcg==" target="_blank" style="color: #4A3B32; text-decoration: none; font-size: 18px; display: flex; align-items: center; gap: 5px;">
                        <i class="bi bi-instagram" style="font-size: 20px;"></i> moir.salon
                    </a>
                    <a href="https://www.tiktok.com/@moir.salon" target="_blank" style="color: #4A3B32; text-decoration: none; font-size: 18px; display: flex; align-items: center; gap: 5px;">
                        <i class="bi bi-tiktok" style="font-size: 20px;"></i> moir.salon
                    </a>
                    <a href="https://www.youtube.com/@Moirsalon/shorts" target="_blank" style="color: #4A3B32; text-decoration: none; font-size: 18px; display: flex; align-items: center; gap: 5px;">
                        <i class="bi bi-youtube" style="font-size: 20px;"></i> Moir Salon
                    </a>
                </div>
                
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
        </div>
    </footer>


<script>
    function formatDate(date) {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
    }

    document.addEventListener("DOMContentLoaded", function () {
        const tanggalInput = document.getElementById('tanggal');
        
        const today = new Date(); // Hari ini
        const hPlus7 = new Date(); // Hari ini + 7
        hPlus7.setDate(hPlus7.getDate() + 7);

        tanggalInput.min = formatDate(today);
        tanggalInput.max = formatDate(hPlus7);
    });
</script>



</body>


</html>