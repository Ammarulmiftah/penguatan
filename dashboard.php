<?php

$datapaket = array(
    array("produk 1", "isi deskripsi produk 1",100000),
    array("produk 2", "isi deskripsi produk 2",500000),
    array("produk 3", "isi deskripsi produk 3",50000),
    array("produk 4", "isi deskripsi produk 4",20000),
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body style="background-color: white">
  <nav class="navbar navbar-expand-lg bg-dark-subtle">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active ms-5" href="#">Transaksi</a>
          <li class="nav-item">
            <a class="nav-link active position-absolute end-0" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<center>
    <div class="container">
    <img src="nih/banner.jpg" width="100%" style="padding: 5px; height: 480px; margin-top:30px;" >
    </div>
</center>
<h2>Daftar Produk School Mart</h2><br>

<div class="row">
    <!-- buka foreach -->
    <?php foreach ($datapaket as $values =>$value) {?>
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="nih/isian.jpg" style="width:100%; height:200px;" class="card-img-top" alt="...">
  <div class="card-body">
                        <p><?php echo $value[0]; ?></p>
                        <p><?php echo $value[1]; ?></p>
                        <p><?php echo $value[2]; ?></p>
  </div>
</div>
                <form action="transaksi.php" method="post">
                    <input type="hidden" name="data1" id="data" value="<?php echo $value[0] ?>">
                    <input type="hidden" name="data2" id="data" value="<?php echo $value[1] ?>">
                    <input type="hidden" name="data3" id="data" value="<?php echo $value[2] ?>">
                    <button class=" btn bg-success-subtle mt-3" style="margin-left:45px; width:200px;">
                        Pilih Paket
                    </button>
                </form>
    </div>
    <!-- tutup foreach -->
    <?php } ?>
    <div class="col">
  
        
<br>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-15">
      <div class="card mt-2 rounded" style="background-color: #C8D0D5;">
        <div class="card-body">
          <div class="text-center text-black">
            @copyright Ammarul Miftah
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>