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
        .img{
            border: solid 1px white;
            box-shadow: 4px  8px 10px black;
            border-radius: 10px;
            transform: translateX(80px)translateY(100px);
            background-repeat: no-repeat;
            background-size: cover;
            height: 250px;
            width: 450px;
           
        }
        .h1{
            position: absolute;
            transform: translateY(-120px)translateX(600px);
            font-size: 38px;
        }
        .img2{
            position: absolute;
            transform: translateX(100px)translateY(220px);
        }
        .img3{
            position: absolute;
            transform: translateX(-420px)translateY(220px);
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
                <li><a href="" >Home</a></li>
                <li><a href="cadastrar.php" >Pedido</a></li>
                <li><a href="About.php" >Quem Somos</a></li>
                <li><a href="Contato.php" > Contato</a></li>
                
            </ul>
            <button class="btnaction"><img src="p.png"><a href="cadastrar.php">Peça seu lanche</a></button>
           </nav>
        </header>
        <main class="main">
            <div class="bx">
            <img id="imagem"  class="img" src="baixados (1).jpg" alt="">
            <img  onclick="change()" class="img2" src="right-chevron.png">
            <img  onclick="change1()" class="img3" src="left-chevron (1).png">
            
            </div>
            <h1 class="h1">Os melhores lanches e salgados da regiao.<br><br>Sempre acompanhados <br> com a bebida que voce precisa.</h1>
        </main>
    </div>
    <script>
        function change(){
            var list = ["p.png","ppp.jpg"]
             
            var ele = document.getElementById("imagem");
            ele.setAttribute("src", "ppp.jpg")
        }
        function change1(){
            var list = ["p.png","ppp.jpg"]
             
            var ele = document.getElementById("imagem");
            ele.setAttribute("src", "baixados (1).jpg")
        }
    </script>
</body>
</html>