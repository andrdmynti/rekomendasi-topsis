<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Tambah Data Kendaraan
        <!-- <small>advanced tables</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i> Kendaraan</a></li>
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
            <form role="form" method="POST" action="../action/i_kendaraan.php">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kendaraan</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Enter nama kendaraan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Merk Kendaraan</label>
                        <input type="text" name="merk" class="form-control" id="exampleInputEmail1" placeholder="Enter merk kendaraan">
                    </div><!-- select -->
                    <div class="form-group">
                        <label>Jenis Kendaraan</label>
                        <select class="form-control" name="jenis_id">
                            <?php
                                $option      = "SELECT * FROM j_kendaraan";
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>