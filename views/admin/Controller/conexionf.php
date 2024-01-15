<?php

define ('DB_SERVER','srv1134.hstgr.io');
define ('DB_USERNAME','u946450619_Koguma');
define ('DB_PASSWORD','888p7unv1En');
define ('DB_NAME','u946450619_Koguma');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die(" Error en la conexion: ". mysqli_connect_error());
}
