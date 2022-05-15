<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roscas Osório</title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/receitas.css">
</head>
<body>
    
    <!-- MENU -->
    <nav>
        <a href="/index.html">
            <img class="menu_logo" src="/images/rosca/Logo.png" alt="Roscas Osorio">
        </a>

        <!-- DESKTOP -->
        <div class="menu_links" id="menu_desktop">
            <a href="/index.html">Home</a>
            <a href="/pages/form.html">Seu negócio</a>
        </div>

        <!-- MOBILE -->
        <div class="menu_links clickable" id="menu_mobile" onClick='toggleSidebar()'>
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </div>
        <div class="sidebar" id="sidebar">
            <a href="/index.html">Home</a>
            <a href="/pages/form.html">Seu negócio</a>
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
            $ovos = round($_GET['quant'] / 6.6);
            $polvilho = round($_GET['quant'] / 6.6);
        } else {
            $ovos = 3;
            $polvilho = 3;
        }
        $acucar = $ovos;
        $banha = $ovos * 1.5;
        $sal = round($ovos * 0.33, 1);
        $agua = $ovos * 10;
        $rendimento = ceil($ovos * 6.6);
        $preparo = round(20 + ($rendimento/1.5));
        $forma = 20;  //assumindo que são 20 p/ forma
        $cozimento = ceil($rendimento / $forma) * 20;
    ?>

    <!-- MAIN -->
    <main>
        <h1 class="title">ROSCA DE POLVILHO</h1>

        <div class="receita">
            <ul>
                <li class="receita_linha">
                    <p>
                        <?php echo $rendimento ?>
                        &nbsp
                        <div class="imagem_pequena img_container">
                            <img alt="rosca" src="/images/rosca/rosca.jpg"></img>
                        </div>
                    </p>
                </li>
                <br>
                <li class="receita_linha">
                    <p>
                        <?php echo $preparo ?> min
                        &nbsp
                        <div class="imagem_pequena img_container">
                            <img alt="de preparo" src="/images/rosca/misturar.gif"></img>
                        </div>
                    </p>
                </li>
                <br>
                <li class="receita_linha">
                    <p>
                        <?php echo $cozimento ?> min
                        &nbsp
                        <div class="imagem_pequena img_container">
                            <img alt="de cozimento" src="/images/rosca/forno.jpg"></img>
                        </div>
                    </p>
                </li>
            </ul>

            <h3 class="subtitle">  Ingredientes: </h3>
            <ul>
                <li class="receita_linha">
                    <?php echo $polvilho ?>
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="kg de polvilho azedo" src="/images/rosca/polvilho.png"></img>
                    </div>
                </li>
                <br>
                <li class="receita_linha">
                    <p>
                    <?php echo $acucar ?>   
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="xícaras de açucar" src="/images/rosca/xicara.png"></img>
                    </div>
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="xícaras de açucar" src="/images/rosca/acucar.jpg"></img>
                    </div>
                    </p>
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $banha ?>
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="colheres" src="/images/rosca/colher_banha.png"></img>
                    </div>  
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="banha" src="/images/rosca/banha.png"></img>
                    </div>    
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $sal ?>
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="colher" src="/images/rosca/colher.jpg"></img>
                    </div>      
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="sal" src="/images/rosca/sal.jpg"></img>
                    </div>     
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $ovos ?>
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="ovo(s)" src="/images/rosca/ovo.png"></img>
                    </div>
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $agua ?>
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="1/4 xícara" src="/images/rosca/1_4_xicara.png"></img>
                    </div>   
                    &nbsp  
                    <div class="imagem_pequena img_container">
                        <img alt="água" src="/images/rosca/agua.png"></img>
                    </div>     
                </li>
            </ul>
            <br>

            <h3 class="subtitle">Preparo:</h3>
            <ol>
                <li class="receita_linha">
                    1.&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$polvilho pacote(s) de polvilho azedo"?>" alt="polvilho" src="/images/rosca/polvilho.png"></img>
                    </div>
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$acucar xicara(s) de acucar"?> "alt="acucar" src="/images/rosca/acucar.jpg"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$sal colher(es) de sal"?>" alt="sal" src="/images/rosca/sal.jpg"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="adicionar todos em uma bacia e misturar" alt="bacia" src="/images/rosca/misturar.gif"></img>
                    </div> 
                </li>
                <br>

                <li class="receita_linha">
                    2.&nbsp
                    +&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$banha colher(es) de banha"?>" alt="banha" src="/images/rosca/banha.png"></img>
                    </div>
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="adicionar a banha à mistura e mexer" alt="bacia" src="/images/rosca/misturar.gif"></img>
                    </div> 
                </li>
                <br>

                <li class="receita_linha">
                    3. &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="aqueça uma xícara do total da água" alt="agua" src="/images/rosca/agua.png"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="espere a água ferver" alt="chaleira" src="/images/rosca/chaleira.jpg"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="água fervendo" alt="chaleira" src="/images/rosca/chaleira.jpg"></img>
                    </div> 
                    &nbsp + &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="despeja a água fervendo no meio da massa" alt="bacia" src="/images/rosca/misturar.gif"></img>
                    </div> 
                </li>
                <br>

                <li class="receita_linha">
                    4. &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="acrescente <?php echo $ovos ?> ovos" alt="ovos" src="/images/rosca/ovo.png"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="misture novamente" alt="bacia" src="/images/rosca/misturar.gif"></img>
                    </div> 
                </li>
                <br>

                <li class="receita_linha">
                    5. &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="água morna" alt="chaleira" src="/images/rosca/chaleira.jpg"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="misture até ficar homogênea" alt="misturar" src="/images/rosca/misturar.gif"></img>
                    </div>
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="leve-a a uma mesa para sova-la" alt="sovar" src="/images/rosca/sovar.gif"></img>
                    </div>
                </li>
                <br>

                <li class="receita_linha">
                    6.&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="divida em dois pedaços" alt="cortar em dois pedaços" src="/images/rosca/cortar.jpg"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="sove novamente" alt="sovar" src="/images/rosca/sovar.gif"></img>
                    </div>
                </li>
                <br>

                <li class="receita_linha">
                    7.&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="transforme em tirar" alt="tiras" src="/images/rosca/tiras.jpg"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="forme roscas" alt="rosca" src="/images/rosca/rosca.jpg"></img>
                    </div>
                </li>
                <br>

                <li class="receita_linha">
                    8.&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="leve ao forno a 200°C" alt="forno" src="/images/rosca/forno2.jpg"></img>
                    </div> 
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="por 20 a 25 min" alt="20 minutos" src="/images/rosca/20_minutos.png"></img>
                    </div>
                </li>
                <br>
            </ol>
            <br><br>
        </div>
    </main>
</body>
</html>