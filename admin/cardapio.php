<?php
if (isset($login_cookie)) {
    $cod_eve = $_POST['cod_evento'];
    
    if($cod_eve != ''){
        
    }else {
        $cod_eve = 1;
    }
    ?>
    <div class="card mb-3">
        <?php include './filtro_por_evento.php'; ?>
        <div class="card-body">
            <a href="?url=adc_cardapio.php" title="Novo <?= $menu; ?>"><i class="fa fa-2x pb-2 pl-2 fa-plus-square"></i></a>
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Cardápio</th>
                            <th>Tipo</th>
                            <th>Nome do Item</th>
                            <th>Valor (Do Item)</th>
                            <th>Descrição do Item</th>
                            <th>Imagem</th>
                            <th>Editar | Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../conexao.php';

                        $selectCardapio = "SELECT * FROM tb_cardapio as c, tb_cardapio_tipo as ct, tb_item as i, tb_evento as e, tb_tipo_item as ti
                                            where e.cod_cardapio = c.cod_cardapio
                                            and c.cod_cardapio = ct.cod_cardapio
                                            and ct.cod_item = i.cod_item
                                            and i.cod_tipo_item = ti.cod_tipo_item
                                            and e.cod_evento = '$cod_eve'";

                        $queryCardapio = $pdo->query($selectCardapio);

                        while ($dados = $queryCardapio->fetch()) {
                            $cod = $dados['cod_item'];
                            $cod_c = $dados['cod_cardapio'];
                            $cardapio = $dados['titulo_cardapio'];
                            $tipo = $dados['descricao_tipo_item'];
                            $nomeItem = $dados['nome_item'];
                            $valorItem = $dados['valor_item'];
                            $descricaoItem = $dados['descricao_item'];
                            $img = $dados['img_item'];
                            ?>
                            <tr>
                                <td><?= $cardapio; ?></td>
                                <td><?= $tipo; ?></td>
                                <td><?= $nomeItem; ?></td>
                                <td><?= $valorItem; ?></td>
                                <td><?= $descricaoItem; ?></td>
                                <td><?= $img; ?></td>
                                <td>
                                    <a href="?url=edit_cardapio.php&id=<?= $cod; ?>&c=<?= $cod_c; ?>" title="EDITAR"><i class="fa fa-2x fa-edit pr-3 pl-3"></i></a>
                                    <a href="?url=excBD_cardapio.php&id=<?= $cod; ?>" title="EXCLUIR"><i class="fa fa-2x fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php } ?>