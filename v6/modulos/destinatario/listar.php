<h1>Lista de Destinatários</h1></br>
<table>
    <tr>
        <th>Nº de Registro</th>
        <th>Destinatário</th>
        <th>CPF</th>
        <th>CEP</th>
        <th>Logradouro</th>
        <th>Número</th>
        <th>Bairro</th>
        <th>Estado</th>
        <th>Cidade</th>
        <th>Telefone</th>
        <th>Email</th>
    </tr>
    <?php
        include('classes/Destinatario.class.php');

        $lists = Destinatario::listar();

        if($lists){
            foreach($lists as $list){
    ?>
    <tr>
        <td><?php echo $list->getIddestinatario(); ?></td>
        <td><?php echo $list->getDestinatario(); ?></td>
        <td><?php echo $list->getCpf(); ?></td>
        <td><?php echo $list->getCep(); ?></td>
        <td><?php echo $list->getLogradouro(); ?></td>
        <td><?php echo $list->getNumero(); ?></td>
        <td><?php echo $list->getBairro(); ?></td>
        <td><?php echo $list->getEstado(); ?></td>
        <td><?php echo $list->getCidade(); ?></td>
        <td><?php echo $list->getTelefone(); ?></td>
        <td><?php echo $list->getEmail(); ?></td>
    </tr>
    <?php
            }
        }else{
            echo "<tr><td colspan='11'> Nenhum Registro Encontrado.</td></tr>";
        }
    ?>
</table>