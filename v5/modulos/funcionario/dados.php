<html>
    <body>
        <h1>Dados do Funiconário</h1>
        <?php 
            echo "Nº Registro: " . $_POST['idfuncionario'];
            echo nl2br("\nNome: " . $_POST['nome']);
            echo nl2br("\nCPF: " . $_POST['cpf']);
            echo nl2br("\nEstado: " . $_POST['estado']);
            echo nl2br("\nCidade: " . $_POST['cidade']);
            echo nl2br("\nTelefone: " . $_POST['telefone']);
            echo nl2br("\nEmail: " . $_POST['email']);
        ?>
    </body>
</html>