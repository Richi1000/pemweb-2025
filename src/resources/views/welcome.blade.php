<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 1 - Tag img HTML</title>
    <link rel="stylesheet" href="../css/tag-img.css">
</head>
<body>
    <div class="container">
        <img src="assets/ACCURATE-Online-logo-transparant.png" alt="Sample Image" class="sample-image">
    <p>
        Selamat Datang di Accurate online
    </p>
    <ul>
        <p>
            Silahkan masukkan Email dan Password
        </p>

        <form onsubmit="handleSubmit(event)">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            <button type="submit">Submit</button>
        </form>
    </ul>
    <p>
        Bila anda masih belum memiliki akun silahkan mendaftar terlebih dahulu
    </p>
    <i><a href="https://pemweb.test">Daftar Sekarang</a></i>
    </div>
    
</body>
</html>