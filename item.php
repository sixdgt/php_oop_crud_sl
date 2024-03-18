<?php

require_once "db_config.php";

class Item{
    public $item_id;
    public $item_title;
    public $item_category;
    public $item_price;
    public $item_quantity;
    public $item_add_date;
    public $db_obj;

    // constructor
    function __construct(){
        $this->db_obj = new DbConnection();
    }

    // item adding method
    function addItem(){
        $sql = "INSERT INTO item(`item_title`,`item_category`,`item_price`,`item_quantity`) VALUES('$this->item_title', '$this->item_category', '$this->item_price', '$this->item_quantity')";

        if($this->db_obj->iud($sql)){
            return true;
        } else {
            return false;
        }
    }

    // item listing method
    function showItem(){
        $sql = "SELECT * FROM item";
        $data = $this->db_obj->select($sql);
        return $data;
    }
}