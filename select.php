<?php
// import connection

include "start.php";




$go= new Operation;
$data= $go->select_from_team();

// print_r($res);
// convert from array to json data so it can be passed to angular

print_r($data);



?>