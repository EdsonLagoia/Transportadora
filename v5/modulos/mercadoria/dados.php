<html>
    <body>
        <h1>Dados da Mercadoria</h1>
        <?php 
            echo "Nº Registro: " . $_POST['idmercadoria'];
            echo nl2br("\nMercadoria: " . $_POST['mercadoria']);
            echo nl2br("\nPeso: " . $_POST['peso'] . "Kg");
            echo nl2br("\nFragil: " . $_POST['fragil']);
            echo nl2br("\nTipo de Envio: " . $_POST['tipoenvio']);
        ?>
    </body>
</html>