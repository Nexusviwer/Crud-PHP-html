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
            background-color: #ffbe0b;
            display: flex;
            align-items: center;
            justify-content: center;
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
        .card{
            height: 400px;
            width: 600px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            background-color: black;
            color: #ffbe0b;
            border-radius: 10px;
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
                <li><a href="Contato.php" >Contato </a></li>
                
            </ul>
            <button class="btnaction"><img src="p.png"><a href="cadastrar.php">Peça seu lanche</a></button>
           </nav>
        </header>
        <main class="main">
            <div class="card">
              <h2>A MF Lanches esta ha 12 anos no mercado<br> sempre ofertando o melhor atendimento e os melhores lanches e salgados.<br>Temos o melhor para amantes de masssas sempre bem feitas e deliciosas</h2>
            </div>
        </main>
    </div>
</body>
</html>