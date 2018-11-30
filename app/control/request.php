<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nrp = $_POST['nrp'];
    $query = "SELECT `NRP`,`Status` from `reservasi` 
    where `NRP`='$nrp' AND `Status`='Pending'";
    $hasil = $db->query($query);
    if(!isset($_POST['status'])){
        if(mysqli_num_rows($hasil)>0){
            redirect("$dir/reserve?gagal");
            die();
        }
        $nama = $_POST['nama'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];
        $dosen = $_POST['dosen'];
        $nip = $_POST['nip'];
        $awal = $_POST['awal'];
        $akhir = $_POST['akhir'];

        $query = "SELECT `id` from `reservasi` 
        ORDER BY DESC LIMIT 1";
        $id = $db->query($query);
        $id = mysqli_fetch_assoc($hasil);
        $id = $id['id'];
        $query = "INSERT INTO `reservasi`(id,Nama,NRP,Telepon,Email,Dosen,NIP,Awal,Akhir,`Status`) 
                    VALUES('$id','$nama','$nrp','$telepon','$email','$dosen','$nip','$awal','$akhir','Pending')";
        $db->query($query);
        $db->close();
        include("$app/view/reserve.php");
        die();

    }else if(isset($_POST['status'])){
        $query = "SELECT `NRP`,`Status` from `reservasi` 
        where `NRP`='$nrp' AND `Form` !=''";
        $cek = $db->query($query);
        if(mysqli_num_rows($cek)>0){
            redirect("$dir/upload?gagal");
            die();
        }
        $temp = "/temp/"."{$_FILES["form"]["name"]}";
        $spec = $_POST['spec'];
        $detail = $_POST['kebutuhan'];
        $status = $_POST['status'];
        
        $upload = move_uploaded_file($_FILES["form"]["tmp_name"], $app.$temp);
        
        $query = "UPDATE `reservasi` SET `Spesifikasi` = '$spec', `Kebutuhan` = '$detail', `Form` = '$temp'
                    WHERE `NRP` = '$nrp' AND `Status` = 'Pending'";
        $hasil = $db->query($query);
        $db->close();
        redirect("$dir/upload?sukses");
    }
}else if($_SERVER["REQUEST_METHOD"] == "GET"){

    $query = 'SELECT * from `reservasi` ORDER BY `id` DESC';
    $hasil = $db->query($query);
    
    $array = $hasil->fetch_assoc();

    require("$app/control/pdf/fpdf.php");
    
    $pdf = new FPDF();

    $pdf->SetFont('Times','',12);
    $pdf->AddPage();
    $pdf->Image("$root/public/img/kopsuratncc.jpg",32,'',150);
    $pdf->SetLeftMargin(20);
    $pdf->SetRightMargin(20);
    $pdf->Ln(10);
    $pdf->Write(5, "Form Peminjaman Komputer NCC Sebagai Berikut:");
    $pdf->Ln(10);
    $pdf->Write(5, "Saya yang beratas namakan:");
    $pdf->Ln(5);
    foreach ($array as $key =>$data)
    {
        if($key == 'id') continue;
        if($key == 'Dosen'){$pdf->Write(5, "Dengan Dosen Pembiming Tugas Akhir:");$pdf->Ln(5);}
        if($key == 'Awal'){$pdf->Write(5, "Meminjam Dengan Tanggal Sebagai Berikut:");$pdf->Ln(5);}
        if($key == 'Awal' || $key == 'Akhir') $key = "Waktu ".$key;
        $pdf->Write(5, "$key: $data"); //write
        $pdf->Ln(10); // new line
    }
    $pdf->Write(5, "Atas Perhatiannya Terimakasih");
    $db->close();
    $pdf->Output("ncc_form_".$array['id'].".pdf","D");

     
}else{
    redirect("/reserve");
}