<?php

include "start.php";


$go = new Operation;

//  Get the posted data
$popstdata= file_get_contents("php://input");

//  Extract the data
    $request =json_decode($popstdata);    

    // reference name & description below cos they're declared as global variable in start.php
    $go->name=$request->name;
    $go->description=$request->description;

    // id passed in template, admin component.html 'id'
$io= $go->update_into_team($request->id);

print_r($io);




?>