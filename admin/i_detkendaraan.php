<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Tambah Data Detail Kendaraan
        <!-- <small>advanced tables</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i> Detail Kendaraan</a></li>
        <li class="active"> Tambah Data</li>
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
            <form role="form" method="POST" action="../action/i_dkendaraan.php">
                <div class="box-body">
                    <div class="form-group">
                        <label>Kendaraan</label>
                        <select class="form-control" name="kendaraan_id">
                            <?php
                                $option      = "SELECT * FROM kendaraan";
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
                        <input type="text" name="nopol" class="form-control" id="exampleInputEmail1" placeholder="Enter nopol kendaraan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Warna Kendaraan</label>
                        <input type="text" name="warna" class="form-control" id="exampleInputEmail1" placeholder="Enter warna kendaraan">
                    </div><!-- select -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Pembuatan</label>
                        <input type="text" name="thn" class="form-control" id="exampleInputEmail1" placeholder="Enter tahun pembuatan">
                    </div><!-- select -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Daya Listrik</label>
                        <input type="text" name="daya" class="form-control" id="exampleInputEmail1" placeholder="Enter daya listrik">
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