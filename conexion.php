<?php
    $host="localhost";
    $user="root";
    $pass="Soy f@n de Micro\$oft \$_$";
    $base_datos="usuarios";

    $con=mysqli.connect(host, user, pass, base_datos);

    if(msqli_connect_errno()){
        echo "NO se ha logrado conectar con el host";
    }

    mysqli_set_charset=($con, "UTF8");
    mysqli_select_db($con, $base_datos);
?>