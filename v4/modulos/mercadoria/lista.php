<html>
    <head>
    </head>

    <?php
    $mercadorias = array();

    $mercadorias[] = array("idmercadoria" => 1, "mercadoria" => "Espelho", "peso" => 0.6,
    "fragil" => "Sim", "tipoenvio" => "Expresso");
    
    $mercadorias[] = array("idmercadoria" => 2, "mercadoria" => "M4 Mechanical Shock", "peso" => 3.0,
    "fragil" => "Não", "tipoenvio" => "Expresso");
    
    $mercadorias[] = array("idmercadoria" => 3, "mercadoria" => "300 Reis FC", "peso" => 0.1,
    "fragil" => "Sim", "tipoenvio" => "Normal");
    
    $mercadorias[] = array("idmercadoria" => 4, "mercadoria" => "RTX 3090", "peso" => 1.4,
    "fragil" => "Sim", "tipoenvio" => "Expresso");

    $mercadorias[] = array("idmercadoria" => 5, "mercadoria" => "Xiaomi Mi 9t Pro", "peso" => 0.2,
    "fragil" => "sim", "tipoenvio" => "Normal");
    ?>
    
    <body>
        <h1>Lista de Mercadorias</h1>
        <a href="/transportadora/v4/index.php"><button>Home</button></a>
        <a href="formulario.php"><button>Voltar</button></a>
        <h2>Lista</h2>
        <table>
            <tr>
                <th>Nº Registro</th>
                <th>Mercadoria</th>
                <th>Peso</th>
                <th>Fragil</th>
                <th>Tipo de Envio</th>
            </tr>
            <?php foreach($mercadorias as $mercadoria){ ?>
            <tr>
                <td><?php echo $mercadoria['idmercadoria']; ?></td>
                <td><?php echo $mercadoria['mercadoria']; ?></td>
                <td><?php echo $mercadoria['peso']; ?></td>
                <td><?php echo $mercadoria['fragil']; ?></td>
                <td><?php echo $mercadoria['tipoenvio']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>