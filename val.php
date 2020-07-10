<?php

class myval{
private $name;
private $check_val;

public function  __construct($n,$v){
       $this->name = $n;
       $this->check_val = $v;
}

protected function check_array(){
    return [
      "name" => '/.*[A-Z].*[a-z]/', 
      "password"=> '/^[0-9a-z]{1,10}/',
      "email"=>"/^[_a-zA-Z0-9-.]{1,15}@\w{1,6}.\w{2,3}/"

    ];
}


//we create array and put our all validation 

public function __get($name_function){//this nameok
   foreach ($this->check_array() as $key => $value):
            if($this->check_val===$key)://check val==key  were is the key??
                  return preg_match( $value,$this->name);
                endif;
    endforeach;
    
}


}




?>