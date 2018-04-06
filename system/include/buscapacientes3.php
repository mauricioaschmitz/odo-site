<?php
  header ('Content-type: text/html; charset=iso-8859-1');
  if (isset($_POST['search'])) {
    $response = "<ul><li>Nenhum paciente encontrado!</li></ul>";

    $connection = new mysqli('localhost', 'root', '', 'coletor');
    $q = $connection->real_escape_string($_POST['q']);

    $sql = $connection->query("SELECT * FROM paciente WHERE prontuario LIKE '%$q%'");
    if ($sql->num_rows > 0) {
      $response = "<ul>";

      while ($data = $sql->fetch_array())
        $response .= "<li>" . $data['prontuario'] . "</li>";

      $response .= "</ul>";
    }


    exit($response);
  }
?>