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
            <?php foreach($funcionarios as $funcionario){ ?>
            <tr>
                <td><?php echo $funcionario['idfuncionario']; ?></td>
                <td><?php echo $funcionario['funcionario']; ?></td>
                <td><?php echo $funcionario['cpf']; ?></td>
                <td><?php echo $funcionario['estado']; ?></td>
                <td><?php echo $funcionario['cidade']; ?></td>
                <td><?php echo $funcionario['telefone']; ?></td>
                <td><?php echo $funcionario['email']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>