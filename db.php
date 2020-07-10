<?php
"in software engineering the singleton pattern is a software design pattern
that restricts the instantiation of a class to one 'single'instance";

//example

//singleton for our db
class Db{
  //
  protected $host_name = "localhost";
  protected $user_name = "root";
  protected $user_pass = "";
  protected $db_name = "newdb";
 //we havn`t password true?
   protected static $connect; 
   protected $query;
    
private function __construct(){
    $this->query = @new mysqli(
          $this->host_name,
          $this->user_name,
          $this->user_pass,
          $this->db_name
    ); 
}

 
  public static function connect(){
       if(!isset(self::$connect)){// we
        self::$connect = new Db;//create new if dont resultok
       } 
       return self::$connect;//if have already  our db return it
  }


  public function query(){
       return $this->query;
  }
    
}

//   $mydb = db::connect(); //reulte  1 
//   echo $mydb->query();
// echo "<br>";//we try take
// $mydb2 = db::connect();//also result 1
// echo $mydb2->query();
// die;
// $t = new db;
// $t->text('dfsdf');
// echo "<br>";
// $t = new db;
// $t->text('454564646');