<?php include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");

$id = $_GET["id"];
$produto = buscaProduto($id, $conexao);

$categorias = listaCategorias($conexao);
$usado = $produto["usado"]?"checked=checked":"";
?>
	<h1>Alterando Produto</h1>
	<form action="altera-produto.php" method="post">
            <input type="hidden" name="id" value="<?=$produto['id']?>">
            <table class='table'>
                <tr>
                    <td>Nome</td>
                    <td><input class="form-control" type="text" name="nome" value=<?=$produto["nome"]?>></td>
                </tr>
                <tr>
                    <td>Preço</td>
                    <td> <input class="form-control" type="text" name="preco" value=<?=$produto["preco"]?>></td>
                </tr>
                <tr>
                    <td>Descrição</td>
                    <td> <textarea class="form-control" type="text" name="descricao"><?=$produto["descricao"]?></textarea>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="usado" value="true" <?=$usado?></td> Usado
                </tr>
                <tr>
                    <td>Categoria</td>
                    <td> 
                        <select name="categoria_id" class="form-control">
                            <?php foreach($categorias as  $categoria):
                                $categoriaSelecionada = ($produto['categoria_id']==$categoria['id']);
                                $selecao=$categoriaSelecionada?"selected=selected":"";
                                ?>
                            <option value="<?=$categoria['id']?>" <?=$selecao?>> <?=$categoria['nome']?></option>
                            <?php endforeach;?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input class="btn-primary" type="submit" name="Alterar"></td>
                    <td></td>
                </tr>
            </table>
	</form>
<?php include("footer.php")?>