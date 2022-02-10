<?php
    include 'database.php';
    
    $id_alat = $_POST['id_alat'];
    $id_lab = $_POST['id_lab'];
    $nama_alat = $_POST['nama_alat'];
    $status_alat = $_POST['status_alat'];
    $jumlah_alat = $_POST['jumlah_alat'];
    $keterangan = $_POST['keterangan'];

    if(isset($_POST['simpan'])){
        $query = "UPDATE t_alat SET id_lab='$id_lab', nama_alat='$nama_alat', status_alat='$status_alat', 
                    jumlah_alat='$jumlah_alat', keterangan = '$keterangan' WHERE id_alat = '$id_alat'";

        $exec = mysqli_query($koneksi, $query);

        if ($exec){
            echo "<script> alert ('data berhasil disimpan!'); document.location='lab_robotika.php'</script>";
        }else{
            echo "<script> alert ('data gagal disimpan!'); document.location='lab_robotika.php'</script>";
        }
    }

?>