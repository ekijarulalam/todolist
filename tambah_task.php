<!DOCTYPE html>
<html lang="en">
<?PHP
error_reporting(false);
session_start();
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>TAMBAH TO DO LIST</title>
</head>
<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      Tambah Task
   </nav>
<div class="card">
   <div class="container-fluid px">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-title text-center my-2">
            </div>
            <div class="card-body"></div>
        <form action="index.php" method="post">
        <label class ="form-label">Nama Task</label>
        <input class ="form-control" type ="text" name="nama_task" require>
        <br>
        <label>Prioritas</label>
      <select name="prioritas" class="form-control">
        <option value="">Pilih Prioritas</option>
        <option value="ya">ya</option>
        <option value="tidak">tidak</option>
      </select>
      <br>
        <label class ="form-label">Tanggal</label>
        <input class ="form-control" type ="text" onfocus="(this.type='date')" onblur="(this.type='text')" name = "tanggal" require>
        <br>
        <label class="col">Status</label>
      <select name="status" class="form-control">
        <option value="">Pilih Status</option>
        <option value="sudah">sudah</option>
        <option value="belum">belum</option>
      </select>
      <br>
      <br>
      <div>
       <button type="submit" class="btn btn-success">Simpan</button>
               <a href="index.php" class="btn btn-danger">Kembali</a>
            </div>
         </form>
		 
		 <?php
 // Ambil data dari session
 if (isset($_SESSION['nama'])) {
  $nama = $_SESSION['nama'];
 }
 if (isset($_SESSION['prioritas'])) {
  $prioritas = $_SESSION['prioritas'];
 }
  if (isset($_SESSION['tanggal'])) {
  $tanggal = $_SESSION['tanggal']; 
  }  
  if (isset($_SESSION['status'])) {
  $status = $_SESSION['status']; 
  }
  //Menambahkan data hasil inputan
  $nama[]=$_POST['nama'];
  $prioritas[]=$_POST['prioritas'];
  $tanggal[]=$_POST['tanggal'];
  $status[]=$_POST['status'];
  
  //Menyimpan data array yang baru ke session
  $_SESSION['nama']= $nama;
  $_SESSION['prioritas']= $prioritas;
  $_SESSION['tanggal']= $tanggal;
  $_SESSION['tanggal']= $tanggal;
  ?>
    </div>
   </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="asset/js/bootstrap.min.js"></script>         
</body>

</html>