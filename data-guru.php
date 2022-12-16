<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>DATA GURU</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <header>
        <h3 class="delapan1">DATA GURU</h3>
    </header>

    
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA</th>
      <th scope="col">NIP</th>
      <th scope="col">PENDIDIKAN</th>
      <th scope="col">jabatan</th>
      <th scope="col">ALAMAT</th>
    </tr>
  </thead>
<tbody>

        <?php
        $sql = "SELECT * FROM guru";
        $query = mysqli_query($db, $sql);
        $no = 1;

        while($absen = mysqli_fetch_array($query))
        {
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$guru['nama']."</td>";
            echo "<td>".$guru['nip']."</td>";
            echo "<td>".$guru['pendidikan']."</td>";
            echo "<td>".$guru['jabatan']."</td>";
            echo "<td>".$guru['alamat']."</td>";
            echo "</tr>";
            $no++;
        }
        ?>
       
    </tbody>
   </table>
   <a href="logout.php" > <button  class="lima" >kembali</button> </a> <br>
   </tbody>
</html>
