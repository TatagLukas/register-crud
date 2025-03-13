<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        button {
            background: blue;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="#" method="post">
        <h2>Form Registrasi Mahasiswa</h2>
        
        <label for="name">Nama Lengkap:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="number">Nomor Handphone:</label>
        <input type="tel" id="number" name="number" required>
        
        <label for="birthdate">Tanggal Lahir:</label>
        <input type="date" id="birthdate" name="birthdate" required>
        
        <label>Jenis Kelamin:</label>
        <input type="radio" id="male" name="gender" value="male"> <label for="male">Laki-laki</label>
        <input type="radio" id="female" name="gender" value="female"> <label for="female">Perempuan</label>
        <input type="radio" id="other" name="gender" value="other"> <label for="other">Lainnya</label>
        
        <button type="submit">Register</button>
    </form>
</body>
</html>
