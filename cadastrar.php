


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        body{
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        .container{
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 15vh  85vh ;
        }
        .header{
            grid-row-start: 1;
            grid-row-end: 2;
            background-color: #edf6f9;
        }
        .main{
            grid-row-start: 2;
            grid-row-end: 3;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ffbe0b;
        }
        nav{
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
        .menu{
            display: flex;
            align-items: center;
            margin-top: 60px;
            gap: 20px;
            list-style: none;

        }
        .menu a{
            text-decoration: none;
            color: black;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            padding-bottom: 14px;
        
        }
        .menu a:hover{
            border-bottom:solid 2px black;
        }
        .btnaction{
            height: 50px;
            width: 200px;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            background-color: #ffbe0b;
            border: none;
            border-radius: 5px;
        }
        .btnaction a{
            text-decoration: none;
            color: black;
        }
        .log{
            display: none;
        }
        .card{
            height: 500px;
            width: 400px;
            background-color: #edf6f9;
            border-radius: 5px;
            

        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-left:10px ;
            align-items: center;
            
        }
        input{
            width: 200px;
            border-radius: 5px;
        }
        .btn{
            width: 200px;
            height: 30px;
            border:none;
            border-radius: 5px;
            background-color: #ffbe0b;
            transform: translateY(30px);
            font-size: 18px;
            cursor: pointer;
        }
        select{
            width: 200px;
            border-radius: 5px;
            border: solid 1px black;
        }
        span{
            display: flex;
            gap: 10px;
            align-items: center;
        }
        .btna{
            height: 50px;
            width: 200px;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            background-color: #ffbe0b;
            border: none;
            border-radius: 5px;
        }
        .btna a {
            text-decoration: none;
            color: black;
            
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
           <nav>
            <span>
            <img class="logo" src="fast-food (1).png">
            <h1>MF LANCHES</h1>
            </span>
            <ul class="menu">
                <li><a href="Index.php" >Home</a></li>
                <li><a href="cadastrar.php" >Pedido</a></li>
                <li><a href="About.php" >Quem Somos</a></li>
                <li><a href="Contato.php" > Contato</a></li>
                
            </ul>
            <span>
              <button class="btnaction"><img src="p.png"><a href="#">Peça seu lanche</a></button>
              <button class="btna"><img src="p.png"><a href="Listar.php">Lista de pedidos</a></button>
              </span>
           </nav>
        </header>
        <main class="main">
        <div class="card">
        <form method="post" action="cadastrar.php">
        <P>Nome</P>
        <input type="text" name="nome">
        <p>Endereço</p>
        <input type="text" name="endereço">
        <P>Lanche</P>
      <select name="lanche">
        <?php
          include("conexao.php");
          $sql  ="SELECT * FROM lanches ORDER BY Id";
          $result = mysqli_query($con, $sql);
          while($data = mysqli_fetch_assoc($result)){
           
            echo "<option  name='lanche' >" .$data['Nome']. "</option>";
           
           
        }
        
        
        
        
         ?>
         </select>
        <p>Bebida</p>
        <input type="text" name="bebida">
        <p>Forma de Pagamento</p>
        <input type="text" name="pag">
        <?php
    
         
         
      

         ?>
        <button class="btn"  name="btn">Realizar pedido</button>
    </form>
        </div>
    <div class="log">
    <?php
include("conexao.php");

$nome = $_POST["nome"];
$endereço = $_POST["endereço"];
$lacnhe = $_POST["lanche"];
$bebida = $_POST["bebida"];
$pag = $_POST["pag"];

$sql  ="INSERT INTO pedidos(Nome, Endereço, Lanche, Bebida, Pag ) VALUES ('$nome', '$endereço', '$lacnhe', '$bebida', '$pag' )";

if($nome != null){
   mysqli_query($con, $sql);
}else{
    echo "nao cadastrado".mysqli_connect_errno($con);
}
mysqli_close($con);


?>

    </div>
        </main>
    </div>
    <script>

    </script>
</body>
</html>