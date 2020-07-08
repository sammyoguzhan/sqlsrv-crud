<?php


        $serverName = ""; //serverName\instanceName  // OR IP ADDRESS
        $connectionInfo = array( "Database"=>"YOUR_DB_NAME", "UID"=>"YOUR_UID", "PWD"=>"YOUR_PASSWORD*");
        $conn = sqlsrv_connect( $serverName, $connectionInfo);

        if( $conn ) {
                 echo "Connection established.<br />";
        }else{
                echo "Connection could not be established.<br />";
                die( print_r( sqlsrv_errors(), true));
        }
?>