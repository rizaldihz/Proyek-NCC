<link rel="icon" href="logo.png" type="png" sizes="16x16">

<!DOCTYPE html>
<html>
<head>
	<title>ncc pc reservation | upload file</title>
	<link rel="icon" href="<?php echo $dir?>/public/img/logo.png" type="png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="<?php echo $dir?>/public/css/ini.css">
</head>
<body>
	<div class="img-up" style="background-color: gray;">
		<a href="<?php echo "$dir" ?>/userchoice"><button style="margin: 10px; background-color: white; border: 0px; border-radius: 4px; font-size: 10pt; padding: 5px; font-family: avenir; font-style: italic; font-weight: bold;">b a c k</button></a>
		<div>
			</div>
			  <form action="<?php echo "$dir" ?>/request" method="POST" class="isi" style="background-color: white; margin-top: 5%;" enctype="multipart/form-data">
			    <div class="container">
						<?php if(isset($_GET['sukses'])):?>
						<p> Upload Sukses </P>
						<?php endif ?> 
			      <p style="font-family: avenir; color: black; text-align: left; font-size: 25pt; margin-top: 0%;"><b>Upload Reservation File</b></p>
			      <p style="font-family: avenir; color: black;">Have you make reservation? Upload the file here.</p>
			      <br>

			        <label for="nrp" class="font">NRP</label>
			        <input class="font" type="text" placeholder="Enter NRP" name="nrp" required>

			        <label for="spec" class="font">Detail Spesifikasi PC</label>
			        <input class="font" type="text" placeholder="Enter Detail Spesifikasi PC" name="spec" required>

			        <label for="kebutuhan" class="font">Kebutuhan (ex: install mathlab, ubuntu, dll)</label>
			        <input class="font" type="text" placeholder="Enter Kebutuhan" name="kebutuhan" required>

			        <label class="rform_font1">Reservation File</label>
					<div>
						<input class="btn" type="file" name="form">
					</div>
						<input type="hidden" name='status' value="Pending">


			      <div class="tombol" style="margin-top: 5%;">
			        <button type="submit" class="butres" name="submit" style="margin-top: 3%; background-color: black; color: white;"><b>Submit</b></button>
			      </div>
			    </div>
			  </form>
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