$(document).ready(function(){
  $("#submit").click(function(e){
    e.preventDefault();
    var nombre = $("#nom").val();
    var password = $("#pass").val();

    //var params = $("#formulario").serialize();
    var params = {
      "nom":nombre,
      "pass":password
    }

    $.ajax({
      url:"validar.php",
      data:params,
      type:"post",
      beforeSend:function(){
        $("#loading").attr('href','cargando.gif');
      },
      success:function(response){
        if(response == "1"){
          alert('welcome');
          //$(location).attr('href','index.php');
          $("#loading").html("");
        }else if(response == "2"){
          $("#msg1").fadeIn(6000,function(){
            $("#msg1").html("<p class='alert alert-danger'>Error de contraseña</p>")
          })
          //alert('error contraseña');
          $("#loading").html("");
        }else{
          $("#msg2").fadeIn(6000,function(){
            $("#msg2").html("<p class='alert alert-danger'>Usuario No existe</p>")
          })
          $("#loading").html("");
        }


      }
    })

  })
})

$("#btn").click(function(){
  var item = $("#busqueda").val();
  alert(item);

  $.ajax({
    url: "consulta.php",
    type: "post",
    data:{item: item},
    dataype: "html",
    success:function(response){
      $("#resultado").html(response);
    }
  })
})

$(document).ready(function(){
  $("#busqueda").keyup(function(){
    var item = $(this).val();
    $.ajax({
      url: "consulta.php",
      type: "post",
      data:{item: item},
      dataype: "html",
      success:function(response){
        $("#resultado").html(response);
      }
    })
  })
})
