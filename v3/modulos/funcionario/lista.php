<html>
    <head>
    </head>
    <body>

        <?php
            $funcionarios = array();

            $funcionarios[] = array("idfuncionario" => 1, "funcionario" => "Estevão", "cpf" => "32544876511",
            "estado" => "Distrito Federal", "cidade" => "Brasília", "telefone" => 61998477454, "email" => "estevao@email.net");
            
            $funcionarios[] = array("idfuncionario" => 2, "funcionario" => "Carlos", "cpf" => "23423423401",
            "estado" => "Roraima", "cidade" => "Boa Vista", "telefone" => 95985785612, "email" => "carlos@email.com");
            
            $funcionarios[] = array("idfuncionario" => 3, "funcionario" => "Fernando", "cpf" => "75315985251",
            "estado" => "Acre", "cidade" => "Rio Branco", "telefone" => 68956483574, "email" => "fernando@email.com");
            
            $funcionarios[] = array("idfuncionario" => 4, "funcionario" => "Roberto", "cpf" => "42569899412",
            "estado" => "Distrito Federal", "cidade" => "Brasília", "telefone" => 61923574012, "email" => "roberto@email.com.br");    

            $funcionarios[] = array("idfuncionario" => 5, "funcionario" => "Abraão", "cpf" => "25845675119",
            "estado" => "Bahia", "cidade" => "Salvador", "telefone" => 71985743257, "email" => "abraao@email.edu.br");
        ?>

        <h1>Lista de Funcionários</h1>
        <a href="/transportadora/v3/index.php"><button>Menu</button></a>
        <a href="formulario.php"><button>Voltar</button></a>
        <h2>Lista</h2>
        <table>
            <tr>
                <th>Nº Registro</th>
                <th>Funcionário</th>
                <th>CPF</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Telefone</th>
                <th>Email</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Estevão</td>
                <td>32544876511</td>
                <td>Distrito Federal</td>
                <td>Brasília</td>
                <td>61998477454</td>
                <td>estevao@email.net</td>
                </tr>
            <tr>
                <td>2</td>
                <td>Carlos</td>
                <td>23423423401</td>
                <td>Roraima</td>
                <td>Boa Vista</td>
                <td>95985785612</td>
                <td>carlos@email.com</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Fernando</td>
                <td>75315985251</td>
                <td>Acre</td>
                <td>Rio Branco</td>
                <td>68956483574</td>
                <td>fernando@email.com</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Roberto</td>
                <td>42569899412</td>
                <td>Distrito Federal</td>
                <td>Brasília</td>
                <td>61923574012</td>
                <td>roberto@email.com.br</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Abraão</td>
                <td>25845675119</td>
                <td>Bahia</td>
                <td>Salvador</td>
                <td>71985743257</td>
                <td>abraao@email.edu.br</td>
            </tr>
        </table>
    </body>
</html>