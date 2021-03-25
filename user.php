<?php

include 'connect.php';

class user {
    public $id, 
    public $name,
    public $surname, 
    public $login, 
    public $pas,
    public $lvl;
    
    public function  get_user($i) {
        $res = new user();
        $res->id = $i;
        $t = mysqli_query($link, "SELECT * FROM user WHERE id_user=$i")->fetch_all(MYSQLI_ASSOC);
        $res->name = $t['name'];
        $res->surname = $t['surname'];
        $res->login = $t['login'];
        $res->pas = $t['pas'];
        $res->lvl = $t['lvl'];
        return $res;
    }

    public function add_user() {
        $res = new user();
        $res->name = $_POST['name'];
        $res->surname = $_POST['surname'];
        $res->login = $_POST['login'];
        $res->pas = $_POST['pas'];
        $res->lvl = 2;
        $t = mysqli_query($link, "INSERT INTO user (name, surname, login, pass, lvl) 
                        VALUES ('$name', '$surname', '$login', '$pas', '$lvl' )");
        echo (mysqli_error());                
    }
    
    public function del_user() {
        
    }


}