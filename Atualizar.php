<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .log{
            display: none;
        }
    </style>
    <form method="post" action="Atualizar.php">
        <P>Nome de quem deja editar</P>
        <input type="text" name="altname">
        <P>Nome</P>
        <input type="text" name="nome">
        <p>Senha</p>
        <input type="password" name="senha">
        <button  name="btn">cadastrar</button>
        
    </form>
    <div class="log">
    <?php
 include("conexao.php");

$nome = $_POST["nome"];
$senha = $_POST["senha"];
$altname = $_POST["altname"];

$sql  = " UPDATE usuarios SET Nome = '$nome', Senha = '$senha' WHERE Nome = '$altname'";

if(mysqli_query($con, $sql)){
    echo "alterado";
}else{
    echo "nao cadastrado";
}
mysqli_close($con);


?>
    </div>
</body>
</html>
