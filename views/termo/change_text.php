<?php
    require_once '../../resources/validacao.php';
    require_once  'change.php';
    require_once '../../resources/database.php';
    $db = new Database('localhost', 5432, 'textos', 'postgres', 'Suehtam24');
    $conn = $db->conn;
 ?>
<?php
    if ($conn) {
      $sql = "SELECT texto FROM texto_modificar WHERE id_texto = 1";
      $sql2 = "SELECT nome FROM pessoa where id_pessoa = 1";
      $result = pg_query($conn, $sql);
      $result2 = pg_query($conn, $sql2);

      if ((pg_num_rows($result) > 0) && (pg_num_rows($result2))){
        while ($row = pg_fetch_assoc($result)) {
          $texto = $row['texto'];
        }

        while ($row = pg_fetch_assoc($result2)) {
          $nome = $row['nome'];
        }


      /*  while ($row=pg_fetch_row($result,$i)) {
          for($j=0; $j < count($row); $j++) {
             $rowtexto = $row[$j];
          }
        }
          while ($row=pg_fetch_row($result2,$r)) {
              for($k=0; $k < count($row); $k++) {
                 $rownome = $row[$k];
              }


        }
        /*$row = pg_fetch_row($sql,'1');
        $row2 = pg_fetch_row($sql2,'1');*/
        echo $texto;
        echo "</br> <b>Mudou para:</b> </br>";

        $teste = new Change_termo();
        echo $teste->change_now($nome,$texto,'_nome_');
        echo "</br>";
      }
    }else {
      pg_close($conn);
    }
/*
******************testes***********************
    print Validacao::validaCPF('02479860205');
    echo "</br>";

    Validacao::validaEmail('davi.fiusa@ifro.edu.br');
*/
 ?>
