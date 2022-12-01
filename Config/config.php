<?php 

// define("BASE_URL","http://localhost/dycan_technology/");
const BASE_URL = "http://localhost/dycan_technology/";

//Zona horaria
date_default_timezone_set('America/Lima');

// DATOS DE CONEXION A LA BASE DE DATOS
const DB_HOST = "localhost";
const DB_NAME = "db_dycantechnology";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_CHARSET = "charset=utf8";

//Deliminadores decimal y millar Ej. 24,1989.00
const SPD = ".";
const SPM = ",";

//Simbolo de moneda
const SMONEY = "S/. ";

// Datos envio de correo
const NOMBRE_REMITENTE = "1130544";
const EMAIL_REMITENTE = "no-reply@senati.edu.pe";
const NOMBRE_EMPRESA = "Dycan Technology S.A.";
const WEB_EMPRESA = "www.dycantechnology.com";

?>