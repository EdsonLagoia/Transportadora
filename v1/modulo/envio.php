<html>
    <head>
    </head>
    <body>
    <h1>Envio</h1>
        <p>Área para identificar o destinatário da mercadoria</p>
        <a href="/transportadora/v1/index.php"><button>Voltar</button></a>
        <h2>Lista</h2>
        <table>
            <tr>
                <th>Nº Registro</th>
                <th>Nº Registro da Mercadoria</th>
                <th>Destinatário</th>
                <th>CEP</th>
                <th>Endereço</th>
                <th>Número</th>
                <th>Bairro</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Telefone</th>
            </tr>
            <tr>
                <th>1</th>
                <th>3</th>
                <th>Eduarda Barros</th>
                <th>02247-857</th>
                <th>Rodovia Aviação</th>
                <th>8574-7</th>
                <th>Belo Jardim</th>
                <th>Rio Grande do Norte</th>
                <th>Natal</th>
                <th>(84)90821-5362</th>
            </tr>
            <tr>
                <th>2</th>
                <th>5</th>
                <th>Daniel Santos</th>
                <th>31545-821</th>
                <th>Travessa Flora</th>
                <th>1558</th>
                <th>Jardins</th>
                <th>Goiânia</th>
                <th>Goiás</th>
                <th>(62)95874-2315</th>
            </tr>
            <tr>
                <th>3</th>
                <th>4</th>
                <th>Carlos Eduardo</th>
                <th>54541-565</th>
                <th>Rua Campinas</th>
                <th>587</th>
                <th>Centro</th>
                <th>São José dos Campos</th>
                <th>São Paulo</th>
                <th>(11)92368-7538</th>
            </tr>
            <tr>
                <th>4</th>
                <th>1</th>
                <th>José Andrade</th>
                <th>68926-300</th>
                <th>Rodovia Diniz</th>
                <th>258</th>
                <th>Fortaleza</th>
                <th>Santana</th>
                <th>Amapá</th>
                <th>(96)98400-0547</th>
            </tr>
            <tr>
                <th>5</th>
                <th>2</th>
                <th>Edson Lagoia</th>
                <th>68910-684</th>
                <th>Rua General Rondon</th>
                <th>12</th>
                <th>Centro</th>
                <th>Macapá</th>
                <th>Amapá</th>
                <th>(96)99125-7853</th>
            </tr>
        </table>
        <h2>Formulário</h2>
        <form>
            <p>Nº Registro: <input type="text" name="idenvio" size=10/></p>
            <p>Nº Registro da Mercadoria: <input type="text" name="idmercadoria" size=10/></p>
            <p>Destinatário:</br>
            <input type="text" name="nome" size=32 placeholder="Destinatário"/>
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
            <input type="text" name="telefone" size=10 placeholder="Telefone"/></p>
            <input type="submit" name="btn_salvar" value="Salvar"/>
            <input type="reset" name="btn_cancelar" value="Cancelar"/>
        </form>
    </body>
</html>