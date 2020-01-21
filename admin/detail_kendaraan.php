<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Data Detail Kendaraan
        <!-- <small>advanced tables</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Detail Kendaraan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
                <div class="col-sm-2">
                    <a href='dashboard.php?halaman=i_detkendaraan'><button type="button" class="btn btn-block btn-primary"><i class="fa fa-fw fa-plus"></i> Tambah Data</button></a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kendaraan</th>
                            <th>Nopol Kendaraan</th>
                            <th>Warna Kendaraan</th>
                            <th>Tahun Pembuatan</th>
                            <th>Daya Listrik</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include '../action/connection.php';

                            $query = mysqli_query($konek, "SELECT d_kendaraan.id_dk, kendaraan.id, kendaraan.nama, d_kendaraan.kendaraan_id, d_kendaraan.nopol_kendaraan, d_kendaraan.warna_kendaraan, d_kendaraan.tahun_pembuatan, d_kendaraan.daya_listrik FROM kendaraan, d_kendaraan WHERE kendaraan.id = d_kendaraan.kendaraan_id")or die(mysqli_error($konek));
                            
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
                                    echo '<td>'.$data['nopol_kendaraan'].'</td>';
                                    echo '<td>'.$data['warna_kendaraan'].'</td>';
                                    echo '<td>'.$data['tahun_pembuatan'].'</td>';
                                    echo '<td>'.$data['daya_listrik'].'</td>';
                                    echo '<td><a href=dashboard.php?halaman=update_detkendaraan&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                    echo '<td><a href=../config/d_detkendaraan.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
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