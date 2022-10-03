<?php
// connect with mysql database
// set the host, user, password and database name
session_start();

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "employee_db";

$mysql = new mysqli($db_host, $db_user, $db_pass, $db_name);
$mysql->set_charset("utf8");
