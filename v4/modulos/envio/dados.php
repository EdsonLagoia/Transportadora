<html>
    <body>
        <h1>Dados do Envio</h1>
        <a href="/transportadora/v4/index.php"><button>Home</button></a>
        <a href="formulario.php"><button>Voltar</button></a>
        <a href="lista.php"><button>Lista</button></a><br>
        <?php 
            echo "Nº Registro: " . $_POST['idenvio'];
            echo nl2br("\nNº Registro da Mercadoria: " . $_POST['idmercadoria']);
            echo nl2br("\nDestinatário: " . $_POST['nome']);
            echo nl2br("\nCEP: " . $_POST['cep']);
            echo nl2br("\nEndereço: " . $_POST['logradouro'] . ", " . $_POST['numero'] . " - " . $_POST['bairro']);
            echo nl2br("\nEstado: " . $_POST['estado']);
            echo nl2br("\nCidade: " . $_POST['cidade']);
            echo nl2br("\nTelefone: " . $_POST['telefone']);
        ?>
    </body>
</html>