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
            $fermento = round($_GET['quant'] / 2);
        } else {
            $fermento = 10;
        }
        $acucar = $fermento * 2;
        $trigo = $fermento * 50;
        $sal = $fermento * 1.5;
        $rendimento = ceil($fermento * 2);
        $margarina = $fermento * 0.1;
        $copo = $fermento * 20;
        $preparo = $fermento * 15;
        $cozimento = $fermento * 2.5;


    ?>

    <!-- MAIN -->
    <main>
        <h1 class="title">CACETINHO</h1>

        <div class="receita">
            <ul>
                <li class="receita_linha">
                    <p>
                        <?php echo $rendimento ?>
                        &nbsp
                        <div class="imagem_pequena img_container">
                            <img alt="cacetinhos" src="images/cacetinho/cacetinhos.jpeg"></img>
                        </div>
                    </p>
                </li>
                <br>
                <li class="receita_linha">
                    <p>
                        <?php echo $preparo ?> min
                        &nbsp
                        <div class="imagem_pequena img_container">
                            <img alt="de preparo" src="images/cacetinho/misturar.gif"></img>
                        </div>
                    </p>
                </li>
                <br>
                <li class="receita_linha">
                    <p>
                        <?php echo $cozimento ?> min
                        &nbsp
                        <div class="imagem_pequena img_container">
                            <img alt="de cozimento" src="images/cacetinho/forno2.jpg"></img>
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
                        <img alt="Gramas de fermento biológico " src="images/cacetinho/fermento.png"></img>
                    </div>
                </li>
                <br>
                <li class="receita_linha">
                    <p>
                    <?php echo $acucar ?>g   
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="Gramas de açucar" src="images/cacetinho/acucar.jpg"></img>
                    </div>
                    </p>
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $margarina ?>g                   
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="margarina" src="images/cacetinho/margarina.png"></img>
                    </div>    
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $sal ?>g     
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="sal" src="images/cacetinho/sal.jpg"></img>
                    </div>     
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $trigo ?>g
                    &nbsp
                    <div class="imagem_pequena img_container">
                        <img alt="farinha" src="images/cacetinho/farinha.png"></img>
                    </div>
                </li>
                <br>
                <li class="receita_linha">
                    <?php echo $copo ?> 
                    &nbsp  
                    <div class="imagem_pequena img_container">
                        <img alt="água" src="images/cacetinho/agua.png"></img>
                    </div>     
                </li>
            </ul>
            <br>

            <h3 class="subtitle">Preparo:</h3>
            <ol>
                <li class="receita_linha">
                    1.&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$fermento gramas de fermento biológico"?>" alt="fermento" src="images/cacetinho/fermento.png"></img>
                    </div>
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$acucar gramas de açucar"?> "alt="acucar" src="images/cacetinho/acucar.jpg"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$copo miligramas de água"?>" alt="agua" src="images/cacetinho/agua.png"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Dissolver o fermento e a água em uma bacia e misturar" alt="bacia1" src="images/cacetinho/misturar.gif"></img>
                    </div> 
                </li>
                <br>

                <li class="receita_linha">
                    2.&nbsp
                    +&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$trigo gramas de fermento biológico"?>" alt="trigo" src="images/cacetinho/farinha.png"></img>
                    </div>
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$margarina gramas de açucar"?> "alt="margarina" src="images/cacetinho/margarina.png"></img>
                    </div> 
                    &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="<?php echo "$sal miligramas de água"?>" alt="sal" src="images/cacetinho/sal.jpg"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Misturar a farinha de trigo, a margarina e o sal em uma bacia e misturar" alt="bacia2" src="images/cacetinho/misturar.gif"></img>
                    </div> 
                </li>
                <br>

                <li class="receita_linha">
                    3. &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Pegue a primeira bacia" alt="bacia1" src="images/cacetinho/bacia1.png"></img>
                    </div> 
                    &nbsp + &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Despeje na segunda bacia" alt="bacia2" src="images/cacetinho/bacia2.png"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Misture a união das duas bacias" alt="misturar" src="images/cacetinho/misturar.gif"></img>
                    </div> 
                </li>
                <br>

                <li class="receita_linha">
                    4. &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Sove a massa" alt="sove" src="images/cacetinho/sovar.gif"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Modele a massa" alt="bacia2" src="images/cacetinho/modelado.png"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Cubra com um pano ou um cobertor" alt="coberto" src="images/cacetinho/coberto.jpg"></img>
                    </div>
                    &nbsp + &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Aguarde 1 hora e meia" alt="misturar" src="images/cacetinho/1horae30.png"></img>
                    </div>   
                </li>
                <br>

                <li class="receita_linha">
                    5. &nbsp+&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Corte em pedaços" alt="pedacos" src="images/cacetinho/pedacos.jpg"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Faça um leve corte nos pedaços" alt="cortar" src="images/cacetinho/cortar.png"></img>
                    </div>
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Borrife ou pincele água" alt="borrife" src="images/cacetinho/borrifeagua.png"></img>
                    </div>
                </li>
                <br>

                <li class="receita_linha">
                    6.&nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Leve ao forno em 200º" alt="forno2" src="images/cacetinho/forno2.jpg"></img>
                    </div> 
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Asse por 25 minutos" alt="25minutos" src="images/cacetinho/25minutos.png"></img>
                    </div>
                    &nbsp → &nbsp
                    <div class="imagem_pequena img_container">
                        <img title="Retire os cacetinhos" alt="cacetinhos" src="images/cacetinho/cacetinhos.jpeg"></img>
                    </div>
                </li>
                <br>
            </ol>
            <br><br>
        </div>
    </main>
</body>
</html>