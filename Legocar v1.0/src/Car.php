<?php

include 'Connect.php';

class Сar {
    public $id,
    public $photo,
    public $name,
    public $color;

    public function get_car($i) {
        $res= new car();
        $res->id=$i;
        $t=mysqli_query($link,"SELECT * FROM car WHERE id_car=$i")->fetch_all(MYSQLI_ASSOC);
        $res->photo=$t['photo'];
        $res->name=$t['name'];
        $res->color=$t['color'];
        return $res;
    }
    public function set_car($i) {
        $res = get_car($i);
        $res->photo = $_POST['photo'];
        $res->name = $_POST['name'];
        $res->color = $_POST['color'];
        $t=mysqli_query($link, "UPDATE 'car' SET '$i' = ") 
    }

}