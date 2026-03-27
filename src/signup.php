<?php
    include('../config/database.php');
    //get data
    $f_name =$_POST['fname'];
    $l_name =$_POST['lname'];
    $e_mail =$_POST['email'];
    $m_phone =$_POST['mphone'];
    $p_sswd =$_POST['passwd'];
    //$
    //Query to insert into sql
    $sql="INSERT INTO users(firstname,lastname,email,mobile_phone,password)
        values('$f_name','$l_name','$e_mail','$m_phone','$p_sswd')";
    //Execute query
    pg_query($sql);  
    
    //email 
$check_email = "SELECT email FROM users WHERE email = '$e_mail'";
$res_email = pg_query($local_conn, $check_email);

if (pg_num_rows($res_email) > 0) {
    echo "Error: El correo electrónico '$e_mail' ya está registrado. Por favor, use uno diferente.\n";
    exit();
}

//telefono 
$check_phone = "SELECT mobile_phone FROM users WHERE mobile_phone = '$m_phone'";
$res_phone = pg_query($local_conn, $check_phone);

if (pg_num_rows($res_phone) > 0) {
    echo "Error: El número de celular '$m_phone' ya está registrado en nuestro sistema."; 
    exit();
}

if ($res_local) {
    // --- PASO B: Si funcionó el anterior, guardar en la nube (Supabase) ---
    $res_supa = pg_query($supa_conn, $sql);

    if ($res_supa) {
        echo "¡Listo! Guardado en ambos lados.";
    } else {
        echo "Error: Se guardó en local pero no en la nube.";
    }
} else {
    echo "Error: No se pudo guardar ni en local.";
}