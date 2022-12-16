<?php

include("config.php");
if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $pendidikan = $_POST['pendidikan'];
    $jk = $_POST['jabatan'];
    $alamat = $_POST['alamat'];
    
    $sql = "INSERT INTO data_pegawai (nama, alamat,jabatan) VALUE ('$nama','$nip','$pendidikan','$jk','$alamat')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: data_pegawai1.php?status=sukses');
    } else {
        header('Location: data_pegawai1.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>