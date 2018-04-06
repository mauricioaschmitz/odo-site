<?php
header ('Content-type: text/html; charset=iso-8859-1');
if (isset($_POST['search'])) {
  $response = "";

  $connection = new mysqli('localhost', 'root', '', 'coletor');
  $q = $connection->real_escape_string($_POST['q']);

  $sql = $connection->query("SELECT * FROM paciente WHERE nome = '".$_POST['q']."' OR prontuario = '".$_POST['q']."'");

  if ($sql->num_rows > 0) {
    while ($data = $sql->fetch_array())
      $response .= $data['id'].'--'.$data['nome'].'--'.$data['nascimento'].'--'.$data['prontuario'];
  }

  exit($response);
}
?>