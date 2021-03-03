<html>
    <head>
    </head>
    <body>
        <h1>Entregador</h1>
        <p>Área de registro de entregadores contratados</p>
        <a href="/transportadora/v2/index.php"><button>Voltar</button></a>
        <h2>Lista</h2>
        <table>
            <tr>
                <th>Nº Registro</th>
                <th>Entregador</th>
                <th>CPF</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Telefone</th>
                <th>Email</th>
            </tr>
            <tr>
                <th>1</th>
                <th>Estevão</th>
                <th>325.448.765-11</th>
                <th>Distrito Federal</th>
                <th>Brasília</th>
                <th>(61)99847-7454</th>
                <th>estevao@email.net</th>
                </tr>
            <tr>
                <th>2</th>
                <th>Carlos</th>
                <th>234.234.234-01</th>
                <th>Boa Vista</th>
                <th>Roraima</th>
                <th>(95)98578-5612</th>
                <th>carlos@email.com</th>
            </tr>
            <tr>
                <th>3</th>
                <th>Fernando</th>
                <th>753.159.852-51</th>
                <th>Rio Branco</th>
                <th>Acre</th>
                <th>(68)95648-3574</th>
                <th>fernando@email.com</th>
            </tr>
            <tr>
                <th>4</th>
                <th>Roberto</th>
                <th>425.698.994-12</th>
                <th>42850-000</th>
                <th>Rua Maranhão</th>
                <th>(61)99847-7454</th>
                <th>roberto@email.com.br</th>
            </tr>
            <tr>
                <th>5</th>
                <th>Abraão</th>
                <th>258.456.751-19</th>
                <th>Salvador</th>
                <th>Bahia</th>
                <th>(71)98574-3257</th>
                <th>abraaoo@email.edu</th>
            </tr>
        </table>
        <h2>Formulário</h2>
        <form name="formEntregador" action="entregador.php" method="post">
        <p>Nº Registro: <input type="text" name="identregador" size=10/></p>
            <p>Entregador:</br>
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
        <?php 
            echo "Nº Registro: " . $_POST['identregador'];
            echo nl2br("\nNome: " . $_POST['nome']);
            echo nl2br("\nCPF: " . $_POST['cpf']);
            echo nl2br("\nEstado: " . $_POST['estado']);
            echo nl2br("\nCidade: " . $_POST['cidade']);
            echo nl2br("\nTelefone: " . $_POST['telefone']);
            echo nl2br("\nEmail: " . $_POST['email']);
        ?>
    </body>
</html>