<?php
    //define("BASE_URL", "http://localhost/tienda_virtual/");
    const BASE_URL = "http://localhost/tienda_virtual";

    //>}Zona Horaria
    date_default_timezone_set('America/Argentina/Buenos_Aires');

    //DATOS DE CONEXION A BASE DE DATOS
    const DB_HOST = "localhost";
    const DB_NAME ="tienda";
    const DB_USER ="root";
    const DB_PASSWORD = "";
    const DB_CHARSET = "charset=utf8";

    //DELIMITADORES DECIMAL Y MILLAR =>FORMATOS MONETARIOS
    const SPD = ".";
    const SPM = ",";

    //SIMBOLO DE MONEDA
    const SMONEY = "$";
 
?>