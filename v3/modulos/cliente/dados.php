<html>
    <body>
        <h1>Dados do Cliente</h1>
        <a href="/transportadora/v3/index.php"><button>Menu</button></a>
        <a href="formulario.php"><button>Voltar</button></a>
        <a href="lista.php"><button>Lista</button></a><br>
        <?php 
            echo "Nº Registro: " . $_POST['idcliente'];
            echo nl2br("\nNome/Empresa: " . $_POST['nome']);
            echo nl2br("\nCPF/CNPJ: " . $_POST['cpfcnpj']);
            echo nl2br("\nCEP: " . $_POST['cep']);
            echo nl2br("\nEndereço: " . $_POST['logradouro'] . ", " . $_POST['numero'] . " - " . $_POST['bairro']);
            echo nl2br("\nEstado: " . $_POST['estado']);
            echo nl2br("\nCidade: " . $_POST['cidade']);
            echo nl2br("\nTelefone: " . $_POST['telefone']);
            echo nl2br("\nEmail: " . $_POST['email']);
        ?>
    </body>
</html>