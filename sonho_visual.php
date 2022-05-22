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
            $ovo = round($_GET['quant'] / 40);
        } else {
            $ovo = 2;
        }
        $acucar = $ovo * 90;
        $trigo = $ovo * 500;
        $sal = $ovo * 2.5;
        $maizena = $ovo * 9;
        $leite = $ovo * 500;
        $condensado = $ovo * 200;
        $oleo = $ovo * 60;
        $fermento = $ovo * 5 ;
        $rendimento = ceil($ovo * 40);
        $preparo = $ovo * 30;
        $cozimento = $ovo * 15;
        $leitemorno = $leite / 2;
        $leitefrio = $leitemorno;
    ?>

    <!-- MAIN -->
    <main>
        <h1 class="title">SONHO</h1>

        <div class="receita">
            <ul>
                <li class="receita_linha">
                    <p>
                        <?php echo $rendimento ?>
                        &nbsp
                        <div class="imagem_pequena img_container">
                            <img alt="sonho" src="images/sonho/sonhos.jpg"></img>
                        </div>
                    </p>
                </li>
                <br>
                <li class="receita_linha">
                    <p>
                        <?php echo $preparo ?> min
                        &nbsp
                        <div class="imagem_pequena img_container">
                            <img alt="de preparo" src="images/sonho/misturar.gif"></img>
                        </div>
                    </p>
                </li>
                <br>
                <li class="receita_linha">
                    <p>
                        <?php echo $cozimento ?> min
                        &nbsp
                        <div class="imagem_pequena img_container">
                            <img alt="de cozimento" src="images/sonho/panela.jpg"></img>
                        </div>
                    </p>
                </li>
            </ul>

            <h3 class="subtitle">  Ingredientes: </h3>
            <ul>
                <li class="receita_linha">
                    <?php echo $fermento ?>
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="Gramas de fermento biológico " src="images/sonho/fermento.png"></img>
                    </div>
                </li>
                <br>
                <li class="receita_linha">
                    <p>
                    <?php echo $acucar ?>   
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="Gramas de açucar" src="images/sonho/acucar.jpg"></img>
                    </div>
                    </p>
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $maizena ?>                   
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="margarina" src="images/sonho/maizena.png"></img>
                    </div>    
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $sal ?>     
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="sal" src="images/sonho/sal.jpg"></img>
                    </div>     
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $trigo ?>
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="farinha" src="images/sonho/farinha.png"></img>
                    </div>
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $leite ?> 
                    &nbsp  
                    <div class="imagem_pequena img_container">
                        <img alt="leite" src="images/sonho/leite.jpg"></img>
                    </div>     
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $oleo ?> 
                    &nbsp  
                    <div class="imagem_pequena img_container">
                        <img alt="oleo" src="images/sonho/oleo.png"></img>
                    </div>     
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $condensado ?> 
                    &nbsp  
                    <div class="imagem_pequena img_container">
                        <img alt="condensado" src="images/sonho/condensado.jpg"></img>
                    </div>     
                </li>
            </ul>
            <br>

            <h3 class="subtitle">Preparo:</h3>
            <ol>
                <li class="receita_linha">
                    1.&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$fermento gramas de fermento biológico"?>" alt="fermento" src="images/sonho/fermento.png"></img>
                    </div>
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$leitemorno ml de leite morno"?> "alt="leitemorno" src="images/sonho/leite.jpg"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Leite morno" alt="morno" src="images/sonho/morno.jpg"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Colocar fermento e leite para dissolver" alt="bacia2" src="images/sonho/bacia2.png"></img>
                    </div> 
                </li>
                <br>

                <li class="receita_linha">
                    2.&nbsp
                    +&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$trigo gramas de farinha de trigo "?>" alt="trigo" src="images/sonho/farinha.png"></img>
                    </div>
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$maizena gramas de maizena"?> "alt="maizena" src="images/sonho/maizena.png"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$leitefrio , ml de leite frio"?>" alt="leite" src="images/sonho/leite.jpg"></img>
                    </div>
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$sal gramas de sal"?>" alt="sal" src="images/sonho/sal.jpg"></img>
                    </div>
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$condensado miligramas de leite condensado"?>" alt="condensado" src="images/sonho/condensado.jpg"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$acucar gramas de açucar"?>" alt="acucar" src="images/sonho/acucar.jpg"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$ovo ovo(s)"?>" alt="ovo" src="images/sonho/ovo.png"></img>
                    </div>
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Misturar todos os outros ingredientes no fermento dissolvido " alt="bacia2" src="images/sonho/bacia2.png"></img>
                    </div>
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Misturar " alt="misturar" src="images/sonho/misturar.gif"></img>
                    </div> 
                </li>
                <br>

                <li class="receita_linha">
                    3. &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Sove a massa até não grudar nas mãos" alt="sovar" src="images/sonho/sovar.gif"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Divida em pedaços" alt="pedacos" src="images/sonho/pedacos.jpg"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Deixe crescer por 1 hora" alt="hora" src="images/sonho/hora.png"></img>
                    </div> 
                </li>
                <br>

                <li class="receita_linha">
                    4. &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Pegue os pedaços" alt="pedacos" src="images/sonho/pedacos.jpg"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Pegue o óleo" alt="oleo" src="images/sonho/oleo.png"></img>
                    </div> 
                    &nbsp + &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Frite os pedaços no óleo quente" alt="panela" src="images/sonho/panela.jpg"></img>
                    </div>
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Frite por 25 minutos" alt="25minutos" src="images/sonho/25minutos.png"></img>
                    </div>
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Sonho" alt="Sonhos" src="images/sonho/sonhos.jpg"></img>
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