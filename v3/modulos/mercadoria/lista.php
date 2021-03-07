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
        <a href="/transportadora/v3/index.php"><button>Menu</button></a>
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
            <tr>
                <td>1</td>
                <td>Espelho</td>
                <td>0,6 Kg</td>
                <td>Sim</td>
                <td>Expresso</td>
            </tr>
            <tr>
                <td>2</td>
                <td>M4 Mechanical Shock</td>
                <td>3,0 Kg</td>
                <td>Não</td>
                <td>Expresso</td>
            </tr>
            <tr>
                <td>3</td>
                <td>300 Reis FC</td>
                <td>0,1 Kg</td>
                <td>Sim</td>
                <td>Normal</td>
            </tr>
            <tr>
                <td>4</td>
                <td>RTX 3090</td>
                <td>1,4 Kg</td>
                <td>Sim</td>
                <td>Expresso</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Xiaomi Mi 9t Pro</td>
                <td>0,2 Kg</td>
                <td>Sim</td>
                <td>Normal</td>
            </tr>
        </table>
    </body>
</html>