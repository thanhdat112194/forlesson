<?php
session_start();
include_once("insertClass.php");
include_once("val.php");
sleep(2); 
// //ajax
$date = json_decode($_POST['data']);
// $newfile = fopen("newjson.json","w");
// // fclose($newfile);
file_put_contents("newjson.json",json_encode($date));



if(json_decode($_POST['data']))://if we check and our b true it mean  dont empty post ok oki
foreach (json_decode($_POST['data']) as $key=>$v):

      $val = new myval($v->user->name,"name");
      $val2 = new myval($v->user->pass,"password");
      $val3 = new myval($v->user->mail,"email");
      if(($val->names&&$val2->password&&$val3->email)==false)://but here true right?what
        echo "<div class='alert alert-danger' role='alert'>";
        echo "you have an  error";
        echo "</div>";
         if($_POST['#remember'] =="truecookie"):
            $arr_cookie = [$v->user->name,$v->user->username,$v->user->mail,$v->user->pass];
            // echo $v->$user
            setcookie("newcookie",serialize($arr_cookie),time()+1000,"/");
         endif;
        //  echo($v->user->name);
            die;
     endif;
     
// if($_POST['#remember'] =="truecookie"){
//     $arr_cookie = [$_POST['n'],$_POST['u'],$_POST['e'],$_POST['p']];
//     setcookie("newcookie",serialize($arr_cookie),time()+200,"/");
//     // setcookie("newcookie",serialize($arr_cookie),time()+10000,"/")

// }
// echo (jsondecode($_POST['data']));
     echo "<div class='alert alert-success' role='alert'>";
     echo "success";
     echo "</div>";
//endval
   $prof = new prof(    
             $v->user->name,
             $v->user->username,
             $v->user->mail,
             $v->user->pass
            
  );
$prof->insert();



endforeach;
endif;
    die;

//     $v = new myval($_POST['n'],"name");
//     $v2 = new myval($_POST['p'],"password");
//     $v3 = new myval($_POST['m'],"email"); 
//     if(($v->name&&$v2->password&&$v3->email)===false)://but here true right?what
//        //alert message ok
//       echo   "<div class='alert alert-danger' role='alert'>";
//       echo "you have an  error";
//      echo "</div>";
//      die();
// endif;
//     $prof = new prof(    
//         $_POST['n'],
//         $_POST['s'],
//         $_POST['m'],
//         $_POST['p']
// );
//     $prof->insert();

    


    ////ail true ok
  


// endif;


//endajax
//  endif;   

//form 
// if(isset($_POST['submit'])){
//     // echo $_POST['username'];
//     // echo "form summited";
//     $v = new myval($_POST['name'],"name");//we create one method this method check all 
//     $v2 = new myval($_POST['password'],"password");
//     $v3 = new myval($_POST['email'],"email"); 
//    //no we dont chenk hii //we just you it when we check ??

//    if (($v->name&&$v2->password&&$v3->email)===false):
//        $_SESSION['regerror']="error registration";
//          header("location: regis.php");
//          die();
//         endif;
  
//   $prof = new prof(
//         $_POST['name'],
//         $_POST['username'],
//         $_POST['email'],
//         $_POST['password']
//   );
//   $prof->insert();//here
   if($_POST['remember']=="truecookie"){
       $arr_cookie = [$_POST['name'],$_POST['username'],$_POST['email']]; 
    // $arr_cookie = ["hello","world","butrrrrrr"];
    //now our need create cookietry
     setcookie("newcookie",serialize($arr_cookie),time()+10000,"/");// why you serialize
    }



//     }
        
        // vardump($v3)
    

//we dont put on the localhost php admin  
?>

<!-- 
// $v = new Login($_POST['username'],"name");

//         $v2 = new Login($_POST['password'],"password");
//         $v3 = new Login($_POST['email'],"email");
//         if($v->name&&$v2->password&&$v3->email){
//             $prof = new prof(
//                 $_POST['username'],
//                 $_POST['password'],
//                 "asdasdasd",
//                 $_POST['email'],

//             );
//             $prof->insert();
//         }else{
//             echo "false";
//         } -->

