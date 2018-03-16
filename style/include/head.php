
<?php
    session_start();
    include_once "config.php";
    include_once ROOT . "model/Restricted.class.php";
    include_once ROOT . "controller/ControllerUsuario.control.php";

    $restricted = new Restricted();
    $permission = array("admin");
    $cu = new ControllerUsuario();
    $usuario = $cu->actionControl("selectOne",array("id_usuario" => $_SESSION['id_usuario']));
    $restricted->verify($permission);
?>
<body>
	<nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
	  <a class="navbar-brand" href="#">Coletor de dados</a>
	  <ul class="nav navbar-nav">
	    <li class="nav-item active">
	      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="listaexames.php">Ver exames</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="inserir.php">Inserir exame</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="listausuarios.php">Ver usuários</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="inserirusuario.php">Inserir usuário</a>
	    </li>
	  </ul>
	  <p class="navbar-brand" style="margin:0px;float:right;padding:0;">Você está logado(a) como <?php echo $usuario[0]['nome']; ?>.&nbsp;&nbsp;<a class="btn btn-danger" href="system/services/usuario.php?action=logout" style="float:right;">Sair</a> </p>

	</nav>