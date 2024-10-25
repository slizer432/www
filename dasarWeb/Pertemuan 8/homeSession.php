<!DOCTYPE html>
<html>

<head>
    <title>Halaman Home</title>
</head>

<body>
    <?php
    session_start();

    if ($_SESSION['status'] == 'login') {
        echo "Selamat datang " . $_SESSION['username'];
    } else {
        echo "Anda belum login, silahkan";
    }
    ?>

    <br>
    <a href="sessionLogout.php">Logout</a>
</body>

</html>