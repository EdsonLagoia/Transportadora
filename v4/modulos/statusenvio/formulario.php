<html>
    <head>
    </head>
    <body>
        <h1>Status de Envio</h1>
        <p>Área para ver os status de envio da mercadoria para ver onde mercadoria está</p>
        <a href="/transportadora/v4/index.php"><button>Voltar</button></a>
        <a href="lista.php"><button>Lista</button></a>
        <h2>Formulário</h2>
        <form name="formStatusEnvio" action="dados.php" method="post">
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
    </body>
</html>