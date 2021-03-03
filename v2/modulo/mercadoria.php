<html>
    <head>
    </head>
    <body>
    <h1>Mercadoria</h1>
        <p>Área de registro de mercadorias para envios, identificando o tipo de envio e a fragilidade, além do local para ser enviado</p>
        <a href="/transportadora/v2/index.php"><button>Voltar</button></a>
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
                <th>1</th>
                <th>Espelho</th>
                <th>0,6</th>
                <th>Sim</th>
                <th>Expresso</th>
                </tr>
            <tr>
                <th>2</th>
                <th>M4 Mechanical Shock</th>
                <th>3</th>
                <th>Não</th>
                <th>Expresso</th>
            </tr>
            <tr>
                <th>3</th>
                <th>300 Reis FC</th>
                <th>0,1</th>
                <th>Sim</th>
                <th>Normal</th>
            </tr>
            <tr>
                <th>4</th>
                <th>RTX 3090</th>
                <th>1,4</th>
                <th>Sim</th>
                <th>Expresso</th>
            </tr>
            <tr>
                <th>5</th>
                <th>Xiaomi Mi 9t Pro</th>
                <th>0,2</th>
                <th>Sim</th>
                <th>Normal</th>
            </tr>
        </table>
        <h2>Formulário</h2>
        <form name="formMercadoria" action="mercadoria.php" method="post">
            <p>Nº Registro: <input type="text" name="idmercadoria" size=10/></p>
            <p>Mercadoria:  <input type="text" name="mercadoria" size=25/></p>
            <p>Peso: <input type="text" name="peso" size=5/> KG</p>
            <p>Fragil:</br>
            <input type="radio" name="fragil" value="Sim"/>Sim
            <input type="radio" name="fragil" value="Não"/>Não</p>
            <p>Tipo de Envio:</br>
            <input type="radio" name="tipoenvio" value="Normal"/>Normal
            <input type="radio" name="tipoenvio" value="Expresso"/>Expresso</p>
            <input type="submit" name="btn_salvar" value="Salvar"/>
            <input type="reset" name="btn_cancelar" value="Cancelar"/>
        </form>
        <?php 
            echo "Nº Registro: " . $_POST['idmercadoria'];
            echo nl2br("\nMercadoria: " . $_POST['mercadoria']);
            echo nl2br("\nPeso: " . $_POST['peso']);
            echo nl2br("\nFragil: " . $_POST['fragil']);
            echo nl2br("\nTipo de Envio: " . $_POST['tipoenvio']);
        ?>
    </body>
</html>