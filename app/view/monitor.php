<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <link rel="icon" href="<?php echo $dir?>/public/img/logo.png" type="png" sizes="16x16">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: lavenderblush">

<div class="container-fluid">
  <br><br>
  <div class="row">
    <!-- <div class="col-sm-4" style="background-color:white;"></div> -->
    <div class="col-sm-offset-4 col-sm-1" style="background-color:white;"><a href="<?php echo $dir?>/monitor?id=1"><img src="<?php echo $dir?>/public/img/pc.jpg" alt="5Terre" width="100%"></a></div>
    <div class="col-sm-1" style="background-color:white;"><a href="<?php echo $dir?>/monitor?id=2"><img src="<?php echo $dir?>/public/img/pc.jpg" alt="5Terre" width="100%"></a></div>
    <div class="col-sm-1" style="background-color:white;"><a href="<?php echo $dir?>/monitor?id=3"><img src="<?php echo $dir?>/public/img/pc.jpg" alt="5Terre" width="100%"></a></div>
  </div>
  <div class="row">
    <!-- <div class="col-sm-4" style="background-color:lavender;"></div>
    <div class="col-sm-1" style="background-color:lavenderblush;"></div>
    <div class="col-sm-1" style="background-color:lavender;"></div>
    <div class="col-sm-1" style="background-color:lavender;"></div> -->
    <div class="col-sm-offset-7 col-sm-1" style="background-color:lavenderblush;"><a href="<?php echo $dir?>/monitor?id=4"><img src="<?php echo $dir?>/public/img/pc.jpg" alt="5Terre" width="100%" style="transform: rotate(90deg);"></a></div>
    <div class="col-sm-4" style="background-color:lavenderblush;"></div>
  </div>
  <div class="row">
    <!-- <div class="col-sm-4" style="background-color:lavender;"></div>
    <div class="col-sm-3" style="background-color:lavenderblush;"></div> -->
    <div class="col-sm-offset-7 col-sm-1" style="background-color:lavenderblush;"><a href="<?php echo $dir?>/monitor?id=5"><img src="<?php echo $dir?>/public/img/pc.jpg" alt="5Terre" width="100%" style="transform: rotate(90deg);"></a></div>
    <div class="col-sm-4" style="background-color:lavenderblush;"></div>
  </div>
  <div class="row">
    <!-- <div class="col-sm-4" style="background-color:lavender;"></div>
    <div class="col-sm-3" style="background-color:lavenderblush;"></div> -->
    <div class="col-sm-offset-7 col-sm-1" style="background-color:lavenderblush;"><a href="<?php echo $dir?>/monitor?id=6"><img src="<?php echo $dir?>/public/img/pc.jpg" alt="5Terre" width="100%" style="transform: rotate(90deg);"></a></div>
    <div class="col-sm-4" style="background-color:lavenderblush;"></div>
  </div>
  <div class="row">
    <!-- <div class="col-sm-4" style="background-color:lavender;"></div>
    <div class="col-sm-3" style="background-color:lavenderblush;"></div> -->
    <div class="col-sm-offset-7 col-sm-1" style="background-color:lavenderblush;"><a href="<?php echo $dir?>/monitor?id=7"><img src="<?php echo $dir?>/public/img/pc.jpg" alt="5Terre" width="100%" style="transform: rotate(90deg);"></a></div>
    <div class="col-sm-4" style="background-color:lavenderblush;"></div>
  </div>
  <div class="row">
    <!-- <div class="col-sm-4" style="background-color:lavender;"></div>
    <div class="col-sm-1" style="background-color:lavenderblush;"></div>
    <div class="col-sm-1" style="background-color:lavender;"></div>
    <div class="col-sm-1" style="background-color:lavender;"></div> -->
    <div class="col-sm-offset-7 col-sm-1" style="background-color:lavenderblush;"><a href="<?php echo $dir?>/monitor?id=8"><img src="<?php echo $dir?>/public/img/pc.jpg" alt="5Terre" width="100%" style="transform: rotate(90deg);"></a></div>
    <div class="col-sm-4" style="background-color:lavenderblush;"></div>
  </div>
  <div class="row">
    <!-- <div class="col-sm-4" style="background-color:white;"></div> -->
    <div class="col-sm-offset-4 col-sm-1" style="background-color:white;"><a href="<?php echo $dir?>/monitor?id=9"><img src="<?php echo $dir?>/public/img/pc.jpg" alt="5Terre" width="100%" style="transform: rotate(180deg);"></a></div>
    <div class="col-sm-1" style="background-color:white;"><a href="<?php echo $dir?>/monitor?id=10"><img src="<?php echo $dir?>/public/img/pc.jpg" alt="5Terre" width="100%" style="transform: rotate(180deg);"></a></div>
    <div class="col-sm-1" style="background-color:white;"><a href="<?php echo $dir?>/monitor?id=11"><img src="<?php echo $dir?>/public/img/pc.jpg" alt="5Terre" width="100%" style="transform: rotate(180deg);"></a></div>
    <div class="col-sm-1" style="background-color:white;"></div>
    <div class="col-sm-4" style="background-color:white;"></div>
  </div>
</div>
<?php if(isset($_GET['id'])):?>
<div id="komputer" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $_GET["id"]?></h4>
      </div>
      <div class="modal-body">
        <p>PC-<?php echo $_GET["id"]?></p>
        <p>Status: </p>
        <?php if($pc['status']):?>
          <p class='bg-success'>Available</p>
          <button class='btn btn-primary' data-toggle="collapse" data-target="#book">Book</button>
          <br>
          <div id="book" class="collapse">
            <form action="<?php echo $dir?>/monitor" method="GET">
              <input class="form-control" type="text" name="nrp" placeholder="Masukkan NRP disini"><br>
              <input class="form-control" type="date" name="awal" placeholder="Awal"><br>
              <input class="form-control" type="date" name="akhir" placeholder="Awal"><br>
              <input type="hidden" name="pc" value="<?php echo $_GET['id']?>">
              <input class="btn btn-success" type="submit" value="Book">
            </form>
          </div>

        <?php else: ?>
        <p class='bg-danger'>Not Available</p>
        <a href="<?php echo $dir?>/monitor?hapus&pc=<?php echo $_GET['id']?>"><button class='btn btn-danger'>Hapus Peminjaman</button></a>
        <?php endif?>

        <button class='btn btn-warning' data-toggle="modal" data-target="#myModal">Riwayat</button>

<!-- Modal -->
<!-- Modal content-->


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script>$('#komputer').modal();</script>  
<?php endif?>
<div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Riwayat</h4>
              </div>
              <div class="modal-body">
                <p>Riwayat Peminjam</p>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>NRP</th>
                      <th>Awal</th>
                      <th>Akhir</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($data=$riwayat->fetch_assoc()):?>
                    <tr>
                      <td><?php echo $data['nrp']?></td>
                      <td><?php echo $data['awal']?></td>
                      <td><?php echo $data['akhir']?></td>
                    </tr>
                    <?php endwhile ?>
                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
          </div>

        </div>
      </div>

</body>
</html>