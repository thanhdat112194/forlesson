<?php

 var_dump($_COOKIE['namecookie']);



?>


<?php include("header.php"); ?>



<div class="main__reg">

<div id="ajaxresult">
</div>


<?php if(isset($_SESSION['regMessage'])): ?>
<div class="alert alert-success" role="alert">
    <?php  
         echo  $_SESSION['regMessage']; 
         unset($_SESSION['regMessage']);//delete session
     ?>  
</div>
<?php  endif;  ?>


<?php if(isset($_SESSION['ErConnection'])): ?>
<div class="alert alert-danger" role="alert">
  <?php    
      echo $_SESSION['ErConnection'];
      unset($_SESSION['ErConnection']);
  
  ?>
</div>
<?php  endif;  ?>




<?php if(isset($_SESSION['regerror'])): ?>
    <div class="alert alert-danger" role="alert">
    <?php    
          echo $_SESSION['regerror'];
          unset($_SESSION['regerror']);
      ?>
  </div>
  <?php  endif;  ?>






<div class="container">

    <div class="jumbotron disable">
    
  <!-- <form action="control.php" method="POST" class="px-4 py-3"> -->
  <!-- 
    you  should change in ajax  all form ok ok i have a question
    
   -->
  <a href="formlogin.php">HOME</a>
  <div class="form-group">
  <div class="row col-sm-3 load" >
  <p>please waiting ....</p>
  <img src="https://www.ashland.edu/sites/all/themes/ashlandecard/2014card/images/load.gif" alt="" width="80px" higth="auto">
</div>
      <label for="exampleDropdownFormEmail1">name</label> 
      <input type="text" id="name" class="form-control" 
      id="exampleDropdownFormEmail1" placeholder="name" value="
      <?php
         if(isset($_COOKIE['newcookie']))://it dont working 
          $names =  unserialize($_COOKIE['newcookie']);//its return our array
           echo $names[0];//why here name[0]
         endif;//omg:<<2 min free ok take a rest 2 minute
      ?>">
  </div>
    <div class="form-group">
      <label for="exampleDropdownFormEmail1">Username</label>
      <input type="text" id="username" class="form-control" id="exampleDropdownFormEmail1" placeholder="username"
      value="
      <?php
         if(isset($_COOKIE['newcookie'])):
          $surname =  unserialize($_COOKIE['newcookie']);
           echo $surname[1];//why here not [0]
         endif;
      ?>
      
      ">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormPassword1">email</label>
      <input type="text" id="email" class="form-control" id="exampleDropdownFormPassword1" placeholder="email"
      value="
      <?php
         if(isset($_COOKIE['newcookie'])):
          $password =  unserialize($_COOKIE['newcookie']);
           echo $password[2];
         endif;
      ?>
      
     
      
      ">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormPassword1">Password</label>
      <input type="password" id="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
    </div>
 
 <!-- cookies -->
    <label >Remember</label>+
    <input class="remember" name="remember" type="checkbox" value="truecookie">

    <br>
    <button type="submit"  id="but"  class="btn btn-warning">Sign in</button>
   
  <!-- </form> -->

  </div>
</div>
<!-- main -->
</div>
<script src="js/main.js" type="module"></script>
<?php include("footer.php"); ?>