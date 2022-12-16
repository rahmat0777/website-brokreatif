<?php

include("config.php");

if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $nip = $_POST['nip'];  
    $pendidikan = $_POST['pendidikan'];
    $jabatan = $_POST['jabatan'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO guru (nama, nip, pendidikan, jabatan,alamat) VALUE ('$nama', '$nip', ' $pendidikan', ' $jabatan', '$alamat')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: #?status=sukses');
    } else {
    
        header('Location: #?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>