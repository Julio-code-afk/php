<?php

class Pessoa{

    private $name;
    protected $idade;

    function set_name($name){

        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }

    function set_age($age){

        $this->age = $age;
    }

    function get_age(){
        return $this->age;
    }


}

?>