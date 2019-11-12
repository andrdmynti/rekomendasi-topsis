<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Data Kendaraan
    <!-- <small>advanced tables</small> -->
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Master</li>
    <li class="active">Data Kendaraan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
    <div class="col-xs-12">
        <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Kendaraan</h3>
            <br><br>
            <a href="dashboard.php?halaman=i_kendaraan"><button class="btn btn-info pull-right">Tambah Data +</button></a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Nama Kendaraan</th>
                <th>Merk Kendaraan</th>
                <th>Jenis Kendaraan</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    
                    include '../action/connection.php';

                    $query = mysqli_query($konek, "SELECT kendaraan.nama, kendaraan.merk, kendaraan.jenis_id, jenis_kendaraan.id, jenis_kendaraan.jenis FROM kendaraan, jenis_kendaraan WHERE jenis_kendaraan.id = kendaraan.id")or die(mysqli_error());
                    
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
                            echo '<td><a href=dashboard.php?halaman=e_kendaraan&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                            echo '<td><a href=../action/d_kendaraan.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
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