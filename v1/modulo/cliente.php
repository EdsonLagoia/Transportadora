<html>
    <head>
    </head>
    <body>
        <h1>Cliente</h1>
        <p>Área de registro do cliente</p>
        <a href="/transportadora/v1/index.php"><button>Voltar</button></a>
        <h2>Lista</h2>
        <table>
            <tr>
                <th>Nº Registro</th>
                <th>Cliente</th>
                <th>CPF/CNPJ</th>
                <th>CEP</th>
                <th>Endereço</th>
                <th>Número</th>
                <th>Bairro</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Telefone</th>
                <th>Email</th>
            </tr>
            <tr>
                <th>1</th>
                <th>Eduardo</th>
                <th>123.456.789-10</th>
                <th>02468-642</th>
                <th>Av. Campos</th>
                <th>30</th>
                <th>Paraíso</th>
                <th>São Paulo</th>
                <th>São Paulo</th>
                <th>(11)99342-9919</th>
                <th>eduardo@email.com</th>
            </tr>
            <tr>
                <th>2</th>
                <th>AirGuns</th>
                <th>12.345.678/0000-01</th>
                <th>55255-444</th>
                <th>Travessa Bela Vista</th>
                <th>1456</th>
                <th>Horizonte</th>
                <th>Curitiba</th>
                <th>Paraná</th>
                <th>(46)98413-0024</th>
                <th>contato@airguns.com</th>
            </tr>
            <tr>
                <th>3</th>
                <th>NumisCoin</th>
                <th>58.956.000/0458-51</th>
                <th>68903-430</th>
                <th>Rua Professor Caramuru</th>
                <th>358</th>
                <th>Zerão</th>
                <th>Amapá</th>
                <th>Macapá</th>
                <th>(96)98142-5060</th>
                <th>moedas@NumisCoin.com</th>
            </tr>
            <tr>
                <th>4</th>
                <th>André</th>
                <th>425.698.994-12</th>
                <th>42850-000</th>
                <th>Rua Maranhão</th>
                <th>58-A</th>
                <th>Cristo Rei</th>
                <th>Bahia</th>
                <th>Dias D'avila</th>
                <th>(71)99702-0475</th>
                <th>andre@email.com</th>
            </tr>
            <tr>
                <th>5</th>
                <th>Renan</th>
                <th>652.012.448-01</th>
                <th>98547-422</th>
                <th>Av. 7 de Setembro</th>
                <th>9984</th>
                <th>Centro</th>
                <th>Rio de Janeiro</th>
                <th>Rio de Janeiro</th>
                <th>(21)93254-2514</th>
                <th>renan@email.com.br</th>
            </tr>
        </table>
        <h2>Formulário</h2>
        <form>
            <p>Nº Registro: <input type="text" name="idcliente" size=10/></p>
            <p>Cliente:</br>
            <input type="text" name="nome" size=32 placeholder="Nome/Empresa"/>
            <input type="text" name="cpfcnpj" size=20 placeholder="CPF/CNPJ"/></p>
            <p>CEP:</br>
            <input type="text" name="cep" size="5" maxlength="5"> - <input type="text" name="cep2" size="3" maxlength="3"/></p>
            <p>Logradouro:</br>
            <input type="text" name="logradouro" size=32 placeholder="Endereço"/>
            <input type="text" name="numero" size=6 maxlength="6" placeholder="Numero"/>
            <input type="text" name="numero" size=15 placeholder="Bairro"/></p>
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