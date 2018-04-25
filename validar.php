<?php
  include("config/db.php");


  if(isset($_POST)){
    $nom = $_POST['nom'];
    $pass = $_POST['pass'];

    $query = "select * from user where nombre = '$nom'";
    $result = $con->query($query);
    if(mysqli_num_rows($result)>0 ){
      $user = $result->fetch_array();
      if($pass == $user['password']){
        echo  "1";
      }else{
        echo "2";
      }
    }else{
      echo "3";
    }
  }

 ?>
