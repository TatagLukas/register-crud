<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Salon</title>
    <link rel="stylesheet" href="styles.css">
    
    <style>
        body {
            
  background-color: #fff5e6;
}
    </style>
</head>
<body>
    <header>
        <h1>Beauty Salon</h1>
        <nav>
            <ul>
                <p>✨ Selamat datang di Beauty Salon 
                    <br>– tempat di mana keindahan dan kenyamanan berpadu sempurna.</br> 
                    <br>Kami menghadirkan beragam layanan premium mulai dari perawatan rambut, kuku, hingga tubuh, dengan sentuhan profesional dari stylist berpengalaman. 
                    Dengan penggunaan produk berkualitas tinggi dan suasana salon yang hangat, kami berkomitmen untuk membuat Anda merasa istimewa di setiap kunjungan. 
                    Saatnya tampil lebih percaya diri dan bersinar dengan versi terbaik dari diri Anda!</br> 
                </p>

            </ul>
            <section class="slider">
                <div class="slides">
                  <img src="c:\Users\Lenovo\Downloads\download (2).jpeg" class="slide" style="display: block;">
                  <img src="https://source.unsplash.com/1600x600/?beauty,nails" class="slide">
                  <img src="https://source.unsplash.com/1600x600/?spa,relax" class="slide">
                </div>
              </section>
              
        </nav>
    </header>
    

    <section id="services" class="services">
        <h2>Layanan Kami</h2>
        <div class="service-list">
            <div class="service-item">
                <h3>Hair Cut</h3>
                <p>Model rambut terbaik sesuai keinginan Anda.

                </p>
            </div>
            <div class="service-item">
                <h3>Nail Treatment</h3>
                <p>Model dan perawatan kuku yang nyaman sesuai keingingnan anda.</p>
            </div>
            <div class="service-item">
                <h3>Body Treatment</h3>
                <p>Perawatan tangan dan kaki yang nyaman.</p>
            </div>
        </div>
    </section>

    <section id="booking" class="booking">

    <br><br><h2>Registrasi Booking</h2>
        <form>
            <label for="name">Nama:</label>
            <input type="text" id="name" required>
            
            <label for="date"><br><br>Tanggal:</br></br></label>
            <input type="date" id="date" required>
            
            <label for="service"><br><br>Layanan:</br></br></label>
            <select id="service">
                <option>Potong Rambut</option>
                <option>Facial</option>
                <option>Manicure & Pedicure</option>
            </select>
            
            <button type="submit">Kirim</button>
        </form>
    </section>

    

    <footer id="contact">
        <p>&copy; 2025 Salon Cantik | Kontak: 0812-3456-7890</p>
    </footer>
</body>
</html>

