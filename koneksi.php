<?php

$host ="localhost";
$username ="root";
$password ="";
$database ="pt.benicar";

$koneksi = new mysqli($host,$username,$password,$database);
if ($koneksi){
echo "databases terkoneksi";
}else{
    echo "databases tidak tekoneksi";
}

?>