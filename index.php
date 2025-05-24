

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/css/fontawesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>To Do List</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    My To Do List Eki Jarul Alam
  </nav>

  
    <a href="tambah_task.php" class="btn btn-dark mb-3">Tambah Task</a>
    
    <table class="table table-hover text-center">
      <thead class="table-dark">
     <h3 class="fs-4 mb-3">My list</h3>
     <div class="mb-3">
     <form method="GET" action="data_task.php">
     <input type="hidden" name="halaman" value="data_task">
    <div class="input-group">
      <input type="text" name="search" class="form-control" placeholder="cari task..." value="<?php echo isset ($_GET['search']) ? $_GET ['search'] : ''?>">
      <div class="row">
      <div class="col-md-6 d-flex">
        <button type="submit" class="btn btn-secondary me-2">Cari</button>
      </div>
      </div>
    </div>
        <table class="table bg-white rounded shadow-sm  table-hover">
          <div class="description">
            <?= date ("l, d m y")?>
          </div>
          <br>
   <thead>
     <tr>
      <th scope="col" width="50">NO</th>
      <th scope="col">Nama Task</th>
      <th scope="col">Prioritas</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      <th scope="col">Pilih</th>
     </tr>
    </thead>
      </thead>
   <tbody>
   
     <tr>
      <td>1</td>
      <td>Rapat</td>
      <td>Utama</td>
      <td>23 Mei 2025</td>
      <td>Selesai</td>
      <td>
              <a href="edit.php" class="btn btn-success">Ubah</a>
              <a href="delete.php" class="btn btn-danger" onclick=" return confirm('Apakah anda yakin ingin menghapus task ini?')" >Hapus</a>
            </td>
    </td>
    <td> <input type ="checkbox" name="" id=""></td>
    
     </tr>
     
      </tbody>
     </table>
     <a href="profil.php" class="btn btn-danger">Kembali</a>
     <a href="data_task.php" class="btn btn-success">Selesai</a>
    </div>
    
    </nav>

   </div>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="asset/js/bootstrap.min.js"></script>     
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>