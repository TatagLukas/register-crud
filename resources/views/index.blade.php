<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Salon</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Beauty Salon</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Layanan</a></li>
                <li><a href="#booking">Booking</a></li>
                <li><a href="#register">Registrasi</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="home" class="hero">
        <h2>Best Nails and Hair For Best Moment</h2>
        <a href="#booking" class="btn">Pesan Sekarang</a>
    </section>

    <section id="services" class="services">
        <h2>Layanan Kami</h2>
        <div class="service-list">
            <div class="service-item">
                <h3>Hair Treatment</h3>
                <p>Model rambut terbaik sesuai keinginan Anda.</p>
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

    <section id="register" class="register">
        <h2>Registrasi Akun</h2>
        <form>
            <label for="fullname">Nama Lengkap:</label>
            <input type="text" id="fullname" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" required>
            
            <button type="submit">Daftar</button>
        </form>
    </section>

    <footer id="contact">
        <p>&copy; 2025 Salon Cantik | Kontak: 0812-3456-7890</p>
    </footer>
</body>
</html>