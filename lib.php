<?
require_once("db.php");
session_start();
header('Content-Type: text/html; charset=utf-8');
error_reporting(1);
ini_set("display_errors",1);


$host = 'localhost';
$user = 'root';
$pw = '1540';
$dbName = 'sonemary';

$connect =mysqli_connect($host, $user,$pw, $dbName);
print_r($connect);

if(mysqli_connect_error()){
  echo "mysql 접속 중 오류 발생";
  echo mysqli_connect_error();
}

mysqli_query($conn,'SET NAMES utf8');



?>
