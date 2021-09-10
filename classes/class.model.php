<?php
include 'Database.class.php';


class Model{

    /**
     * create a manga
     *
     * param [string] $name
     * param [price] $price
     * return void
     */
    public function createWorks($name,$price){
        global $conn;
        $request_insert = "INSERT INTO crud (name, price) VALUES ('" . $name . "', '" . $price . "')";
        $res = $conn->query($request_insert);

        return $res;
    }


    public function getAllWorks(){
        global $conn;

        $request_all = "SELECT * FROM crud";
        $get_all_works = $conn->query($request_all);

        return $get_all_works;
    }

 
    /**
     * delete 1 works selected
     *
     * param [int] $id
     * return void
     */
    public function deleteWorks($id_product){
        global $conn;

        $delete_works_request = "DELETE FROM crud WHERE id = ".$id_product;
        $res = $conn->query($delete_works_request);

        return $res;
    }

    /**
     * update$update the manga select
     *
     * param [int] $id
     * param [string] $name
     * param [price] $price
     * return void
     */
    public function updateWorks($id_product,$name,$price){
        global $conn;
        $update = "UPDATE crud SET name='".$name."',price='".$price."' WHERE id =".$id_product;
        $res = $conn->query($update);

        return $res;
    }
}