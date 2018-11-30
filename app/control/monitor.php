<?php
if(isset($_GET['id'])){
    $query = "SELECT * FROM `PC` where id=".$_GET['id'];
    $hasil  = $db->query($query);
    $pc = $hasil->fetch_assoc();
    $query = "SELECT * FROM `peminjaman` where pc=".$_GET['id'];
    $riwayat  = $db->query($query);
}
if(isset($_GET['pc'])){
    if(isset($_GET['hapus'])){
        $query = "UPDATE `PC` SET `status`=1 where id=".$_GET['pc'];
        $hasil  = $db->query($query);       
        redirect("$dir/monitor?id=".$_GET['pc']);
        die(); 
    }
    $query = "UPDATE `PC` SET `status`=0 where id=".$_GET['pc'];
    $hasil  = $db->query($query);
    $query = "INSERT INTO `peminjaman` values('',".$_GET['pc'].",'".$_GET['nrp']."','".$_GET['awal']."','".$_GET['akhir']."')";
    $hasil  = $db->query($query);
    $query = "SELECT email from `reservasi` where nrp ='".$_GET['nrp']."'";
    $email = $db->query($query);

    $msg = "Permintaan peminjaman anda diterima\n";

    $msg = wordwrap($msg,70);
    mail($email,"Di terima",$msg);

    redirect("$dir/monitor?id=".$_GET['pc']);
    die();
}