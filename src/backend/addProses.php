<?php
include_once('connect.php');
    $tabel = $_POST['tabel'];//ini nanti ada di form cmn kehidden
    // ngambil nilai untuk input barang
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];

    $addmatkul="INSERT INTO matakuliah VALUES ('$kode','$nama','$sks','$semester')";
    // ngambil nilai untuk input biodata
    function tambah($connect,$fungsi){ // Function
        mysqli_query($connect,$fungsi);
    }
    //kondisi
    if($tabel=="matkul"){
        tambah($connect,$addmatkul);
        header('Location:../frontend/matkul.php');
    }
?> 