<!-- PHP Start -->
<?php
include("koneksi.php");     
?>
<!-- PHP End -->

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Demo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/e4027260b9.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="asset/select2-4.0.6-rc.1/dist/css/select2.min.css">
  <link rel="stylesheet" href="asset/style.css">
  <script src="asset/jquery/jquery-3.3.1.min.js"></script>
  <script src="asset/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>
  <script src="asset/select2-4.0.6-rc.1/dist/js/i18n/id.js"></script>
  <script src="asset/js/app.js"></script>
</head>

<body>
  <a href="welcome.php">
    <div class="image1"></div>
  </a>
  <section class="content">
    <div class="container text-white">
      <h1 class="title text-center my-5">DAFTAR MENJADI RELAWAN</h1>
      <div class="row">
        <div class="col">
          <form action="" method="POST">
            <div class="mb-3">
              <label for="nik" class="form-label">NIK: </label>
              <input type="text" class="form-control" id="nik" placeholder="Masukan NIK">
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Telepon: </label>
              <input type="tel" class="form-control" id="phone" placeholder="Masukan Telepon">
            </div>
            <div class="d-flex justify-content-between">
              <div class="mb-3 col-5">
                <label for="fullname" class="form-label">Nama Lengkap: </label>
                <input type="text" class="form-control" id="fullname" placeholder="Masukan Nama Lengkap">
              </div>
              <div class="mb-3 col-5">
                <label for="gender" class="form-label">Jenis kelamin: </label>
                <select class="form-select">
                  <option selected>- Jenis Kelamin -</option>
                  <option value="Pria">Pria</option>
                  <option value="Wanita">Wanita</option>
                </select>
              </div>
            </div>
            <div class="d-flex justify-content-between">
              <div class="mb-3 col-5">
                <label for="birth" class="form-label">Tempat Lahir: </label>
                <input type="text" class="form-control" id="birth" placeholder="Masukan Tempat Lahir">
              </div>
              <div class="mb-3 col-5">
                <label for="date" class="form-label">Tanggal Lahir: </label>
                <input type="date" class="form-control" id="date">
              </div>
            </div>
            <div class="mb-3">
              <label for="address" class="form-label">Alamat: </label>
              <input type="text" class="form-control" id="address" placeholder="Masukan Alamat">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password: </label>
              <input type="password" class="form-control" id="password" placeholder="Masukan Password">
            </div>
          </form>
        </div>
        <div class="col">
          <form action="" method="POST">
            <div class="mb-3">
              <div class="col-sm-12">
                <label for="provinsi" class="form-label">Provinsi: </label>
                <?php                    
                    $sql_provinsi = mysqli_query($con,"SELECT * FROM provinces ORDER BY name ASC");
                  ?>
                <select class="form-select" name="provinsi" id="provinsi">
                  <option></option>
                  <?php                       
                      while ($rs_provinsi = mysqli_fetch_assoc($sql_provinsi)) { 
                      echo '<option value="'.$rs_provinsi['id'].'">'.$rs_provinsi['name'].'</option>';
                      }                        
                    ?>
                </select>
              </div>
            </div>
            <div class="mb-3">
              <div class="col-sm-12">
                <label for="kota" class="form-label">Kota/Kabupaten:</label>
                <select class="form-select" name="kota" id="kota">
                  <option></option>
                </select>
              </div>
            </div>
            <div class="mb-3">
              <div class="col-sm-12">
                <label class="form-label">Kecamatan:</label>
                <select class="form-select" name="kecamatan" id="kecamatan">
                  <option></option>
                </select>
              </div>
            </div>
            <div class="mb-3">
              <div class="col-sm-12">
                <label class="form-label">Kelurahan:</label>
                <select class="form-select" name="kelurahan" id="kelurahan">
                  <option></option>
                </select>
              </div>
            </div>
            <div class="d-flex justify-content-between">
              <div class="mb-3 col-5">
                <label for="fotoDiri" class="form-label">Foto Diri</label>
                <input class="form-control" type="file" id="fotoDiri">
              </div>
              <div class="mb-5 col-5">
                <label for="fotoKTP" class="form-label">Foto KTP</label>
                <input class="form-control" type="file" id="fotoKTP">
              </div>
            </div>
            <div class="mb-3 text-center">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
      </div>
    </div>
  </section>
  <div class="image2">
    <h2 class="title text-center py-5">IKUTI SOSIAL MEDIA KAMI</h2>
    <div class="icon d-flex justify-content-evenly">
      <a href="#" class="text-decoration-none"><i class="fab fa-facebook"></i><span>Facebook</span></a>
      <a href="#" class="text-decoration-none"><i class="fab fa-instagram"></i><span>Instagram</span></a>
      <a href="#" class="text-decoration-none"><i class="fab fa-tiktok"></i><span>TikTok</span></a>
      <a href="#" class="text-decoration-none"><i class="fab fa-twitter"></i><span>Twitter</span></a>
      <a href="#" class="text-decoration-none"><i class="fab fa-youtube"></i><span>Youtube</span></a>
    </div>
    <footer>
      <p class="text-center text-muted">© Created by Dwi Putra Bayu</p>
    </footer>
  </div>
  <!-- JS Start -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
  <!-- JS End -->
</body>

</html>