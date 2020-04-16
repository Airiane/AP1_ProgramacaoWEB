<h3 class="separar">Lista de Clientes</h3><br /> 
<table class="table">
    <thead>
        <tr>
            <th class="alinhar">Código</th>
            <th class="alinhar">Nome</th>
            <th class="alinhar">Email</th>
            <th class="alinhar">Mensagem</th>
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
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>