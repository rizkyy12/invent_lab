<?php

    $servername ='localhost';
    $username ='root';
    $password ='';
    $dbname = "invent_alat";
    $connect = mysqli_connect($servername, $username, $password, "$dbname");

    $id_alat = $_POST['id_alat'];
    $id_lab = $_POST['id_lab'];
    $nama_alat = $_POST['nama_alat'];
    $status_alat = $_POST['status_alat'];
    $jumlah_alat = $_POST['jumlah_alat'];
    $keterangan = $_POST['keterangan'];

    $sql = "INSERT INTO t_alat (id_alat, id_lab, nama_alat, status_alat, jumlah_alat, keterangan) 
            VALUES ('$id_alat', '$id_lab', '$nama_alat', '$status_alat', '$jumlah_alat', '$keterangan');";
    $exec = mysqli_query($connect, $sql);

    if ($exec){
        echo "<script> alert ('berhasil menambahkan data!!'); document.location='tambah_barang.php'</script>";
    }else{
        echo "<script> alert ('gagal menambahkan data!!'); document.location='tambah_barang.php'</script>";
    }
    // if(isset($_POST['insert'])){
        
    //}
?>

