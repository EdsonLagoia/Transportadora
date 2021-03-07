<html>
    <head>
    </head>
    <body>
    <h1>Envio</h1>
        <p>Área para identificar o destinatário da mercadoria</p>
        <a href="/transportadora/v4/index.php"><button>Voltar</button></a>
        <a href="lista.php"><button>Lista</button></a>
        <h2>Formulário</h2>
        <form name="formEnvio" action="dados.php" method="post">
            <p>Nº Registro: <input type="text" name="idenvio" size=10/></p>
            <p>Nº Registro da Mercadoria: <input type="text" name="idmercadoria" size=10/></p>
            <p>Destinatário:</br>
            <input type="text" name="nome" size=32 placeholder="Destinatário"/>
            <p>CEP:</br>
            <input type="text" name="cep" size="8" maxlength="8"/></p>
            <p>Endereço:</br>
            <input type="text" name="logradouro" size=32 placeholder="Logradouro"/>
            <input type="text" name="numero" size=6 maxlength="6" placeholder="Numero"/>
            <input type="text" name="bairro" size=15 placeholder="Bairro"/></p>
            <p>Cidade:</br>
            <input type="text" name="estado" size=20 placeholder="Estado"/>
            <input type="text" name="cidade" size=20 placeholder="Cidade"/></p>
            <p>Contato:</br>
            <input type="text" name="telefone" size=10 placeholder="Telefone"/></p>
            <input type="submit" name="btn_salvar" value="Salvar"/>
            <input type="reset" name="btn_cancelar" value="Cancelar"/>
        </form>
    </body>
</html>