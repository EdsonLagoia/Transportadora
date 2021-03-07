<html>
    <body>
        <h1>Dados do Status de Envio</h1>
        <a href="/transportadora/v3/index.php"><button>Menu</button></a>
        <a href="formulario.php"><button>Voltar</button></a>
        <a href="lista.php"><button>Lista</button></a><br>
        <?php 
            echo "Nº Registro: " . $_POST['idstatusenvio'];
            echo nl2br("\nNº Resgistro do Envio: " . $_POST['idenvio']);
            echo nl2br("\nStatus: " . $_POST['status']);
        ?>
    </body>
</html>