<html>
    <head>
    </head>
    <body>

        <?php
            $clientes = array();

            $clientes[] = array("idcliente" => 1, "cliente" => "Eduardo", "cpfcnpj" => 12345678910, "cep" => "02458642",
            "endereco" => "Av. Campos", "numero" => "30", "bairro" => "Paraíso", "estado" => "São Paulo",
            "cidade" => "São Paulo", "telefone" => 11993429919, "email" => "eduardo@email.com");
        
            $clientes[] = array("idcliente" => 2, "cliente" => "AirGuns", "cpfcnpj" => 12345678000001, "cep" => "55255444",
            "endereco" => "Travessa Bela Vista", "numero" => "1456", "bairro" => "Horizonte", "estado" => "Paraná",
            "cidade" => "Curitiba", "telefone" => 46984130024, "email" => "contato@airguns.com");

            $clientes[] = array("idcliente" => 3, "cliente" => "NumisCoin", "cpfcnpj" => 58956000045851, "cep" => "68903430",
            "endereco" => "Rua Professor Caramuru", "numero" => "358", "bairro" => "Zerão", "estado" => "Amapá",
            "cidade" => "Macapá", "telefone" => 96981425060, "email" => "moedas@NumisCoin.com");

            $clientes[] = array("idcliente" => 4, "cliente" => "André", "cpfcnpj" => 42569899412, "cep" => "42850000",
            "endereco" => "Rua Maranhão", "numero" => "58-A", "bairro" => "Cristo Rei", "estado" => "Bahia",
            "cidade" => "Dias D'avila", "telefone" => 71997020475, "email" => "andre@email.com");

            $clientes[] = array("idcliente" => 5, "cliente" => "Renan", "cpfcnpj" => 65201244801, "cep" => "98547-422",
            "endereco" => "Av. 7 de Setembro", "numero" => "9984", "bairro" => "Centro", "estado" => "Rio de Janeiro",
            "cidade" => "Rio de Janeiro", "telefone" => 21932542514, "email" => "renan@email.com.br");
        ?>

        <h1>Lista de Clientes</h1>
        <a href="/transportadora/v3/index.php"><button>Menu</button></a>
        <a href="formulario.php"><button>Voltar</button></a>
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
                <td>1</td>
                <td>Eduardo</td>
                <td>12345678910</td>
                <td>02468642</td>
                <td>Av. Campos</td>
                <td>30</td>
                <td>Paraíso</td>
                <td>São Paulo</td>
                <td>São Paulo</td>
                <td>11993429919</td>
                <td>eduardo@email.com</td>
            </tr>
            <tr>
                <td>2</td>
                <td>AirGuns</td>
                <td>12345678000001</td>
                <td>55255444</td>
                <td>Travessa Bela Vista</td>
                <td>1456</td>
                <td>Horizonte</td>
                <td>Paraná</td>
                <td>Curitiba</td>
                <td>46984130024</td>
                <td>contato@airguns.com</td>
            </tr>
            <tr>
                <td>3</td>
                <td>NumisCoin</td>
                <td>58956000045851</td>
                <td>68903430</td>
                <td>Rua Professor Caramuru</td>
                <td>358</td>
                <td>Zerão</td>
                <td>Amapá</td>
                <td>Macapá</td>
                <td>96981425060</td>
                <td>moedas@NumisCoin.com</td>
            </tr>
            <tr>
                <td>4</td>
                <td>André</td>
                <td>42569899412</td>
                <td>42850000</td>
                <td>Rua Maranhão</td>
                <td>58-A</td>
                <td>Cristo Rei</td>
                <td>Bahia</td>
                <td>Dias D'avila</td>
                <td>71997020475</td>
                <td>andre@email.com</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Renan</td>
                <td>65201244801</td>
                <td>98547422</td>
                <td>Av. 7 de Setembro</td>
                <td>9984</td>
                <td>Centro</td>
                <td>Rio de Janeiro</td>
                <td>Rio de Janeiro</td>
                <td>21932542514</td>
                <td>renan@email.com.br</td>
            </tr>
        </table>
    </body>
</html>