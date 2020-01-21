<?php

    include '../action/connection.php';

    $id      = $_GET['id'];

    $edit    = "SELECT kendaraan.id, kendaraan.nama, d_kendaraan.kendaraan_id, d_kendaraan.nopol_kendaraan, d_kendaraan.warna_kendaraan, d_kendaraan.tahun_pembuatan, d_kendaraan.daya_listrik FROM kendaraan, d_kendaraan WHERE kendaraan.id = d_kendaraan.kendaraan_id AND kendaraan.id = $id";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error($konek));
    $row     = mysqli_fetch_array($hasil);

?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Edit Data Detail Kendaraan
        <!-- <small>advanced tables</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i> Detail Kendaraan</a></li>
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
            <form role="form" method="POST" action="../action/u_dkendaraan.php">
                <div class="box-body">
                    <input type="text" name="id" value="<?php echo $row['id'] ?>">
                    <div class="form-group">
                        <label>Kendaraan</label>
                        <select class="form-control">
                            <?php
                                $option      = "SELECT * FROM kendaraan WHERE id='$row[kendaraan_id]'";
                                $queryOption = mysqli_query($konek,$option);
                                while ($data = mysqli_fetch_array($queryOption)) { ?>
                                    <option value="<?php echo $data['id'] ?>">
                                        <?php echo $data["nama"] ?>
                                    </option>
                                <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nopol Kendaraan</label>
                        <input type="text" value="<?php echo $row['nopol_kendaraan'] ?>" name="nopol" class="form-control" id="exampleInputEmail1" placeholder="Enter nopol kendaraan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Warna Kendaraan</label>
                        <input type="text" name="warna" class="form-control" id="exampleInputEmail1" value="<?php echo $row['warna_kendaraan'] ?>" placeholder="Enter warna kendaraan">
                    </div><!-- select -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Pembuatan</label>
                        <input type="text" name="thn" class="form-control" value="<?php echo $row['tahun_pembuatan'] ?>" id="exampleInputEmail1" placeholder="Enter tahun pembuatan">
                    </div><!-- select -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Daya Listrik</label>
                        <input type="text" name="daya" value="<?php echo $row['daya_listrik'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter daya listrik">
                    </div><!-- select -->
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>