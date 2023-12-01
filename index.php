<!DOCTYPE html>
<html lang="pt-br">

<!--------------------------------------Cabeça--------------------------------------------------> 

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="descrição do site">
        <meta name="author" content="Eliel Henrique">
        <meta name="keywords" content="palavras,separadas,por,virgulas">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">

        <link rel="shortcut icon" type="image-x/png" href="carro-png-12.ico">
        <title>Página Principal</title>
    </head>

<!------------------------------------Fim-Cabeça------------------------------------------------>  

    <body>
        
<!------------------------------------Cabeçalho-------------------------------------------------> 
        <header style="border-bottom: 3px solid #eb2d2d">
            <div class="container">
                <div class="logo">
                    <img src="img/logo.jpg">
                </div><!--logo-->

                <nav class="desktop">
                    <ul>
                        <li><a href="home">Home</a></li>
                        <li><a href="venda">Venda</a></li>
                        <li><a href="sobre">Sobre</a></li>
                        <li><a goto="contato" href="index">Contato</a></li>
                    </ul>
                </nav><!--desktop-->

                <nav class="mobile">
                    <ul>
                        <li><a href="home">Home</a></li>
                        <li><a href="venda">Venda</a></li>
                        <li><a href="sobre">Sobre</a></li>
                        <li><a goto="contato" href="">Contato</a></li>
                    </ul>
                </nav><!--mobile-->

                <div class="clear"></div>
            </div><!--container-->
        </header>

<?php
    if(isset($_GET['url'])){
        if(file_exists($_GET['url']).'.html'){
                include($_GET['url'].'.html');
            }else{
                include('erro.html');
            }      
    }else{
        include('home.html');
    }
?>

<footer>
            <div class="container">
                <nav>
                    <ul>
                        <li><a  href="home">Home</a></li>
                        <li><a href="venda">Venda</a></li>
                        <li><a href="sobre">Sobre</a></li>
                        <li><a goto="contato" href="">Contato</a></li>
                    </ul>
                </nav>
                <p>Todos os direitos reservados!!!</p>
                <div class="clear"></div>
            </div><!--container-->
        </footer>
<!---------------------------------------Fim-Rodapé----------------------------------------------> 

        <script src="js/jquery.js"></script>
        <script src="js/function.js"></script>
        
    </body>
</html>