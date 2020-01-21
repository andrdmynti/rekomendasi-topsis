<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id      = $_GET['id'];

    $edit    = "SELECT * FROM j_kendaraan WHERE id = '$id'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error($konek));
    $data    = mysqli_fetch_array($hasil);

?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Edit Data Jenis Kendaraan
        <!-- <small>advanced tables</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i> Jenis Kendaraan</a></li>
        <li class="active">Jenis Kendaraan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="../action/u_jkendaraan.php">
                <br><br>
                <input type="text" value="<?php echo $data['id'] ?>" name="id" hidden>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kendaraan</label>
                        <input type="text" class="form-control" value="<?php echo $data['jenis']?>" name="jkendaraan" id="exampleInputEmail1" placeholder="Jenis Kendaraan">
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>