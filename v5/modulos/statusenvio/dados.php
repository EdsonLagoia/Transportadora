<html>
    <body>
        <h1>Dados do Status de Envio</h1>
        <?php 
            echo "Nº Registro: " . $_POST['idstatusenvio'];
            echo nl2br("\nNº Resgistro do Envio: " . $_POST['idenvio']);
            echo nl2br("\nStatus: " . $_POST['status']);
        ?>
    </body>
</html>