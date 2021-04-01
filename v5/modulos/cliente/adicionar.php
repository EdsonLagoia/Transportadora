<html>
    <head>
    </head>
    <body>
        <h1>Cliente</h1>
        <p>Área de registro do cliente</p>
        <h2>Formulário</h2>
        <form name="formCliente" action="dados.php" method="post">
            <p>Nº Registro: <input type="text" name="idcliente" size=10/></p>
            <p>Cliente:</br>
            <input type="text" name="nome" size=32 placeholder="Nome/Empresa"/>
            <input type="text" name="cpfcnpj" size=20 placeholder="CPF/CNPJ"/></p>
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
            <input type="text" name="telefone" size=10 placeholder="Telefone"/>
            <input type="text" name="email" size=20 placeholder="Email"/></p>
            <p>Senha:</br>
            <input type="password" name="senha" siza=30 minlength="6" placeholder="Crie sua senha"/>
            <input type="password" name="senha" siza=15 minlength="6" placeholder="Confirme sua senha"/></p>
            <input type="submit" name="btn_salvar" value="Salvar"/>
            <input type="reset" name="btn_cancelar" value="Cancelar"/>
        </form>
    </body>
</html>