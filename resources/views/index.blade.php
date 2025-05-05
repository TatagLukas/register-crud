<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Salon</title>
    <link rel="stylesheet" href="styles.css">
    
    <style>
        body {
            
  background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #F5F5DC;
            color: white;
            padding: 20px;
            text-align: center;
        }
        
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        
        .services {
            background-color: #fff;
            padding: 20px;
            text-align: center;
        }
        
        .service-list {
            display: flex;
            justify-content: space-around;
        }
        
        .service-item {
            background-color: #f8f8f8;
            border-radius: 5px;
            padding: 20px;
            width: 30%;
        }
        
        .booking {
            background-color: #fff3e6;
            padding: 20px;
            text-align: center;
        }
        
        footer {
            background-color: ##F5F5DC;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        .slider img {
          width: 100%;
          height: auto; /* Maintain aspect ratio */
      }

      .slider {
          position: relative; /* Position relative for absolute positioning of slides */
      }

      .slides {
          display: flex; /* Use flexbox for horizontal alignment */
          transition: transform 1s ease-in-out; /* Smooth transition */
      }

      .slide {
          min-width: 100%; /* Each slide takes full width */
          opacity: 0; /* Hide all slides initially */
          transition: opacity 1s ease-in-out; /* Smooth fade-in effect */
      }

      .slide.active {
          opacity: 1; /* Show active slide */
      }

    </style>
    <style>
    body {
        background-color:#f0f0f0 ;
    }
    header h1{
        font-size :50px ;
    }
    header p{
        font-size :30px ;
    }
    section h2{
        font-size :40px ;
    }
    section p{
        font-size :25px ;
    }
    footer p{
        font-size :20px ;
    }
    
    form label,

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
                    <img src="{{ asset('images/5.jpg') }}">
                    <img src="{{ asset('images/6.jpg') }}">
                    <img src="{{ asset('images/7.jpg') }}">
                    <img src="{{ asset('images/8.jpg') }}">
                </div>
              </section>
              
              <style>
                .slider {
                    width: 100%;
                    height: auto;
                    margin: auto;
                    overflow: hidden;
                    position: relative;
                }
                
                .slides {
                    display: flex;
                    width: 400%; /* 4 gambar */
                    animation: slide 40s infinite;
                }
                
                .slides img {
                    width: 100%;
                    height: auto;
                }
                
                @keyframes slide {
                    0% { transform: translateX(0); }
                    25% { transform: translateX(-100%); }
                    50% { transform: translateX(-200%); }
                    75% { transform: translateX(-300%); }
                    100% { transform: translateX(0); }
                }
                </style>
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
    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll('.slide');
      
        function showSlide(index) {
          slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === index) slide.classList.add('active');
          });
        }
      
        function nextSlide() {
          currentIndex = (currentIndex + 1) % slides.length;
          showSlide(currentIndex);
        }
      
        showSlide(currentIndex);
        setInterval(nextSlide, 3000); // Ganti slide tiap 3 detik
      </script>
      
</body>
</html>

