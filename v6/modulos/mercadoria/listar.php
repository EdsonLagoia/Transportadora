<h1>Lista de Mercadorias</h1></br>
<table>
    <tr>
        <th>Nº de Registro</th>
        <th>Nº do Remetente</th>
        <th>Mercadoria</th>
        <th>Peso</th>
        <th>Fragil</th>
    </tr>
    <?php
        include('classes/Mercadoria.class.php');

        $lists = Mercadoria::listar();

        if($lists){
            foreach($lists as $list){
    ?>
    <tr>
        <td><?php echo $list->getIdmercadoria(); ?></td>
        <td><?php echo $list->getIdremetentepk(); ?></td>
        <td><?php echo $list->getMercadoria(); ?></td>
        <td><?php echo $list->getPeso(); ?></td>
        <td><?php echo $list->getFragil(); ?></td>
    </tr>
    <?php
            }
        }else{
            echo "<tr><td colspan='5'> Nenhum Registro Encontrado.</td></tr>";
        }
    ?>
</table>