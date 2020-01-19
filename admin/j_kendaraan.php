<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Data Jenis Kendaraan
        <!-- <small>advanced tables</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Jenis Kendaraan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
                <div class="col-sm-2">
                    <a href='dashboard.php?halaman=insert_jkendaraan'><button type="button" class="btn btn-block btn-primary">  <i class="fa fa-fw fa-plus"></i>Tambah Data </button></a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Kendaraan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include '../action/connection.php';

                            $query = mysqli_query($konek, "SELECT id,jenis FROM j_kendaraan")or die(mysqli_error($konek));
                            
                            if(mysqli_num_rows($query) == 0){	
                                echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';	
                            }
                                else
                            {	
                                $no = 1;				
                                while($data = mysqli_fetch_array($query)){	
                                        echo '<tr>';
                                    echo '<td>'.$no.'</td>';
                                    echo '<td>'.$data['jenis'].'</td>';
                                    echo '<td><a href=admin.php?halaman=edit_jkendaraan&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                    echo '<td><a href=../config/d_jkendaraan.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
                                    echo '</tr>';
                                    $no++;	
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->