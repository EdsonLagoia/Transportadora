<html>
    <body>
        <h1>Dados do Status de Envio</h1>
        <a href="/transportadora/v4/index.php"><button>Home</button></a>
        <a href="formulario.php"><button>Voltar</button></a>
        <a href="lista.php"><button>Lista</button></a><br>
        <?php 
            echo "Nº Registro: " . $_POST['idstatusenvio'];
            echo nl2br("\nNº Resgistro do Envio: " . $_POST['idenvio']);
            echo nl2br("\nStatus: " . $_POST['status']);
        ?>
    </body>
</html>