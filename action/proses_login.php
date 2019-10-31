<?php

    include "connection.php";
    
	$email     = $_POST["email"];
    $password  = md5($_POST["password"]);

    $query     ="SELECT * FROM user WHERE email='$email' AND password='$password'";
    $login     = mysqli_query($konek, $query) or die (mysqli_error($konek));
    // var_dump($login);
    // $login     = mysqli_query($konek,$query) or die(mysqli_error($konek));
    $jlhrecord = mysqli_num_rows($login);
    $data      = mysqli_fetch_array($login,MYSQLI_BOTH);
    
    // var_dump('$jlhrecord');

	$email      = $data['email'];
	$password   = $data['password'];
    $pegawai_id = $data['pegawai_id'];
    $level	    = $data['level'];
    
    if($jlhrecord > 0){
        session_start();
        $_SESSION['id']         = $id;
        $_SESSION['pegawai_id'] = $pegawai_id;
        $_SESSION['level']      = $level;
        
        // if($level=='1'){
        //     echo '<META HTTP-EQUIV="REFRESH" CONTENT = "2; URL=../admin/dashboard.php">';
        // }
        // else {
        //     echo '<META HTTP-EQUIV="REFRESH" CONTENT = "2; URL=..//dashboard.php">';
        // }
        // echo "RETURN BERHASIL";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT = "2; URL=../admin/dashboard.php">';
        // header('Location:../admin/admin.php?content=home-admin');
        
    }
    else{
        // echo "GAGAL";
        echo "<br><br><br><strong><center><i>Maaf anda gagal login. Mungkin Username atau Password yang anda masukkan salah.<br>Silahkan masukkan Username atau Password dengan benar!";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT = "2; URL=../admin/">';  
    }
?>