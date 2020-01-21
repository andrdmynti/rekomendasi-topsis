<?php

    include "connection.php";
    
	$username  = $_POST["username"];
    $password  = md5($_POST["password"]);

    $query     ="SELECT * FROM user WHERE username='$username' AND password='$password'";
    $login     = mysqli_query($konek, $query) or die (mysqli_error($konek));
    // var_dump($login);
    // $login     = mysqli_query($konek,$query) or die(mysqli_error($konek));
    $jlhrecord = mysqli_num_rows($login);
    $data      = mysqli_fetch_array($login,MYSQLI_BOTH);
    
    // var_dump('$jlhrecord');

	$email      = $data['email'];
	$username   = $data['username'];
	$password   = $data['password'];
    // $pegawai_id = $data['pegawai_id'];
    $level	    = $data['level'];
    $id	        = $data['id'];
    
    if($jlhrecord > 0){
        session_start();
        $_SESSION['id']         = $id;
        $_SESSION['username']   = $username;
        // $_SESSION['pegawai_id'] = $pegawai_id;
        $_SESSION['level']      = $level;
        
        //var_dump($_SESSION['id']);
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