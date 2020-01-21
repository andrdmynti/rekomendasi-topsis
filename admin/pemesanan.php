<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Data Penyewaan
        <!-- <small>advanced tables</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Pemesanan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
                <!-- <div class="col-sm-2">
                    <a href='dashboard.php?halaman=insert_kendaraan'><button type="button" class="btn btn-block btn-primary"><i class="fa fa-fw fa-plus"></i> Tambah Data</button></a>
                </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tgl Awal</th>
                            <th>Tgl Akhir</th>
                            <th>Jenis Kendaraan</th>
                            <th>Kendaraan</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include '../action/connection.php';

                            $query = mysqli_query($konek, "SELECT pemesanan.nama, pemesanan.tgl_awal, pemesanan.tgl_akhir, j_kendaraan.jenis, kendaraan.nama, pemesanan.total FROM pemesanan, j_kendaraan, kendaraan, waktu WHERE j_kendaraan.id = pemesanan.jenis_id AND kendaraan.id = pemesanan.kendaraan_id AND waktu.id = pemesanan.waktu_id")or die(mysqli_error($konek));
                            
                            if(mysqli_num_rows($query) == 0){	
                                echo '<tr><td colspan="8" align="center">Tidak ada data!</td></tr>';	
                            }
                                else
                            {	
                                $no = 1;				
                                while($data = mysqli_fetch_array($query)){	
                                    echo '<tr>';
                                    echo '<td>'.$no.'</td>';
                                    echo '<td>'.$data['nama'].'</td>';
                                    echo '<td>'.$data['tgl_awal'].'</td>';
                                    echo '<td>'.$data['tgl_akhir'].'</td>';
                                    echo '<td>'.$data['jenis'].'</td>';
                                    echo '<td>'.$data['nama'].'</td>';
                                    echo '<td>'.$data['total'].'</td>';
                                    // echo '<td><a href=admin.php?halaman=edit_pemesanan&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
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