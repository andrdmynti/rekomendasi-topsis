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
                    <form class="form-horizontal" method="POST" action="../action/i_jkendaraan.php">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Jenis Kendaraan</label>
                                <div class="col-sm-8">
                                    <input type="text" name="jenis" class="form-control" id="inputEmail3" placeholder="Jenis Kendaraan">
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