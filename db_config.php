<?php 
// db connection with OOP in PHP
define("DB_HOST", "localhost");
define("DB_USER", "sixdgt");
define("DB_PASSWORD", "1234");
define("DB_NAME", "oop_crud");

class DbConnection{
    // constructor
    function __construct(){
        $connect = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $this->con_obj = $connect;
    }

    // query builder method for insert, update and delete
    function iud($sql){
        $status = false;
        try{
            $result = mysqli_query($this->con_obj, $sql);
            if($result){
                $status = true;
            }
        } catch(Exception $e){
            echo $e->getMessage();
        }
        return $status;
    }

    // query builder method for select query
    function select($sql){
        $result = array();
        try{
            $db_data = mysqli_query($this->con_obj, $sql);
            if(mysqli_num_rows($db_data) > 0){
                $result = $db_data;
            }
        } catch(Exception $e){
            echo $e->getMessage();
        }
        return $result;
    }
}