<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c5b31b49c9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../assets/boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/matkul.css">
    <title>Tabel Mata Kuliah</title>
    <?php
    session_start();
    include("../backend/connect.php");
    if ($_SESSION["status"] == !true) {
        header("Location:login.php");
    }
    $show = 'SELECT * FROM matakuliah';
    $qr = mysqli_query($connect, $show);
    $cek = mysqli_num_rows($qr);
    $tabel = "matakuliah";
    ?>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="h-sidebar">
                <h2>BISA ASEZK</h2>
            </div>
            <div style="padding-left: 1rem;padding-right:1rem;">
                <hr class="bg-light border-5 border-top border-light">
            </div>
            <ul class="l-sidebar">
                <li>
                    <a href="index.php">
                        <i class="fa-solid fa-gauge"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">
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
            <div class="navbar">
                <h2>Tabel Matakuliah</h2>
            </div>
            <div class="c-main">
                <div class="fitur">
                    <button onclick="muncul()">Tambah Data +</button>
                </div>
                <div class="tablearea">
                    <table class="table table-striped table-bordered align-middle">
                        <thead>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>SKS</th>
                            <th>Semester</th>
                            <th style="width: 0.1px;">Action</th>
                        </thead>
                        <tbody>
                            <?php
                            if ($cek == 0) {
                            ?>
                                <tr>
                                    <td colspan="5">Tidak Ada Data</td>
                                </tr>
                                <?php
                            } else {
                                while ($row = mysqli_fetch_array($qr)) { ?>
                                    <tr>
                                        <td><?= $row['kode'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['sks'] ?></td>
                                        <td><?= $row['semester'] ?></td>
                                        <td>
                                            <?php
                                            echo "
                                            <div class='d-flex gap-1'>
                                                <a href='editGoods.php?id=$row[kode]&tabel=$tabel'><button class='btn btn-primary'>Edit</button></a>
                                                <a href='proses/delProses.php?id=$row[kode]&tabel=$tabel'><button class='btn btn-danger'>Delete</button></a>
                                            </div>";
                                            ?>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="tambahData" class="addarea">
            <div class="card border-0 bg-body-tertiary m-auto bg-white rounded shadow">
                <div class="d-flex w-100 justify-content-end p-3 closed">
                    <button class="closed" onclick="ilang()"><i class="fa-solid fa-xmark fa-lg"></i></button>
                </div>
                <div class="px-5 pb-5">
                    <form action="../backend/addProses.php" method="post">
                        <div class="mb-3" style="display: none;">
                            <input type="text" id="tabel" name="tabel" value="matkul" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="kode">Kode</label>
                            <input type="text" id="kode" name="kode" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="nama">Nama Matakuliah</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="sks">SKS</label>
                            <input type="number" name="sks" id="sks" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="semester">Semester</label>
                            <select name="semester" id="semester" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-end align-items-center">
                            <button type="submit" class="btn btn-primary" name="submit">submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>
<script>
    function muncul() {
        document.getElementById("tambahData").style.display = "flex";
    }
    function ilang() {
        document.getElementById("tambahData").style.display = "none";
    }
</script>

</html>