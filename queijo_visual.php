<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roscas Osório</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/receitas.css">
</head>
<body>
    
    <!-- MENU -->
    <nav>
        <a href="index.html">
            <img class="menu_logo" src="images/Logo.png" alt="Roscas Osorio">
        </a>

        <!-- DESKTOP -->
        <div class="menu_links" id="menu_desktop">
            <a href="index.html">Home</a>
            <a href="form.html">Seu negócio</a>
        </div>

        <!-- MOBILE -->
        <div class="menu_links clickable" id="menu_mobile" onClick='toggleSidebar()'>
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </div>
        <div class="sidebar" id="sidebar">
            <a href="index.html">Home</a>
            <a href="form.html">Seu negócio</a>
            <p onClick='toggleSidebar()' class="clickable">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                    <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                </svg>
            </p>
        </div>
    </nav>

    <?php
        if(isset($_GET['quant']) && !empty($_GET['quant'])) {
            $ovo = ceil($_GET['quant'] / 7.5);
        } else {
            $ovo = 8;
        }
        $doce = $ovo * 125;
        $azedo = $ovo * 62.5;
        $sal = $ovo * 1.5;   
        $manteiga = $ovo * 25;
        $agua = $ovo * 50;
        $leite = $ovo * 50;
        $queijo = $ovo * 50;
        $rendimento = ceil($ovo * 7.5);
        $preparo = $ovo * 0.75;
        $cozimento = $ovo * 2.5;
    ?>

    <!-- MAIN -->
    <main>
        <h1 class="title">PÃO DE QUEIJO</h1>

        <div class="receita">
            <ul>
                <li class="receita_linha">
                    <p>
                        <?php echo $rendimento ?>
                        &nbsp
                        <div class="imagem_pequena img_container">
                            <img alt="paes de queijo" src="images/queijo/paodequeijo.png"></img>
                        </div>
                    </p>
                </li>
                <br>
                <li class="receita_linha">
                    <p>
                        <?php echo $preparo ?> min
                        &nbsp
                        <div class="imagem_pequena img_container">
                            <img alt="de preparo" src="images/queijo/misturar.gif"></img>
                        </div>
                    </p>
                </li>
                <br>
                <li class="receita_linha">
                    <p>
                        <?php echo $cozimento ?> min
                        &nbsp
                        <div class="imagem_pequena img_container">
                            <img alt="de cozimento" src="images/queijo/forno2.jpg"></img>
                        </div>
                    </p>
                </li>
            </ul>

            <h3 class="subtitle">  Ingredientes: </h3>
            <ul>
                <li class="receita_linha">
                    <?php echo $azedo ?>g
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="polvilho azedo" src="images/queijo/polvilho.png"></img>
                    </div>
                </li>
                <br>
                <li class="receita_linha">
                    <p>
                    <?php echo $doce ?>g   
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="polvilho doce" src="images/queijo/polvilho-doce.jpg"></img>
                    </div>
                    </p>
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $sal ?>g                   
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="sal" src="images/queijo/sal.jpg"></img>
                    </div>    
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $leite ?>ml     
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="leite" src="images/queijo/leite.png"></img>
                    </div>     
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $manteiga ?>g
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="manteiga" src="images/queijo/manteiga.png"></img>
                    </div>
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $agua ?> ml
                    &nbsp  
                    <div class="imagem_pequena img_container">
                        <img alt="água" src="images/queijo/agua.png"></img>
                    </div>     
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $ovo ?> 
                    &nbsp  
                    <div class="imagem_pequena img_container">
                        <img alt="ovo" src="images/queijo/ovo.png"></img>
                    </div>     
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $queijo ?> 
                    &nbsp  
                    <div class="imagem_pequena img_container">
                        <img alt="queijo ralado" src="images/queijo/queijo-ralado.png"></img>
                    </div>     
                </li>
            </ul>
            <br>

            <h3 class="subtitle">Preparo:</h3>
            <ol>
                <li class="receita_linha">
                    1.&nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="agua" src="images/queijo/agua.png"></img>
                    </div>
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="manteiga" src="images/queijo/manteiga.png"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="panela" src="images/queijo/panela.jpeg"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="derreter" src="images/queijo/panela-manteiga.png"></img>
                    </div> 
                </li>
                <br>

                <li class="receita_linha">
                    2.&nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="polvilho azedo" src="images/queijo/polvilho.png"></img>
                    </div>
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="polvilho doce" src="images/queijo/polvilho-doce.jpg"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="bacia" src="images/queijo/bacia1.png"></img>
                    </div> 
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="misturar" src="images/queijo/misturar.gif"></img>
                    </div> 
                </li>
                <br>

                <li class="receita_linha">
                    3.&nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="bacia" src="images/queijo/bacia1.png"></img>
                    </div>
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="mistura da panela" src="images/queijo/panela-manteiga.png"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="misturar" src="images/queijo/misturar.gif"></img>
                    </div> 
                </li>
                <br>

                <li class="receita_linha">
                    4.&nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="bacia" src="images/queijo/bacia1.png"></img>
                    </div>
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="agua" src="images/queijo/agua.png"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="sal" src="images/queijo/sal.jpg"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="ovo" src="images/queijo/ovo.png"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="leite" src="images/queijo/leite.png"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="queijo ralado" src="images/queijo/queijo-ralado.png"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="misturar" src="images/queijo/misturar.gif"></img>
                    </div> 
                </li>
                <br>

                <li class="receita_linha">
                    5.&nbsp
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="geladeira" src="images/queijo/geladeira.jpg"></img>
                    </div> 
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="40 minutos " src="images/queijo/40minutos.png"></img>
                    </div> 
                </li>
                <br>

                <li class="receita_linha">
                    6. &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="bolinhas" src="images/queijo/forma.png"></img>
                    </div> 
                </li>
                <br>

                <li class="receita_linha">
                    7. &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="bolinhas" src="images/queijo/forma.png"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="forno" src="images/queijo/forno2.jpg"></img>
                    </div> 
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="20 minutos" src="images/queijo/20_minutos.png"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="paes de queijo" src="images/queijo/paodequeijo.png"></img>
                    </div> 
                </li>
                <br>

            </ol>
            <br><br>
        </div>
    </main>
    <script src="sidebar.js"></script>
</body>
</html>