<html>
    <head>
    </head>
    <body>

        <?php
            $envios = array();

            $envios[] = array("idenvio" => 1, "idmercadoria" => 3, "destinatario" => "Eduarda Barros",
            "cep" => "02247857", "endereco" => "Rodovia Aviação", "numero" => "8574-7", "bairro" => "Belo Jardim",
            "estado" => "Rio Grande do Norte", "cidade" => "Natal", "telefone" => 84908215362);

            $envios[] = array("idenvio" => 2, "idmercadoria" => 5, "destinatario" => "Daniel Santos",
            "cep" => "31545821", "endereco" => "Travessa Flora", "numero" => "1558", "bairro" => "Jardins",
            "estado" => "Goiás", "cidade" => "Goiânia", "telefone" => 62958742315);

            $envios[] = array("idenvio" => 3, "idmercadoria" => 4, "destinatario" => "Carlos Eduardo",
            "cep" => "54541565", "endereco" => "Rua Campinas", "numero" => "587", "bairro" => "Centro",
            "estado" => "São Paulo", "cidade" => "São José dos Campos", "telefone" => 11923687538);
   
            $envios[] = array("idenvio" => 4, "idmercadoria" => 1, "destinatario" => "José Andrade",
            "cep" => "68926300", "endereco" => "Rodovia Diniz", "numero" => "258", "bairro" => "Fortaleza",
            "estado" => "Amapá", "cidade" => "Santana", "telefone" => 96984000547);
    
            $envios[] = array("idenvio" => 5, "idmercadoria" => 2, "destinatario" => "Edson Lagoia",
            "cep" => "68910684", "endereco" => "Rua General Rondon", "numero" => "12", "bairro" => "Centro",
            "estado" => "Amapá", "cidade" => "Macapá", "telefone" => 96991257853);
        ?>

        <h1>Lista de Envios</h1>
        <a href="/transportadora/v4/index.php"><button>Home</button></a>
        <a href="formulario.php"><button>Voltar</button></a>
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
            <?php foreach($envios as $envio){ ?>
            <tr>
                <td><?php echo $envio['idenvio']; ?></td>
                <td><?php echo $envio['idmercadoria']; ?></td>
                <td><?php echo $envio['destinatario']; ?></td>
                <td><?php echo $envio['cep']; ?></td>
                <td><?php echo $envio['endereco']; ?></td>
                <td><?php echo $envio['numero']; ?></td>
                <td><?php echo $envio['bairro']; ?></td>
                <td><?php echo $envio['estado']; ?></td>
                <td><?php echo $envio['cidade']; ?></td>
                <td><?php echo $envio['telefone']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>