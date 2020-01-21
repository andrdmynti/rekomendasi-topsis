<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Data Kendaraan
        <!-- <small>advanced tables</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Kendaraan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
                <div class="col-sm-2">
                    <a href='dashboard.php?halaman=insert_kendaraan'><button type="button" class="btn btn-block btn-primary"><i class="fa fa-fw fa-plus"></i> Tambah Data</button></a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kendaraan</th>
                            <th>Merk Kendaraan</th>
                            <th>Jenis Kendaraan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include '../action/connection.php';

                            $query = mysqli_query($konek, "SELECT j_kendaraan.jenis, j_kendaraan.id, kendaraan.nama, kendaraan.merk, kendaraan.jenis_id FROM kendaraan, j_kendaraan WHERE j_kendaraan.id = kendaraan.jenis_id")or die(mysqli_error($konek));
                            
                            if(mysqli_num_rows($query) == 0){	
                                echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';	
                            }
                                else
                            {	
                                $no = 1;				
                                while($data = mysqli_fetch_array($query)){	
                                    echo '<tr>';
                                    echo '<td>'.$no.'</td>';
                                    echo '<td>'.$data['nama'].'</td>';
                                    echo '<td>'.$data['merk'].'</td>';
                                    echo '<td>'.$data['jenis'].'</td>';
                                    echo '<td><a href=dashboard.php?halaman=edit_kendaraan&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
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