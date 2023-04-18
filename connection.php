<?php
function make_connection(){
    $host="localhost";
    $username="root";
    $password="";
    $dbname="todo";

    $conn = new mysqli($host, $username, $password, $dbname);
    if($conn->connect_error){
        echo "There is an error in the connection".$conn->connect_error;
    }
    // echo "Successfully Connected !!";
    return $conn;
}
function add_items($values){
    $conn=make_connection();
    $query="INSERT INTO tasks(id,item,status) VALUES('','$values','0')";
    $conn->query($query);
}
function get_items(){
    $conn=make_connection();
    $query="SELECT id,item FROM tasks WHERE status='0'";
    $result=$conn->query($query);
    return $result;
}
function get_items_checked(){
    $conn=make_connection();
    $query="SELECT id,item FROM tasks WHERE status='1'";
    $result=$conn->query($query);
    return $result;
}
function update_items($id){
    $conn=make_connection();
    $query="UPDATE tasks set status='1' WHERE id='$id'";
    $result=$conn->query($query);
}
function delete_items($id){
    $conn=make_connection();
    $query="DELETE from tasks WHERE id='$id'";
    $result=$conn->query($query);
}
?>