<?php 
include "db.php";
@session_start();
class  prof{

private $name;
private $surname;
private $email;
private $pass;
private $database;
public function __construct($n,$u,$e,$p){// $n =  $_POST['name'], 
    $this->name = $n;
    $this->surname = $u;
    $this->email =$e;
    $this->pass = $p;
    $this->database =  Db::connect(); // we take our db you here? yes stil;l watch  

}
private function hash($pass){
  return  $pass = password_hash($pass,PASSWORD_DEFAULT);// this is password_has name or funtion
}

public function insert(){
 
   
     

      //   $_SESSION['ErConnection']="Error connection".mysqli_connect_error();
      //   header("location: regis.php");
      //  die("sdsds");i 
  $this->pass = $this->hash($this->pass);
  $insert_db = "INSERT INTO test(name,username,email,pass)\n".
   "values(\"$this->name\",\"$this->surname \",\"$new->email\",\"$this->pass\")";
     mysqli_query($this->database->query(),$insert_db);
     mysqli_close($this->database->query());//do you have document about this
     if ($this->database->query()->connect_error) {
      $_SESSION['ErConnection']="Error connection";
      header("location: regis.php");
      
        die();
    }
     $_SESSION['regMessage'] = "successful registration";
     header("location: regis.php");
      
}


}


// $prof =  new prof(
//       "Tom",
//        "tomso",
//        "dfsdfdfdf"
   

// );
// 






?>