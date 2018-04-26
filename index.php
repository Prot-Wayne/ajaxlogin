<?php include("config/db.php") ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
			  crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="scripts.js"></script>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-6">
          <form class="" action="" method="post" id="formulario">
            <input class="form-control" type="text" name="nom" id="nom"value=""><p id="msg2"></p><br>
            <input class="form-control" type="password" name="pass" id="pass" value=""><p id="msg1"></p><br>
            <input type="submit" name="submit" id="submit" value="Validar" class="btn btn-success btn-block">
          </form>
          <img id="loading" src="" alt="">
          <?php
            $query = "select * from user";
            $result = $con->query($query);
           ?>
           <?php foreach($result as $row): ?>
             <?php echo $row['id']." ".$row['nombre'] ?><br>
           <?php endforeach; ?>
        </div>
        <div class="col-md-6">
          <input type="text" name="busqueda" id="busqueda" value=""><button type="button" name="button" id="btn">Try</button>
          <div class="resultado" id="resultado">

          </div>
        </div>
      </div>
    </div>


  </body>
</html>
