<?php 
require_once __DIR__ . '/../BitreCast/koneksi.php';
require_once __DIR__ . '/../src/arimaContrller.php';

$conn = mysqli_connect($host, $username, $password, $db_name);
$order = array(0,1,1);
$arc = new arimaContrller($order);

$res = $arc->setDataBaseConnection($link)->query($sql,"Periode" ,"Kapitalisasi_Pasar" )->forecast(1);
$res = $arc->setDataBaseConnection($link)->query($sql,"Periode" ,"Kapitalisasi_Pasar" ,"01h")->forecast(1);

$res = $arc->setDataBaseConnection($link)->select('Periode', 'Kapitalisasi_Pasar','sampel_data')->where("id_data=1")->groupBy("column")->orderBy("Periode",true)->forecast(1);

?>