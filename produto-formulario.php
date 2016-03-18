<?php include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");
include("logica-usuario.php");

verificaUsuario();


$categorias = listaCategorias($conexao);
?>
	<h1>Adicionar Produto</h1>
	<form action="adiciona-produto.php" method="post">
            <table class='table'>
                <tr>
                    <td>Nome</td>
                    <td><input class="form-control" type="text" name="nome"></td>
                </tr>
                <tr>
                    <td>Preço</td>
                    <td> <input class="form-control" type="text" name="preco"></td>
                </tr>
                <tr>
                    <td>Descrição</td>
                    <td> <textarea class="form-control" type="text" name="descricao"></textarea>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="usado" value="true"</td> Usado
                </tr>
                <tr>
                    <td>Categoria</td>
                    <td> 
                        <select name="categoria_id" class="form-control">
                            <?php foreach($categorias as  $categoria):?>
                            <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
                            <?php endforeach;?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input class="btn-primary" type="submit" name="Cadastrar"></td>
                    <td></td>
                </tr>
            </table>
	</form>
<?php include("footer.php")?>