<?php
    // deve
    // $kon = mysqli_connect("localhost", "root",'toor',"akademik");
    
    // production
    $kon = mysqli_connect("localhost", "id8249471_dondo543",'dondo123',"id8249471_dondooo");
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal : " .mysqli_connect_error();
    }
?>