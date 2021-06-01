<?php

$conn_string = "host=ec2-107-21-10-179.compute-1.amazonaws.com
"
        . " port=5432 dbname=d9oabbjdtkc9mj"
        . " user=uimxuixokeqyjk"
        . " password=ab2b94468761171cdd68fa113c3478577c3d689d78ff8dbd91899d175450737e";
$db = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully quang\n";
   }
?>