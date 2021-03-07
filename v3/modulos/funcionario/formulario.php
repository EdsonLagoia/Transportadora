<html>
    <head>
    </head>
    <body>
        <h1>Funcionário</h1>
        <p>Área de registro de funcionários contratados</p>
        <a href="/transportadora/v3/index.php"><button>Voltar</button></a>
        <a href="lista.php"><button>Lista</button></a>
        <h2>Formulário</h2>
        <form name="formFuncionario" action="dados.php" method="post">
            <p>Nº Registro: <input type="text" name="idfuncionario" size=10/></p>
            <p>Funcionário:</br>
            <input type="text" name="nome" size=32 placeholder="Nome"/>
            <input type="text" name="cpf" size=20 placeholder="CPF"/></p>
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