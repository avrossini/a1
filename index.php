<?php include("cabecalho.php");
include("logica-usuario.php");


if(isset($_SESSION["success"])){?>
    <p class="alert-success text-center"><?=$_SESSION["success"]?></a>
    <?php 
    unset($_SESSION["success"]);
}


if(isset($_SESSION["danger"])){?>
    <p class="alert-danger text-center"><?=$_SESSION["danger"]?></a>
    <?php 
    unset($_SESSION["danger"]);
}?>


<h1>Bem Vindo!</h1>

<?php if(usuarioEstaLogado()){?>
    <p class="text-success">Você está logado como <?=usuarioLogado()?></p>
    <p> <a href="logout.php">Sair</a></p>
    <?php
} else {
?>
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <table class="table table-hover">
            <tr>
                <td>Login:</td>
                <td><input class="form-control" type="email" name="email"></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input class="form-control "type="password" name="senha"></td>
            </tr>
            <tr>
                <td><button class="btn btn-primary">Login</button></td>
            </tr>
        </table>
    </form>
<?php
}
include("footer.php");?>