<?php
$query = "SELECT * from `reservasi` ORDER BY `id` DESC";
$data = $db->query($query);
$query = "SELECT * from `reservasi` WHERE `Status`='Pending'";
$pending = $db->query($query);
if(isset($_GET['tolak'])){
    $query = "UPDATE `reservasi` SET `status`='Tolak' where `NRP`=".$_GET['nrp']." AND `Status`='Pending'";
    $hasil  = $db->query($query);
    $query = "SELECT email from `reservasi` where nrp ='".$_GET['nrp']."'";
    $email = $db->query($query);

    $msg = "Permintaan peminjaman anda ditolak\n";

    $msg = wordwrap($msg,70);
    mail($email,"Ditolak",$msg);

    redirect("$dir/monitor");
    die();
}
if(isset($_GET['id'])){
    $query = "SELECT * FROM `PC` where id=".$_GET['id'];
    $hasil  = $db->query($query);
    $pc = mysqli_fetch_assoc($hasil);
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
    $query = "UPDATE `reservasi` SET `status`='Terima' where `NRP`=".$_GET['nrp']." AND `Status`='Pending'";
    $hasil  = $db->query($query);
    $query = "SELECT `id` from `reservasi` 
        ORDER BY DESC LIMIT 1";
        $id = $db->query($query);
        $id = mysqli_fetch_assoc($id);
        $id = $id['id'];
    $query = "SELECT `Awal`,`Akhir` from `reservasi` 
        WHERE `NRP` = ".$_GET['nrp'];
        $tgl = $db->query($query);
        $tgl = mysqli_fetch_assoc($tgl);
    $query = "INSERT INTO `peminjaman` values('$id',".$_GET['pc'].",'".$_GET['nrp']."','".$tgl['Awal']."','".$tgl['Akhir']."')";
    $hasil  = $db->query($query);
    $query = "SELECT email from `reservasi` where nrp ='".$_GET['nrp']."'";
    $email = $db->query($query);

    $msg = "Permintaan peminjaman anda diterima\n";

    $msg = wordwrap($msg,70);
    mail($email,"Di terima",$msg);

    redirect("$dir/monitor?id=".$_GET['pc']);
    die();
}
