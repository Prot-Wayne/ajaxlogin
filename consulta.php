<?php
  include("config/db.php");
//$user = $result->fetch_array();
  if(isset($_POST['item'])){

    $item = $_POST['item'];
    $query = "select * from user where nombre like '$item%'";
    $result = $con->query($query);

    if(mysqli_num_rows($result)>0){
      foreach($result as $u){
          $var = $u['nombre']."<br>";
        }
    }else{
      $var = "No hay resultados";
    }

  }
  echo $var;

 ?>
