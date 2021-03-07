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
        <a href="/transportadora/v4/index.php"><button>Home</button></a>
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
            <?php foreach($clientes as $cliente){ ?>
            <tr>
                <td><?php echo $cliente['idcliente']; ?></td>
                <td><?php echo $cliente['cliente']; ?></td>
                <td><?php echo $cliente['cpfcnpj']; ?></td>
                <td><?php echo $cliente['cep']; ?></td>
                <td><?php echo $cliente['endereco']; ?></td>
                <td><?php echo $cliente['numero']; ?></td>
                <td><?php echo $cliente['bairro']; ?></td>
                <td><?php echo $cliente['estado']; ?></td>
                <td><?php echo $cliente['cidade']; ?></td>
                <td><?php echo $cliente['telefone']; ?></td>
                <td><?php echo $cliente['email']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>