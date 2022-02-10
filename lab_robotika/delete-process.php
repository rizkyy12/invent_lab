<?php
    include_once 'database.php';
    $id_alat = $_GET['id_alat'];

    $query = "DELETE FROM t_alat WHERE id_alat='$id_alat'";
    
    $exec = mysqli_query($koneksi, $query);
    if ($exec){
        echo "<script> alert ('data berhasil dihapus!'); document.location='lab_robotika.php'</script>";
    }else{
        echo "<script> alert ('data gagal dihapus!'); document.location='lab_robotika.php'</script>";
    }
    // mysqli_close($koneksi);
?>