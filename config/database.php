<?php
   //Database configuration
   $local_host     = 'localhost'; //127.0.0.1
   $local_dbname   = 'app_beta';
   $local_username = 'postgres';
   $local_password = 'unicesmag';
   $local_port     = '5432';

   // supabase database configuration
   $supa_host      = 'db.phplhivonaypcifnjlsl.supabase.co';
   $supa_dbname    = 'postgres';
   $supa_username  = 'postgres';
   $supa_password  = 'unicesmagqq';
   $supa_port      = '5432';

   $local_data_connection = "
        host=$local_host
        dbname=$local_dbname
        user=$local_username
        password=$local_password
        port=$local_port
   ";
   $supa_data_connection = "
        host=$supa_host
        dbname=$supa_dbname
        user=$supa_username
        password=$supa_password
        port=$supa_port
   ";
   //local connection
   $local_conn = pg_connect($data_connection);
   if(!$local_conn){
        echo "Error: Unable to connect to database. ";
        exit ();
   }else{
    echo" Local success connection !!!";
    $supa_conn = pg_connect($supa_data_connection);
   if(!$supa_conn){
        echo "Error: Unable to connect to supabase database. ";
        exit ();
   }else{
    echo" <br>supabse success connection !!!";
   }
   }
?>