<<<<<<< HEAD
<?php
$admin = &$_SESSION['admin'];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['logout'])){
        session_destroy();
        redirect("$dir/user");
        die();
    }
    $user = $_POST['username'];
    $password = $_POST['password'];

    $query = 'SELECT * FROM `admin` WHERE `user` = "'.$user.'"';
    $hasil = $db->query($query);
    $data = mysqli_fetch_array($hasil,MYSQLI_ASSOC);


    if(mysqli_num_rows($hasil)){
        if($data['pass']==$password){
            $_SESSION['admin']['user'] = $user;
            $_SESSION['admin']['loggedin'] = true;
            $db->close();
            redirect("$dir/monitor");
        }else{
            $db->close();
            redirect("$dir/user?gagal");  
        }
   }
   else{
       $db->close();
       redirect("$dir/user?gagal");
   }
}
=======
<?php
$admin = &$_SESSION['admin'];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['logout'])){
        session_destroy();
        redirect("$dir/user");
        die();
    }
    $user = $_POST['username'];
    $password = $_POST['password'];

    $query = 'SELECT * FROM `admin` WHERE `user` = "'.$user.'"';
    $hasil = $db->query($query);
    $data = mysqli_fetch_array($hasil,MYSQLI_ASSOC);


    if(mysqli_num_rows($hasil)){
        if($data['pass']==$password){
            $_SESSION['admin']['user'] = $user;
            $_SESSION['admin']['loggedin'] = true;
            $db->close();
            redirect("$dir/monitor");
        }else{
            $db->close();
            redirect("$dir/user?gagal");  
        }
   }
   else{
       $db->close();
       redirect("$dir/user?gagal");
   }
}
>>>>>>> master
$db->close();