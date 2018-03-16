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

  <title>Lista de usuários</title>

  <!-- Bootstrap core CSS -->
  <link href="style/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="style/css/inserir.css" rel="stylesheet">
</head>
<?php
include_once('style/include/head.php');
$cu = new ControllerUsuario();
if(!isset($_GET['pagina'])){
  $pagina = 1;
} else{
  $pagina = $_GET['pagina'];
}
$usuarios = $cu->actionControl("selectAllPag", $pagina);
$num_usuarios = $cu->actionControl("contarUsuarios");
$num_paginas = ceil($num_usuarios[0]['valor']/10);

$x1 = "";
$x2 = "";
if($pagina == 1){
  $x1 = "disabled";
}
if($pagina == $num_paginas){
  $x2 = "disabled";
}

if($num_paginas > 5){
  $paginas = array();
  if($pagina <= 3){
    $paginas = array(1,2,3,4,5);
  } else if(($num_paginas-$pagina) < 3){
    $y = $num_paginas-4;
    while($y <= $num_paginas){
      $paginas[] = $y;
      $y++;
    }
  } else{
    $paginas = array($pagina-2,$pagina-1,$pagina,$pagina+1,$pagina+2);

  }
} else{
  $paginas = array();
  $y = 1;
  while($y <= $num_paginas){
    $paginas[] = $y;
    $y++;
  }
}
?>

<div class="container">

  <div class="starter-template">
    <h1>Usuários</h1>

    <div class="row">
      <div class="col-lg-12" style="text-align: left;">
        <table class="table">
          <thead class="thead-inverse">
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>E-mail</th>
              <th>Alterar</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach($usuarios as $usu){
              echo '<tr><td>'.$usu['id_usuario'].'</td><td>'.$usu['nome'].'</td><td>'.$usu['email'].'</td><td><a href="inserirusuario.php?id='.$usu['id_usuario'].'">Alterar</a> / <a href="system/services/usuario.php?action=delete&id='.$usu['id_usuario'].'" onclick="return confirm(\'Você deseja deletar o item '.$usu['nome'].'? \');">Apagar</a></td></tr>';
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <nav aria-label="...">
      <ul class="pagination">
        <li class="page-item <?php echo $x1; ?>">
          <a class="page-link" href="listausuarios.php?pagina=<?php echo $pagina-1; ?>" tabindex="-1" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Anterior</span>
          </a>
        </li>
        <?php
        foreach ($paginas as $pag) {
          if($pag == $pagina){
            echo '<li class="page-item active"><a class="page-link" href="#">'.$pag.' <span class="sr-only">(current)</span></a></li>';
          } else{
            echo '<li class="page-item"><a class="page-link" href="listausuarios.php?pagina='.$pag.'">'.$pag.'</a></li>';
          }
        }
        ?>
        <li class="page-item <?php echo $x2; ?>">
          <a class="page-link" href="listausuarios.php?pagina=<?php echo $pagina+1; ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Próximo</span>
          </a>
        </li>
      </ul>
    </nav>

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

    <script type="text/javascript">
      function sure(nome){
        return confirm('Você deseja deletar o item "'+nome+'?"');
      }
    </script>
  </body>
  </html>              

