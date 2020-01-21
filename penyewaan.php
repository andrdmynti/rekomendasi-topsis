<br><br><br>
<br><br><br>
<section id="section-contact" class="section appear clearfix">
    <div class="container">
        <div class="row mar-bot40">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <h2 class="section-heading animated" data-animation="bounceInUp">Form Pemesanan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="cform" id="contact-form">
                    <form action="action/proses_pesan.php" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="nama" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">No. KTP</label>
                            <input type="text" class="form-control" name="ktp" id="ktp" placeholder="Nomor KTP" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">Foto KTP</label>
                            <input type="file" class="form-control" name="ktp" id="ktp" placeholder="Nomor KTP" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">No. SIM</label>
                            <input type="text" class="form-control" name="sim" id="sim" placeholder="Nomor SIM" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Nomor HP</label>
                            <input type="text" class="form-control" name="no_hp" id="subject" placeholder="Nomor Handphone" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <label for="message">Alamat</label>
                            <textarea class="form-control" name="alamat" rows="5" data-rule="required" data-msg="Alamat"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <label for="message">Tanggal Penyewaan Awal</label>
                            <input type="text" class="form-control" name="awal" id="awal" placeholder="Nomor Handphone" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <label for="message">Tanggal Penyewaan Akhir</label>
                            <input type="text" class="form-control" name="akhir" id="akhir" placeholder="Nomor Handphone" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <label for="message">Jenis Kendaraan</label>
                            <select class="form-control" id="jenis" name="jenis" required>
                                <?php
                                    include 'action/connection.php';
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
                        <div class="form-group">
                            <label for="message">Kendaraan</label>
                            <select class="form-control" id="kendaraan" name="kendaraan" required>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Waktu Penyewaan</label>
                            <select class="form-control" name="waktu" id="waktu">
                                <?php
                                    include 'action/connection.php';
                                    $option      = "SELECT * FROM waktu";
                                    $queryOption = mysqli_query($konek,$option);
                                    while ($data = mysqli_fetch_array($queryOption)) { ?>
                                        <option value="<?php echo $data['id'] ?>">
                                            <?php echo $data["lama_peminjaman"] ?>
                                        </option>
                                    <?php
                                    }
                                ?>
                            </select>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <label for="message">Lama Penyewaan</label>
                            <input type="text" class="form-control" name="lama" id="lama" placeholder="Nomor Handphone" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <label for="message">Total Pembayaran</label>
                            <input type="text" class="form-control" name="total" id="total" placeholder="Total Pembayaran" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" readonly/>
                            <div class="validation"></div>
                        </div>
                        <button type="submit" class="btn btn-theme pull-left">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $( "#jenis" ).change(function() {
        var jenis = $("#jenis").val();
        console.log(jenis);
        $.ajax({
        url: "./ajax_kendaraan.php?jenis=" + jenis,
        success: function(result){
            $("#kendaraan").html(result);
        }
        });
    });

    $( "#kendaraan" ).change(function() {
        var kendaraan = $("#kendaraan").val();
        console.log(kendaraan);
    });

    $( "#waktu" ).change(function() {
        var waktu = $("#waktu").val();
        console.log(waktu);
    });

    $( "#lama" ).change(function() {
        var kendaraan = $("#kendaraan").val();
        var waktu = $("#waktu").val();
        var lama = $("#lama").val();
        console.log(lama);
        $.ajax({
        url: "./ajax_total.php?kendaraan=" + kendaraan + "&waktu=" + waktu + "&lama=" + lama,
        success: function(result){
            console.log(result);
            $("#total").val(result);
        }
        });
    });

</script>