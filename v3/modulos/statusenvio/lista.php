<html>
    <head>
    </head>
    <body>

        <?php
            $statusenvio = array();

            $statuenvio[] = array("idstatusenvio" => 1, "idenvio" => 5, "status" => "Chegou na unidade de destino");
            
            $statuenvio[] = array("idstatusenvio" => 2, "idenvio" => 1, "status" => "Entregue");
            
            $statuenvio[] = array("idstatusenvio" => 3, "idenvio" => 4, "status" => "Postado");
            
            $statuenvio[] = array("idstatusenvio" => 4, "idenvio" => 2, "status" => "Saiu para a entrega");

            $statuenvio[] = array("idstatusenvio" => 5, "idenvio" => 3, "status" => "Voltando para o remetente");
        ?>

        <h1>Status de Envio</h1>
        <a href="/transportadora/v3/index.php"><button>Menu</button></a>
        <a href="formulario.php"><button>Voltar</button></a>
        <h2>Lista</h2>
        <table>
            <tr>
                <th>Nº Registro</th>
                <th>Nº Registro do Envio</th>
                <th>Status do Envio</th>
            </tr>
            <tr>
                <td>1</td>
                <td>5</td>
                <td>Chegou na unidade de destino</td>
            </tr>
            <tr>
                <td>2</td>
                <td>1</td>
                <td>Entregue</td>
            </tr>
            <tr>
                <td>3</td>
                <td>4</td>
                <td>Postado</td>
            </tr>
            <tr>
                <td>4</td>
                <td>2</td>
                <td>Saiu para a entrega</td>
            </tr>
            <tr>
                <td>5</td>
                <td>3</td>
                <td>Voltando para o remetente</td>
            </tr>
        </table>
    </body>
</html>