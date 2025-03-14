<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Form Registrasi</title>
        <style>
            body {
                font-family:Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-image: url(https://i.pinimg.com/736x/18/ec/dc/18ecdc8ddf515ef93d382aa46c74cd64.jpg);
                backdrop-filter: blur(2px);
            }

            form {
                background: wheat;
                padding:100px;
                border-radius: 8px;
                box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); 
            }

            label, input {
                display: block;
                margin-bottom:10px;
            }

            button {
                background:burlywood;
                color: whitesmoke;
                padding: 20px;
                border: none;
                cursor: pointer;
                width: 100%;
                border-radius: 8px;
                font-size: 25px;
            }
            </style>
    </head>
    <body>
        <form action="#" method="POST">
            <h2>REGRISTASI SALON</h2>
            <label for="name">Nama Lengkap:</label>
            <input type="text" id="name" name="name" required>

            <label for="number">Nomor Handphone:</label>
            <input type="tel" id="number" name="number" required>

            <label for="name">Email:</label>
            <input type="text" id="name" name="name" required>

            <label for="birthdate">Tanggal Booking:</label>
            <input type="date" id="birthdate" name="birthdate" required>

            <label for="name">Alamat:</label>
            <input type="text" id="text" name="text" required>

            <label for="hair care">Hair Care:</label>
            <select id="Hair Care:">
                <option value="option1"></option>
                <option value="option2">Hair Cut</option>
                <option value="option3">Wash and blow</option>
                <option value="option4">Hair Spa</option>
                <option value="option5">Smooting/Rebonding</option>
                <option value="option6">Hair Coloring</option>
                <option value="option7">Hair Extention</option>
            </select>
            <br></br>
            <label for="nail and body spa">Nail and Body spa:</label>
            <select id="nail and body spa:">
                <option value="option1"></option>
                <option value="option2">manicure and pedicure</option>
                <option value="option3">nail art and design</option>
                <option value="option4">Hair Spa</option>
                <option value="option5">Smooting/Rebonding</option>
                <option value="option6">nail extention</option>
                <option value="option7">Spa treatment for hand and feed</option>
            </select>

            <br></br>
            <button type="submit">Register</button>
        </form>
    </body>
</html>
