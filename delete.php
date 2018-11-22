<?php
include "start.php";




$go = new Operation;
$io = $go->delete_from_team($_GET['id']);
print_r($io);






?>