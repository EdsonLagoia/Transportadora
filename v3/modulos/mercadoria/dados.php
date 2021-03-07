<html>
    <body>
        <h1>Dados da Mercadoria</h1>
        <a href="/transportadora/v3/index.php"><button>Menu</button></a>
        <a href="formulario.php"><button>Voltar</button></a>
        <a href="lista.php"><button>Lista</button></a><br>
        <?php 
            echo "Nº Registro: " . $_POST['idmercadoria'];
            echo nl2br("\nMercadoria: " . $_POST['mercadoria']);
            echo nl2br("\nPeso: " . $_POST['peso'] . "Kg");
            echo nl2br("\nFragil: " . $_POST['fragil']);
            echo nl2br("\nTipo de Envio: " . $_POST['tipoenvio']);
        ?>
    </body>
</html>