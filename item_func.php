<?php
require_once "item.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $title = $_POST['title'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $item = new Item();

    $item->item_title = $title;
    $item->item_category = $category;
    $item->item_price = $price;
    $item->item_quantity = $quantity;

    if($item->addItem()){
        header("location: index.php?status=success");
    } else {
        echo "Something went wrong.. <a href='indexphp>Back</a>'";
    }
}