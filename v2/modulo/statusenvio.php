<html>
    <head>
    </head>
    <body>
    <h1>Status de Envio</h1>
        <p>Área para ver os status de envio da mercadoria para ver onde mercadoria está</p>
        <a href="/transportadora/v2/index.php"><button>Voltar</button></a>
        <h2>Lista</h2>
        <table>
            <tr>
                <th>Nº Registro</th>
                <th>Nº Registro do Envio</th>
                <th>Status do Envio</th>
            </tr>
            <tr>
                <th>1</th>
                <th>5</th>
                <th>Chegou na unidade de destino</th>
            </tr>
            <tr>
                <th>2</th>
                <th>1</th>
                <th>Entregue</th>
            </tr>
            <tr>
                <th>3</th>
                <th>4</th>
                <th>Postado</th>
            </tr>
            <tr>
                <th>4</th>
                <th>2</th>
                <th>Saiu para a entrega</th>
            </tr>
            <tr>
                <th>5</th>
                <th>3</th>
                <th>Voltando para o remetente</th>
            </tr>
        </table>
        <h2>Formulário</h2>
        <form name="formStatusEnvio" action="statusenvio.php" method="post">
            <p>Nº Registro: <input type="text" name="idstatusenvio" size=10/></p>
            <p>Nº Registro do Envio: <input type="text" name="idenvio" size=10/></p>
            <p>Status do Envio:<br>
            <input type="radio" name="status" value="Postado"/>Postado<br>
            <input type="radio" name="status" value="Saiu da unidade de origem"/>Saiu da unidade de origem<br>
            <input type="radio" name="status" value="Chegou na unidade de destino"/>Chegou na unidade de destino<br>
            <input type="radio" name="status" value="Saiu para a entrega"/>Saiu para a entrega<br>
            <input type="radio" name="status" value="Entregue"/>Entregue<br>
            <input type="radio" name="status" value="Voltando para o remetente"/>Voltando para o remetente<br></p>
            <input type="submit" name="btn_salvar" value="Salvar"/>
            <input type="reset" name="btn_cancelar" value="Cancelar"/>
        </form>
        <?php 
            echo "Nº Registro: " . $_POST['idstatusenvio'];
            echo nl2br("\nNº Resgistro do Envio: " . $_POST['idenvio']);
            echo nl2br("\nStatus: " . $_POST['status']);
        ?>
    </body>
</html>