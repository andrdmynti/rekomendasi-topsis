<?php

    include '../action/connection.php';

    $id      = $_GET['id'];

    $edit    = "SELECT detail_harga.id, waktu.lama_peminjaman, detail_harga.waktu_id, detail_harga.kendaraan_id, kendaraan.nama, detail_harga.harga FROM detail_harga, waktu, kendaraan WHERE waktu.id = detail_harga.waktu_id AND kendaraan.id = detail_harga.kendaraan_id AND detail_harga.id = $id";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error($konek));
    $row     = mysqli_fetch_array($hasil);

    // var_dump($row['']);
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Edit Data Detail Harga
        <!-- <small>advanced tables</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i> Detail Harga</a></li>
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
            <form role="form" method="POST" action="../action/u_dharga.php">
                <div class="box-body">
                    <div class="form-group">
                        <label>Waktu</label>
                        <select class="form-control">
                            <?php
                                $option      = "SELECT * FROM waktu WHERE id='$row[waktu_id]'";
                                $queryOption = mysqli_query($konek,$option);
                                while ($data = mysqli_fetch_array($queryOption)) { ?>
                                    <option value="<?php echo $data['id'] ?>">
                                        <?php echo $data["lama_peminjaman"].' Jam' ?>
                                    </option>
                                <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kendaraan</label>
                        <select class="form-control" name="kendaraan">
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
                    <input type="text" name="id" value="<?php echo $row['id']?>" hidden>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Harga (Rp)</label>
                        <input type="text" name="harga" value="<?php echo $row['harga'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter harga">
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