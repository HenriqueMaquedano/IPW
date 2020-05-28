<?php
            $server = "localhost";
            $user = "root";
            $password = "";
            $dbname = "prova";
            $connect = new mysqli($server, $user, $password, $dbname);
            if($connect -> connect_error)
            {
              die("Fail: " . $conn->connect_error);
            }
  $sql = "SELECT nome, n1, n2, n3, media FROM nota";
            $consultaSQL = $connect->query($sql);
            $row = "n1";
            if ($consultaSQL -> num_rows > 0)

            {
              while ($linha = $consultaSQL -> fetch_assoc())
              {

            echo
                "<br>Notas do Aluno<br>
                <br> Nome: ".$linha['nome']."
                <br> 1ºTrimestre: ".$linha['n1']."
                <br> 2ºTrimestre: ".$linha['n2']."
                <br> 3ºTrimestre: ".$linha['n3']."
                <br> Media Final: ".$linha['media']."<br>";


              }
            }

            else
              {
                echo "Sem resultados";
              }

            $connect->close();

            ?>
