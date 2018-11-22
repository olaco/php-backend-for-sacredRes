<?php
// import connection

include "start.php";


// ===== calling class for insert=======
$go= new Operation;

//  Get the posted data
$popstdata= file_get_contents("php://input");

//  Extract the data
    $request =json_decode($popstdata);    
$io= $go->insert_into_team($request->name, $request->description);

print_r($io);




?>