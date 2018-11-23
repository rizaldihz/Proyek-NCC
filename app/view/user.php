<link rel="icon" href="logo.png" type="png" sizes="16x16">
<?php
$admin = &$_SESSION['admin'];
if(isset($_GET['gagal'])) echo "<script>alert('Username atau password salah');</script>";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="<?php echo $dir?>/public/img/logo.png" type="png" sizes="16x16">
	<title>ncc pc reservation | reserve</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $dir?>/public/css/ini.css">
</head>
<body>
	<div class="img-log">
		<a href="<?php echo "$dir" ?>/"><button style="margin: 10px; background-color: white; border: 0px; border-radius: 4px; font-size: 10pt; padding: 5px; font-family: avenir; font-style: italic; font-weight: bold;">b a c k</button></a>
		<div>
			</div>
			  <form action="<?php echo "$dir" ?>/user" method="POST" class="isi">
			    <div class="container">
						<?php if(!$admin['loggedin']):?>
			      <p style="font-family: avenir; color: black; text-align: left; font-size: 25pt; margin-top: 0%;"><b>Admin Login</b></p>
			      <p style="font-family: avenir; color: black;">Hey, admin! Make sure you have signed up. Please log in with your username and password.</p>

			      <p style="font-family: avenir; color: black; font-size: 12px;">If you are directed to this page again, it means you entered the wrong username and password combination.</p>
			      <br>
			        <label for="username" class="font">Username</label>
			        <input class="font" type="text" placeholder="Enter Username" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" equired>

			        <label for="pass" class="font">Password</label>
			        <input class="font" type="password" placeholder="Enter Password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" required>

			        <label class="font">
			          <input type="checkbox" name="remember" <?php if(isset($_COOKIE["username"])) { ?> checked <?php } ?> style="margin-bottom:15px"> Remember me
			        </label>

			      <div class="tombol">
			        <button type="submit" class="butres" name="submit" style="margin-top: 3%"><b>Login</b></button>
						</div>
<?php else:?>
						<div class="tombol">
							<input type='hidden' name='logout' value='logout'>
			        <button type="submit" class="butres" name="submit" style="margin-top: 3%"><b>Logout</b></button>
						</div>
<?php endif?>
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
