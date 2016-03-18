<?php 
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

if(isset($_SESSION["success"])){?>
    <p class="alert-success text-center"><?=$_SESSION["success"]?></a>
    <?php 
    unset($_SESSION["success"]);
}?>


<table class="table table-striped table-bordered">
    <?php
    $produtos = listaProdutos($conexao);
    foreach($produtos as $produto){
        ?>
        <tr>
            <td><?=$produto['nome']?></td>
            <td><?=$produto['preco']?></td>
            <td><?=substr($produto['descricao'],0,40) ?></td>
            <td><?=$produto['nome_categoria']?></td>
            <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>" >Alterar</td>
            <td>
                <form action="remove-produto.php" method="post">
                    <input type ="hidden" name="id" value="<?=$produto['id']?>">
                    <button class="btn btn-danger">Remover</button>
                </form>
            
            </td>
        </tr>
        <?php
    }
    ?>
</table>
<?php include("footer.php")?>