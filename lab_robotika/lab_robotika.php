<?php
    include "../config.php";
    $query = mysqli_query($koneksi,"SELECT * FROM t_alat");
    $query_lab = mysqli_query($koneksi,"SELECT * FROM t_laboratorium"); 
    $data_lab = mysqli_fetch_array($query_lab);
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Lab. Robotika</title>

        <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/sb-admin-2.min.css" rel="stylesheet">

        <!-- Custom styles for this page -->
        <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    </head>

    <body id="page-top">
        <div id="wrapper">
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="lab_robotika.php">
                <div class="sidebar-brand-icon rotate-n-15"></div>
                <div class="sidebar-brand-text mx-3">Inventaris <?=$data_lab['nama_lab'];?></div>
                </a>

                <hr class="sidebar-divider my-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span><?=$data_lab['nama_lab'];?></span>
                    </a>
                    <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item active" href="lab_robotika.php">Data Barang</a>
                        </div>
                    </div>
                    <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="tambah_barang.php">Tambah Data Barang</a>
                        </div>
                    </div>
                </li>

                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>

            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$data_lab['nama_lab'];?></span>
                                    <img class="img-profile rounded-circle" src="../img/Black.png">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-black-500">Logout</i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>

                    <div class="container-fluid">
                        <h1 class="h3 mb-2 text-gray-800">Data Barang</h1>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Laboratorium Robotika</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No. Alat</th>
                                            <th>Nama Alat</th>
                                            <th>Jumlah</th>
                                            <th>Status</th>
                                            <th>Keterangan</th>
                                            <!-- <th>QR Code</th> -->
                                            <th>Edit/Delete</th>
                                        </tr>
                                    </thead>
                                    <?php if(mysqli_num_rows($query)>0){ ?>
                                    <?php
                                        $no = 1;
                                        while($data = mysqli_fetch_array($query)){
                                    ?>
                                    <tr>
                                        <td><?php echo $data["id_alat"];?></td>
                                        <td><?php echo $data["nama_alat"];?></td>
                                        <td><?php echo $data["jumlah_alat"];?></td>
                                        <td><?php echo $data["status_alat"];?></td>
                                        <td><?php echo $data["keterangan"];?></td>
                                        <td>
                                            <a href="edit_barang.php?id_alat=<?php echo $data['id_alat'];?>"><button class="btn btn-primary">Edit</button></a>
                                            <a href="delete-process.php?id_alat=<?php echo $data['id_alat'];?>"><button class="btn btn-primary">Delete</button></a>
                                        </td>
                                    </tr>
                                    <?php $no++; } ?>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Teknik Otomasi Manufaktur dan Mekatronika</span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <!-- Logout Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="../index.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../js/demo/datatables-demo.js"></script>
    </body>
</html>