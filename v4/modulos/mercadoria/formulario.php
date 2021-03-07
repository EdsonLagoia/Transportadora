<html>
    <head>
    </head>
    <body>
        <h1>Mercadoria</h1>
        <p>Área de registro de mercadorias para envios, identificando o tipo de envio e a fragilidade, além do local para ser enviado</p>
        <a href="/transportadora/v4/index.php"><button>Voltar</button></a>
        <a href="lista.php"><button>Lista</button></a>
        <h2>Formulário</h2>
        <form name="formMercadoria" action="dados.php" method="post">
            <p>Nº Registro: <input type="text" name="idmercadoria" size=10/></p>
            <p>Mercadoria:  <input type="text" name="mercadoria" size=25/></p>
            <p>Peso: <input type="text" name="peso" size=5/> KG</p>
            <p>Fragil:</br>
            <input type="radio" name="fragil" value="Sim"/>Sim
            <input type="radio" name="fragil" value="Não"/>Não</p>
            <p>Tipo de Envio:</br>
            <input type="radio" name="tipoenvio" value="Normal"/>Normal
            <input type="radio" name="tipoenvio" value="Expresso"/>Expresso</p>
            <input type="submit" name="btn_salvar" value="Salvar"/>
            <input type="reset" name="btn_cancelar" value="Cancelar"/>
        </form>
    </body>
</html>