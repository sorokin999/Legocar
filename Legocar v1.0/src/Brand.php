<?php

include 'Connect.php';

class brand{

    public $id,
    public $brand;

    public function get_brand($i){
        $res= new brand();
        $res->id = $i;
        $t=mysqli_query($link,"SELECT * FROM brand WHERE id_brand=$i");
        $res->brand=$t['brand'];
        return $res;
    }
}