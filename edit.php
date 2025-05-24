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

  <title>EDIT TO DO LIST</title>
</head>

<body>
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      Update Task
   </nav>

   <div class="container-fluid px">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-title text-center my-2">
            </div>
            
        <form action="index.php" method="post">
        <input type="hidden" name="id_task" class="form-control" value="<?php echo $dataTasks['id_task'] ?>">
                <div class="mb-3">
      <label class="form-label">Nama Task</label>
       <input class="form-control" type="text" name="nama_task" value="<?php echo $dataTasks['nama_task'] ?>" placeholder="Masukan nama task......"require>
      </div>
       <label>Prioritas</label>
      <select name="prioritas" class="form-control" placeholder="Masukan prioritas task......">
        <option value="">Pilih prioritas</option>
        <option value="ya" >ya</option>
        <option value="tidak" >tidak</option>
      </select>
      <br>
      <label class="form-label">Tanggal</label>
       <input class="form-control" type="date" name = "tanggal" value="<?php echo $dataTasks['tanggal'] ?>" placeholder="Masukan tanggal task......">
      <label>Status</label>
      <select name="status" class="form-control" placeholder="Masukan status task......">
        <option value="">Pilih status</option>
        <option value="sudah" >sudah</option>
        <option value="belum">belum</option>
      </select>
      <br>
        <div>
          <button type="submit" class="btn btn-success" name="submit">Ubah</button>
          <a href="index.php" class="btn btn-danger">Kembali</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
    <script src="asset/js/bootstrap.min.js"></script>     
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>