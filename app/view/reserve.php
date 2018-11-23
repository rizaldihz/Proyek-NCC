<link rel="icon" href="logo.png" type="png" sizes="16x16">

<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="<?php echo $dir?>/public/img/logo.png" type="png" sizes="16x16">
	<title>ncc pc reservation | reserve</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $dir?>/public/css/ini.css">
</head>
<body>
	<div class="img-res" style="background-color: gray;">
		<a href="<?php echo $dir ?>/userchoice"><button style="margin: 10px; background-color: white; border: 0px; border-radius: 4px; font-size: 10pt; padding: 5px; font-family: avenir; font-style: italic; font-weight: bold;">b a c k</button></a>
		<div>
			</div>
			<?php if (!isset($_POST['nama'])):?>
			  <form action="<?php echo $dir ?>/request" method="POST" class="isi" style="background-color: white; margin-top: 5%;">
			    <div class="container">
			      <p style="font-family: avenir; color: black; text-align: left; font-size: 25pt; margin-top: 0%;"><b>Reservation Form</b></p>
			      <p style="font-family: avenir; color: black;">Hey, feel free to fill this form!</p>
			      <br>
			        <label for="nama" class="font">Nama</label>
			        <input class="font" type="text" placeholder="Enter Name" name="nama" required>

			        <label for="nrp" class="font">NRP</label>
			        <input class="font" type="text" placeholder="Enter NRP" name="nrp" required>

			        <label for="telepon" class="font">Nomor Telepon</label>
			        <input class="font" type="text" placeholder="Enter Phone Number" name="telepon" required>

			        <label for="email" class="font">Email</label>
			        <input class="font" type="text" placeholder="Enter Email" name="email" required>

			        <label for="dosen" class="font">Nama Lengkap Dosen Pembimbing</label>
			        <input class="font" type="text" placeholder="Enter Nama Lengkap Dosen Pembimbing" name="dosen" required>

			        <label for="nip" class="font">NIP Dosen Pembimbing</label>
			        <input class="font" type="text" placeholder="Enter NIP Dosen Pembimbing" name="nip" required>

			        <label for="awal" class="font">Bulan-Tahun Awal Reservasi</label>
			        <input class="font" type="date" placeholder="Enter Bulan-Tahun Awal Reservasi" name="awal" required>

			        <label for="akhir" class="font">Bulan-Tahun Akhir Reservasi</label>
			        <input class="font" type="date" placeholder="Enter Bulan-Tahun Akhir Reservasi" name="akhir" required>

			      <div class="tombol">
			        <button type="submit" class="butres" name="submit" style="margin-top: 3%; background-color: black; color: white;"><b>Submit</b></button>
			      </div>
			    </div>
			  </form>
		<?php else:?>
		<label for="nama" class="font">Nama</label>
			        <p class="font">Nama: 
							<?php echo $nama ?></p>
							<p class="font">NRP: 
							<?php echo $nrp ?></p>
							<p class="font">Telepon: 
							<?php echo $telepon ?></p>
							<p class="font">Email: 
							<?php echo $email ?></p>
							<p class="font">Dosen: 
							<?php echo $dosen ?></p>
							<p class="font">NIP: 
							<?php echo $nip ?></p>
							<p class="font">Awal: 
							<?php echo $awal ?></p>
							<p class="font">Akhir: 
							<?php echo $akhir ?></p>
							<a href="<?php echo $dir ?>/request?">Download Form Disini</a>
							<?php endif?>  
	</div>


  	</div>


  	
		<style>
  .hero-image {
  background-image: url("<?php echo $dir?>/public/img/alexandru-acea-674024-unsplash.jpg");
  background-color: #cccccc;
  height: 800px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  }
  .hero-image2 {
  background-image: url("<?php echo $dir?>/public/img/lum3n-250309-unsplash.jpg");
  background-color: #cccccc;
  height: 800px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.hero-image3 {
  background-image: url("<?php echo $dir?>/public/img/leone-venter-559377-unsplash.jpg");
  background-color: #cccccc;
  height: 800px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.hero-image4 {
  background-image: url("<?php echo $dir?>/public/img/kontak.jpg");
  background-color: #cccccc;
  height: 800px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.hero-image-choice {
  background-image: url("<?php echo $dir?>/public/img/dustin-lee-19666-unsplash.jpg");
  background-color: #cccccc;
  height: 610px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.img-up {
  background-image: url("<?php echo $dir?>/public/img/new-data-services-746313-unsplash.jpg");
  background-color: gray;
  height: 800px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.img-log {
  background-image: url("<?php echo $dir?>/public/img/georgie-cobbs-459520-unsplash.jpg");
  background-color: gray;
  height: 800px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.img-res {
  background-image: url("<?php echo $dir?>/public/img/scott-webb-199479-unsplash.jpg");
  background-color: gray;
  height: 1200px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>
</body>

</html>

