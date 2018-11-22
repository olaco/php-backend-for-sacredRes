<?php 

class Init{
    public $connection;
    function __construct()
    {
    $this->connection=mysqli_connect("localhost", "root", "", "sacred_tones");
    // if($this->connection){
    //     echo "Connection Success";
    // }else{
    //     mysqli_error("Unale to connect");
    // }
    
        
    }
}
$con = new Init;


?>