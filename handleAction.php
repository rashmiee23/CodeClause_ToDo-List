<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["add"])){
         if($_POST["inputbox"]!=NULL){
                add_items($_POST["inputbox"]);
            }
    }
    else if(isset($_POST["checked"])){
        update_items($_POST["checked"]);
    }
    else if(isset($_POST["deleted"])){
        delete_items($_POST["deleted"]);
    }
    header("Location:index.php");
}
?>