<?php

$hostDB = 'ruby.db.elephantsql.com';
$portDB = '5432';
$nameDB = 'lcxjhpwa';
$userDB = 'lcxjhpwa';
$pwDB = 'fVm2bMX9J3SCkUIHP5XU-NW4wnMdwN3x';

$connection = pg_connect("host=$hostDB port=$portDB dbname=$nameDB user=$userDB password=$pwDB");

 session_start();
if($connection){

}else{
 
}
?>