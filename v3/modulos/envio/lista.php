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
        <a href="/transportadora/v3/index.php"><button>Menu</button></a>
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
            <tr>
                <td>1</td>
                <td>3</td>
                <td>Eduarda Barros</td>
                <td>02247857</td>
                <td>Rodovia Aviação</td>
                <td>8574-7</td>
                <td>Belo Jardim</td>
                <td>Natal</td>
                <td>Rio Grande do Norte</td>
                <td>84908215362</td>
            </tr>
            <tr>
                <td>2</td>
                <td>5</td>
                <td>Daniel Santos</td>
                <td>31545821</td>
                <td>Travessa Flora</td>
                <td>1558</td>
                <td>Jardins</td>
                <td>Goiás</td>
                <td>Goiânia</td>
                <td>62958742315</td>
            </tr>
            <tr>
                <td>3</td>
                <td>4</td>
                <td>Carlos Eduardo</td>
                <td>54541-565</td>
                <td>Rua Campinas</td>
                <td>587</td>
                <td>Centro</td>
                <td>São Paulo</td>
                <td>São José dos Campos</td>
                <td>11923687538</td>
            </tr>
            <tr>
                <td>4</td>
                <td>1</td>
                <td>José Andrade</td>
                <td>68926300</td>
                <td>Rodovia Diniz</td>
                <td>258</td>
                <td>Fortaleza</td>
                <td>Amapá</td>
                <td>Santana</td>
                <td>96984000547</td>
            </tr>
            <tr>
                <td>5</td>
                <td>2</td>
                <td>Edson Lagoia</td>
                <td>68910684</td>
                <td>Rua General Rondon</th>
                <td>12</td>
                <td>Centro</td>
                <td>Amapá</td>
                <td>Macapá</td>
                <td>96991257853</td>
            </tr>
        </table>
    </body>
</html>