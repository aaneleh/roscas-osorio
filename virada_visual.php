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
            $farinha = ceil($_GET['quant'] / 21.6666666667);
            
        } else {
            $farinha = 20;
            $farinha =ceil($farinha /21.6666666667);
        }
            $acucar = ($farinha * 20)*12;
            $sal = (round($farinha / 3 ,PHP_ROUND_HALF_UP))*3;
            $acucarEcanela = $farinha*60;
            $vinagre = (round($farinha / 3 ,PHP_ROUND_HALF_UP))*15;
            $fermento = ceil($farinha / 3)*4;
            $oleo = 1;
            $ovo =  ceil($farinha / 3);
            $margarina = ceil($farinha / 3)*10;
            $leite = (round($farinha / 2 ,PHP_ROUND_HALF_UP))*125;
            $rendimento = round($farinha * 21.6666666667);
            $preparo = ceil($rendimento / 3 + 7);
            $cozimento = ceil(($rendimento / 3) + 12);
            $farinha2 = $farinha*120;

    ?>

    <!-- MAIN -->
    <main>
        <h1 class="title">Cueca Virada</h1>

        <div class="receita">
            <ul>
                <li class="receita_linha">
                    <p>
                        <?php echo $rendimento ?>
                        &nbsp
                        <div class="imagem_pequena img_container">
                            <img alt="cuecas viradas" src="images/virada/cuecavirada.jpg"></img>
                        </div>
                    </p>
                </li>
                <br>
                <li class="receita_linha">
                    <p>
                        <?php echo $preparo ?> min
                        &nbsp
                        <div class="imagem_pequena img_container">
                            <img alt="de preparo" src="images/virada/misturar.gif"></img>
                        </div>
                    </p>
                </li>
                <br>
                <li class="receita_linha">
                    <p>
                        <?php echo $cozimento ?> min
                        &nbsp
                        <div class="imagem_pequena img_container">
                            <img alt="de cozimento" src="images/virada/panelaOleo.jpg"></img>
                        </div>
                    </p>
                </li>
            </ul>

            <h3 class="subtitle">  Ingredientes: </h3>
            <ul>
                <li class="receita_linha">
                    <?php echo $fermento ?>g
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="Gramas de fermento biológico " src="images/virada/fermento.png"></img>
                    </div>
                </li>
                <br>
                <li class="receita_linha">
                    <p>
                    <?php echo $acucar ?>g 
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="Gramas de açucar" src="images/virada/acucar.jpg"></img>
                    </div>
                    </p>
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $margarina ?>g               
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="margarina" src="images/virada/margarina.png"></img>
                    </div>    
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $sal ?>g   
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="sal" src="images/virada/sal.jpg"></img>
                    </div>     
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $farinha ?>g
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="farinha" src="images/virada/farinha.png"></img>
                    </div>
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $leite ?>ml
                    &nbsp  
                    <div class="imagem_pequena img_container">
                        <img alt="leite" src="images/virada/leite.png"></img>
                    </div>     
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $vinagre ?>ml
                    &nbsp  
                    <div class="imagem_pequena img_container">
                        <img alt="vinagre" src="images/virada/vinagre.jpg"></img>
                    </div>     
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $ovo ?> Unidade
                    &nbsp  
                    <div class="imagem_pequena img_container">
                        <img alt="ovo" src="images/virada/leite.png"></img>
                    </div>     
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $oleo ?> Garrafa
                    &nbsp  
                    <div class="imagem_pequena img_container">
                        <img alt="oleo" src="images/virada/óleo.jpg"></img>
                    </div>     
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $acucarEcanela ?>g
                    &nbsp  
                    <div class="imagem_pequena img_container">
                        <img alt="canela com açúcar" src="images/virada/canela.jpg"></img>
                    </div>     
                </li>
            </ul>
            <br>
            
            <h3 class="subtitle">Preparo:</h3>
            <ol>
                <li class="receita_linha">
                    1.&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "recipiente"?>" alt="bacia" src="images/virada/bacia1.png"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$farinha2 g de farinha"?>" alt="farinha" src="images/virada/farinha.png"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$fermento g de fermento"?>" alt="fermento" src="images/virada/fermento.png"></img>
                    </div>
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$acucar g de açucar"?> "alt="acucar" src="images/virada/acucar.jpg"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$leite ml de leite"?>" alt="leite" src="images/virada/leite.png"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$vinagre ml de vinagre"?>" alt="vinagre" src="images/virada/vinagre.jpg"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$margarina g de margarina"?>" alt="margarina" src="images/virada/margarina.png"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$sal g de sal"?>" alt="sal" src="images/virada/sal.jpg"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$ovo unidade"?>" alt="ovo" src="images/virada/ovo.png"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="" alt="bacia1" src="images/virada/misturar.gif"></img>
                    </div> 
                </li>
                <br>

                <li class="receita_linha">
                    2.&nbsp
                    +&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "Sovar"?>" alt="sovando" src="images/virada/sovar.gif"></img>
                    </div>
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "Esticar"?> "alt="esticando" src="images/virada/rolo.PNG"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "Cortar"?>" alt="cortando" src="images/virada/corte.PNG"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Dobrar" alt="froma" src="images/virada/dobrar.PNG"></img>
                    </div> 
                </li>
                <br>

                <li class="receita_linha">
                    3. &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "Esquentar óleo"?>" alt="óleo" src="images/virada/panela2.jpg"></img>
                    </div>
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "aquecer óleo"?> "alt="temperatura" src="images/virada/term.jpg"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "fritar"?>" alt="fritando" src="images/virada/panelaOleo.jpg"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="descansar" alt="froma" src="images/virada/forma.jpg"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "misturar"?> "alt="Canela Com açúcar" src="images/virada/mistura1.PNG"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "cuecas viradas no açucar"?> "alt="cuecas viradas no açucar" src="images/virada/final.PNG"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "Sevir"?> "alt="temperatura" src="images/virada/Fim.PNG"></img>
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