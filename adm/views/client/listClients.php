<h1>Lista de Clientes</h1>
<table class="table">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Mensagem</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($arrayClientes as $cliente){
        ?>
            <tr>
                <td><?=$cliente["idClient"]?></td>
                <td><?=$cliente["nome"]?></td>
                <td><?=$cliente["email"]?></td>
                <td><?=$cliente["mensagem"]?></td>
                <td><a class="btn btn-warning" href="?c=c&a=uc&id=<?= $cliente["idClient"] ?>">Editar</a></td>
                <td><a class="btn btn-danger" href="?c=c&a=dc&id=<?= $cliente["idClient"] ?>">Deletar</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>