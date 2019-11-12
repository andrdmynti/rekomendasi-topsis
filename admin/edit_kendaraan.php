<?php

    include '../action/connection.php';

    $id      = $_GET['id'];
    $edit    = "SELECT kendaraan.nama, kendaraan.merk, kendaraan.jenis_id, jenis_kendaraan.id, jenis_kendaraan.jenis FROM kendaraan, jenis_kendaraan WHERE jenis_kendaraan.id = kendaraan.id AND kendaraan.id = $id";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Data Pegawai
    <!-- <small>advanced tables</small> -->
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Master</li>
    <li><a href="dashboard.php?halaman=jenis_kendaraan">Data Jenis Kendaraan</a></li>
    <li class="active">Input Data</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- <div class="box-header">
                    <h3 class="box-title">Data Pegawai</h3>
                </div> -->
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form Jenis Kendaraan</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="../action/e_jkendaraan.php">
                        <input value="<?php echo $data['id'] ?>" hidden name="id">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Nama Kendaraan</label>
                                <div class="col-sm-8">
                                    <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" id="inputEmail3" placeholder="Jenis Kendaraan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Merk Kendaraan</label>
                                <div class="col-sm-8">
                                    <input type="text" name="merk" value="<?php echo $data['merk'] ?>" class="form-control" id="inputEmail3" placeholder="Jenis Kendaraan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Jenis Kendaraan</label>
                                <div class="col-sm-8">
                                    <!-- <select name="jenis" id="" class="form-control">
                                        <?php
                                            $tujuan             = "SELECT * FROM jenis_kendaraan";
                                            $queryJenis         = mysqli_query($konek,$tujuan);
                                            while ($dataJenis   = mysqli_fetch_array($queryJenis)) { 
                                        ?>
                                            <option value="<?php echo $dataJenis['id'] ?>"><?php echo $dataJenis["jenis"] ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select> -->
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button class="btn btn-info pull-right">Simpan</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>