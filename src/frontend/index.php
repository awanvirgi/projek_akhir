<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/dashboard.css">
    <script src="https://kit.fontawesome.com/c5b31b49c9.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>

    <?php
    session_start();
    if ($_SESSION["status"] == !true) {
        header("Location:login.php");
    }
    ?>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="h-sidebar">
                <h2>BISA ASEZK</h2>
            </div>
            <div style="padding: 1rem;">
                <hr color="white">
            </div>
            <ul class="l-sidebar">
                <li>
                    <a href="index.php">
                        <i class="fa-solid fa-gauge"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="matkul.php">
                        <i class="fa-solid fa-book"></i>
                        Mata kuliah
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        Dosen
                    </a>
                </li>
                <li>
                    <a href="#">
                    <i class="fa-solid fa-people-group"></i>
                    Kelas
                    </a>
                </li>
                <li>
                    <a href="#">
                    <i class="fa-solid fa-school"></i>
                        Ruang
                    </a>
                </li>

            </ul>
        </div>

        <div class="main">

        </div>
    </div>
</body>

</html>