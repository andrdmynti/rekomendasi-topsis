<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id      = $_GET['id'];

    $edit    = "SELECT j_kendaraan.jenis, j_kendaraan.id, kendaraan.nama, kendaraan.merk, kendaraan.jenis_id FROM kendaraan, j_kendaraan WHERE j_kendaraan.id = kendaraan.jenis_id AND kendaraan.id = $id";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error($konek));
    $data    = mysqli_fetch_array($hasil);

?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Edit Data Kendaraan
        <!-- <small>advanced tables</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i> Kendaraan</a></li>
        <li class="active"> Edit Data</li>
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
            <form role="form" method="POST" action="../action/u_kendaraan.php">
                <div class="box-body">
                    <input type="text" value="<?php echo $data['id'] ?>" name="id" hidden>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kendaraan</label>
                        <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter nama kendaraan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Merk Kendaraan</label>
                        <input type="text" name="merk" class="form-control" value=<?php echo $data['merk'] ?> id="exampleInputEmail1" placeholder="Enter merk kendaraan">
                    </div><!-- select -->
                    <div class="form-group">
                        <label>Jenis Kendaraan</label>
                        <select class="form-control" name="jenis">
                            <?php
                                $option      = "SELECT * FROM j_kendaraan WHERE id='$data[jenis_id]'";
                                $queryOption = mysqli_query($konek,$option);
                                while ($data = mysqli_fetch_array($queryOption)) { ?>
                                    <option value="<?php echo $data['id'] ?>">
                                        <?php echo $data["jenis"] ?>
                                    </option>
                                <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>