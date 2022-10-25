
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
        main{
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
            width: 100px;
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
        span{
            display: flex;
            gap: 10px;
            align-items: center;
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
                <li><a href="Contato.php" >Contato</a></li>
                
            </ul>
            <span>
              <button class="btnaction"><img src="p.png"><a href="cadastrar.php">Peça seu lanche</a></button>
              <button class="btna"><img src="p.png"><a href="#">Login</a></button>
              </span>
           </nav>
        </header>
        <main>
            <table>
                <thead>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Lanche</th>
                    <th>Bebida</th>
                    <th>Meio de Pagamento</th>
                    <th>Valor</th>
                </thead>
                <tbody>
                <?php
          include("conexao.php");
          $sql  ="SELECT * FROM pedidos ORDER BY Id";
          $result = mysqli_query($con, $sql);
          while($data = mysqli_fetch_assoc($result)){
           echo "<tr>";
            echo "<td name='lanche' >" .$data['Id']. "</td>";
            echo "<td name='lanche' >" .$data['Nome']. "</td>";
            echo "<td name='lanche' >" .$data['Endereço']. "</td>";
            echo "<td name='lanche' >" .$data['Lanche']. "</td>";
            echo "<td name='lanche' >" .$data['Bebida']. "</td>";
            echo "<td name='lanche' >" .$data['Pag']. "</td>";
            echo "<td name='lanche' >" .$data['Valor']. "</td>";
          echo "</tr>";
           
           
        }
         ?>
                </tbody>
            </table>
        </main>
    </div>
</body>