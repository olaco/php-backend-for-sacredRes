<?php
//  All the classes are stored here: read,  insert, delete, update

// import connection

include "connect.php";

class Operation extends Init{

    // read
    function select_from_team(){
        // $resp=[];
        $query= "SELECT * FROM team";
        $result = mysqli_query($this->connection, $query);
        while($res= mysqli_fetch_array($result)){
            // loop thru incoming array
          $resp[]=array('id'=> $res['id'], 'name' => $res['name'], 'description' => $res['description']);
        }
        $data=array(
            "data" => $resp
        );
        $json_data=json_encode($data);
        return $json_data;
    }
    
    //    insert Operation

     function insert_into_team($name, $description){        
         $query = "INSERT INTO team (name, description) value('".$name."','".$description."')";
        
         mysqli_query($this->connection, $query);
         return $this->select_from_team();
     }


   

//  ========= End Insert Operation =====================


// -------- Delete Operation --------------

function delete_from_team($id){
    $query= "DELETE FROM team WHERE id=$id";

    mysqli_query($this->connection, $query);
    return $this->select_from_team();

}

// -------- Delete Operation  End--------------



// =========== Update ===============

public $name;
public $description;

function update_into_team($id){
    
    $query= "UPDATE team SET name= '$this->name', description= '$this->description' WHERE id=$id";
    
    mysqli_query($this->connection, $query);
    return $this->select_from_team();

}

// =========== Update ===============
}





?>