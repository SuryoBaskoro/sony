<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 12/20/18
 * Time: 7:00 PM
 */



require_once __DIR__ . '/../src/arimaContrller.php';
require_once __DIR__ . '/../src/autoArimaContrller.php';


/*
 *     read data from data base and forecast
 * */


//    database connection

define( 'host', 'localhost' ); // set database host
define( 'username', 'root' ); // set database user
define( 'password', '' ); // set database password
define( 'db_name', 'bitrecast' ); // set database name


mb_internal_encoding( 'UTF-8' );
mb_regex_encoding( 'UTF-8' );
mysqli_report( MYSQLI_REPORT_STRICT );

$link="";
try {
    $link = new mysqli( host, username, password, db_name );
    $link->set_charset( "utf8" );
} catch ( Exception $e ) {
    die( 'Unable to connect to database' );
}



// arima
$order = array(0,1,1);
$arc = new arimaContrller($order);
$res = $arc->setDataBaseConnection($link)->select('Kapitalisasi_Pasar' ,'COUNT(Kapitalisasi_Pasar)','sampel_data')->where("Kapitalisasi_Pasar LIKE 'zabbix-internal-camper.srv.joopbox.com+%'")->groupBy("Kapitalisasi_Pasar")->orderBy("CAST(SUBSTR(Kapitalisasi_Pasar , LOCATE('+', Kapitalisasi_Pasar) ) AS UNSIGNED)",true)->forecast(1);
var_dump($res);


// auto arima
$arc = new autoArimaContrller("BIC");
$res = $arc->setDataBaseConnection($link)->select('Kapitalisasi_Pasar' ,'COUNT(Kapitalisasi_Pasar)','sampel_data')->where("Kapitalisasi_Pasar LIKE 'zabbix-internal-camper.srv.joopbox.com+%'")->groupBy("Kapitalisasi_Pasar")->orderBy("CAST(SUBSTR(Kapitalisasi_Pasar , LOCATE('+', Kapitalisasi_Pasar) ) AS UNSIGNED)",true)->forecast(1);
var_dump($res);

var_dump($arc->getParms());