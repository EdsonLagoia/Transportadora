<html>
    <head>
    </head>
    <body>

        <?php
            $statusenvios = array();

            $statuenvios[] = array("idstatusenvio" => 1, "idenvio" => 5, "status" => "Chegou na unidade de destino");
            
            $statuenvios[] = array("idstatusenvio" => 2, "idenvio" => 1, "status" => "Entregue");
            
            $statuenvios[] = array("idstatusenvio" => 3, "idenvio" => 4, "status" => "Postado");
            
            $statuenvios[] = array("idstatusenvio" => 4, "idenvio" => 2, "status" => "Saiu para a entrega");

            $statuenvios[] = array("idstatusenvio" => 5, "idenvio" => 3, "status" => "Voltando para o remetente");
        ?>

        <h1>Status de Envio</h1>
        <a href="/transportadora/v4/index.php"><button>Home</button></a>
        <a href="formulario.php"><button>Voltar</button></a>
        <h2>Lista</h2>
        <table>
            <tr>
                <th>Nº Registro</th>
                <th>Nº Registro do Envio</th>
                <th>Status do Envio</th>
            </tr>
            <?php foreach($statusenvios as $statusenvio){ ?>
            <tr>
                <td><?php echo $statusenvio['idstatusenvio']; ?></td>
                <td><?php echo $statusenvio['idenvio']; ?></td>
                <td><?php echo $statusenvio['status']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>