<?php include("config.php"); ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.2/css/all.css" integrity="sha384-fZCoUih8XsaUZnNDOiLqnby1tMJ0sE7oBbNk2Xxf5x8Z4SvNQ9j83vFMa/erbVrV" crossorigin="anonymous"/>
    <link rel="stylesheet" href="styles.css">
    <title>website sekolah </title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container-fluid color-white">
          <a class="navbar-brand" href="#"><h3>Brokreatif</h3></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="one" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html"><h6>HOME</h6></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profil.html"><h6>PROFIL</h6></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin.php"><h6>ADMIN</h6></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><h6>INFO</h6>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Data Guru</a></li>
                  <li><a class="dropdown-item" href="#">Data Siswa</a></li>
                  <li><a class="dropdown-item" href="#">Nilai Siswa</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="menu"> 
        <h3>SELAMAT DATANG DI MENU ADMIN </H3>
    </div>
   
  <div class="col-md-6">
   <div class="card" style="width: 18rem;">
     <ul class="list-group list-group-flush">
        <li class="list-group-item"  href="#">DATA GURU</li>
        <li class="list-group-item"  href="#">DATA SISWA</li>
        <li class="list-group-item"  href="#">NILAI MURID</li>
        <li class="list-group-item"  href="form-data-guru.php">FORM GURU</li>
        <li class="list-group-item"  href="#">FORM EDIT SISWA</li>
        <li class="list-group-item"  href="#">FORM EDIT NILAI MURID</li>
     </ul>
   </div>
  </div>








    <footer class="foter">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <h5 class="five">MITRA KAMI</h5>
              <ul class="st">
                <li>BROKREATIF.COM </li>
                <li class="q">BALE JASA.COM</li>
                <li class="w">CONEK.NET</li>
              </ul>
            </div>
            
            <div class="col-md-6">
              <h5 class="five">CONTACK</h5>
              <ul class="st">
                <li class="e">FACEBOOK</li>
                <li>INSTAGRAM</li>
                <li class="r">WHATSAP</li>
              </ul>
            </div>
            </div>
          </div>
        </div>
          </div>
        </div>
      </footer>
      <div class="p1">
        <p class="p"> Deploped by <b class="pp"> SAKAOU</b> copyright <i class="far fa-copyright"></i> 2022</p>
    </div>
    
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
      
</body>
</html>