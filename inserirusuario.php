<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">

  <title>Usuário</title>

  <!-- Bootstrap core CSS -->
  <link href="style/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="style/css/inserir.css" rel="stylesheet">

</head>
<?php
include_once('style/include/head.php');
include_once("system/controller/ControllerUsuario.control.php");
$usuario[0]['id_usuario'] = "";
$usuario[0]['nome'] = "";
$usuario[0]['email'] = "";
$usuario[0]['senha'] = "";
$usuario[0]['action'] = "insert";
if(isset($_GET['id'])){
  $cu = new ControllerUsuario();
  $u = new Usuario();
  $u->setId_usuario($_GET['id']);
  $u = $u->objectToArray();
  $usuario = $cu->actionControl('selectOne',$u);
  $usuario[0]['action'] = "update";
}
?>

<div class="container">

  <div class="starter-template">


    <form method="POST" action="system/services/usuario.php" enctype="multipart/form-data">
      <input type="hidden" name="acao" value="inserir">
      <div class="form-group row">
        <label for="prontuario" class="col-md-12 col-form-label font-weight-bold">DADOS DO USUÁRIO</label>
      </div>

      <div class="form-group row">
        <label for="prontuario" class="col-md-2 col-form-label">E-mail</label>
        <div class="col-md-10">
          <input class="form-control" type="email" value="<?php echo $usuario[0]['email']; ?>" name="email" id="email" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="prontuario" class="col-md-2 col-form-label">Nome</label>
        <div class="col-md-10">
          <input class="form-control" type="text" value="<?php echo $usuario[0]['nome']; ?>" name="nome" id="nome" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="prontuario" class="col-md-2 col-form-label">Senha</label>
        <div class="col-md-10">
          <input class="form-control" type="password" value="" name="senha1" id="senha1" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="prontuario" class="col-md-2 col-form-label">Confirmação de senha</label>
        <div class="col-md-10">
          <input class="form-control" type="password" value="" name="senha2" id="senha2" required>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-5">
          <input type="hidden" value="<?php echo $usuario[0]['action']; ?>" name="action" required>
          <input type="hidden" value="<?php echo $usuario[0]['senha']; ?>" name="senhaAnt" required>
          <input type="hidden" value="<?php echo $usuario[0]['id_usuario']; ?>" name="id_usuario" required>
        </div>
        <div class="col-md-2">
          <input class="form-control btn btn-success" type="submit" value="Enviar" name="button" onclick="return senhas();" required>
        </div>
      </div>
      
    </form>
  </div>

</div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="style/docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="style/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="style/docs/assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="style/js/src/inserir.js"></script>

    <script>
      function senhas(){
        var senha1 = $("#senha1").val();
        var senha2 = $("#senha2").val();
        if(senha1 != senha2){
          alert("A confirmação de senha não corresponde à senha.");
          return false;
        } else{
          return true;
        }
      }
    </script>
    <?php
    if(isset($_GET['erro'])){
      echo "<script>alert('O e-mail informado já está cadastrado no sistema.');</script>";
    }
    ?>
  </body>
  </html>