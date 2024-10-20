<?php
$host ="localhost";
$username="root";
$password="";
$dbname="   sing in ";

//الاتصال بقاعده البيانات

$connect_database=mysqli_connect($host,$username,$password,$dbname );
//فحص الاتصال 
if(mysqli_connect_errno()){

    echo "not connected -غير متصل";
    exit();
}
else{
  echo "connected- متصل";

}






?>