<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="index.css">
<title>pegawai baru</title>
</head>

<body>


</nav>
    <header>
        <h3 class="tabel">DATA guru</h3>
    </header>

    <nav>
        <a href="guru.php">[+] Tambah Baru</a>
    </nav>

    <br>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">NO</th>
       <th scope="col">NAMA</th>
      <th scope="col">Nip</th>
      <th scope="col">pendidikan</th>
      <th scope="col">JABATAN</th>
      <th scope="col">ALAMAT</th>
    </tr>
  </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM guru";
        $query = mysqli_query($db,$sql);
        $no = 1;

        while($pegawai = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$no."</td>";
            echo "<td>".$pegawai['nama']."</td>";
            echo "<td>".$pegawai['nip']."</td>";
            echo "<td>".$pegawai['pendidikan']."</td>";
            echo "<td>".$pegawai['jabatan']."</td>";
            echo "<td>".$pegawai['alamat']."</td>";
           
            echo "<td>";
            echo "<a href='edit_guru.php?id=".$pegawai['id']."'>Edit</a> | ";
            echo "<a href='hapus_guru.php?id=".$pegawai['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
            $no++;
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </tbody>
</html>