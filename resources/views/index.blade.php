<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beauty Salon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #f3e7e9, #e3eeff);
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #D2B48C;
            color: #333;
            padding: 40px 20px;
            text-align: center;
        }

        header h1 {
            font-size: 3.5rem;
            margin-bottom: 10px;
            font-weight: bold;
        }

        header p {
            font-size: 1.25rem;
            max-width: 900px;
            margin: auto;
        }

        .carousel {
            margin-top: 30px;
        }

        .services {
            background-color: #fff;
            padding: 60px 20px;
            text-align: center;
        }

        .services h2 {
            font-size: 2.5rem;
            margin-bottom: 40px;
        }

        .service-item {
            background-color: #f8f8f8;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .service-item:hover {
            transform: translateY(-5px);
        }

        .booking {
            background-color: #fff3e6;
            padding: 60px 20px;
            text-align: center;
        }

        .booking form {
            max-width: 500px;
            margin: auto;
            text-align: left;
        }

        .booking label {
            font-weight: 600;
            display: block;
            margin-top: 20px;
        }

        .booking input,
        .booking select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-top: 5px;
        }

        .booking button {
            margin-top: 30px;
            padding: 10px 30px;
            background-color: #D2B48C;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
        }

        footer {
            background-color: #D2B48C;
            color: black;
            text-align: center;
            padding: 20px;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Beauty Salon</h1>
        <p>✨ Selamat datang di Beauty Salon – tempat di mana keindahan dan kenyamanan berpadu sempurna.<br>
        Kami menghadirkan layanan premium mulai dari perawatan rambut, kuku, hingga tubuh, dengan sentuhan profesional stylist berpengalaman. Produk berkualitas tinggi & suasana hangat siap membuat Anda bersinar!</p>
    </header>

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
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

    <section class="services">
        <h2>Layanan Kami</h2>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-item">
                        <h4>Hair Cut</h4>
                        <p>Model rambut terbaik sesuai keinginan Anda.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <h4>Nail Treatment</h4>
                        <p>Perawatan dan seni kuku elegan sesuai gaya Anda.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <h4>Body Treatment</h4>
                        <p>Relaksasi dan kenyamanan untuk tubuh Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="booking">
        <h2>Reservasi Booking</h2>
        <form>
            <label for="name">Nama:</label>
            <input type="text" id="name" required>

            <label for="date">Tanggal:</label>
            <input type="date" id="date" required>

            <label for="service">Layanan:</label>
            <select id="service">
                <option>Hair Cut</option>
                <option>Nail Art</option>
                <option>Body Treatment</option>
            </select>

            <button type="submit">Kirim</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2025 Beauty Salon | Kontak: 0812-3456-7890</p>
    </footer>

    <script>
        const dateInput = document.getElementById('date');
        const today = new Date();
        const formatDate = (date) => {
            const yyyy = date.getFullYear();
            const mm = String(date.getMonth() + 1).padStart(2, '0');
            const dd = String(date.getDate()).padStart(2, '0');
            return `${yyyy}-${mm}-${dd}`;
        };
        const minDate = formatDate(today);
        const hPlus7 = new Date();
        hPlus7.setDate(today.getDate() + 7);
        const maxDate = formatDate(hPlus7);
        dateInput.min = minDate;
        dateInput.max = maxDate;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


