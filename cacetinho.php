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
        $copo = $fermento * 0.1;
        $preparo = $fermento * 15;
        $cozimento = $fermento * 2.5;


    ?>

    <!-- MAIN -->
    <main>
        <h1 class="title">CACETINHO</h1>

        <div class="receita">
            <p> Rendimento:         <?php echo $rendimento ?>   Cacetinhos </p>
            <p> Tempo de preparo:   <?php echo $preparo ?>      min </p>
            <p> Tempo de cozimento: <?php echo $cozimento ?>    min </p>
            <br>

            <h3 class="subtitle">  Ingredientes: </h3>
            <ul>
                <li> <?php echo $fermento ?> g de fermento biológico </li>
                <li> <?php echo $acucar ?> g de açucar </li>
                <li> <?php echo $sal ?> g de sal </li>
                <li> <?php echo $trigo ?> g de trigo </li>
                <li> <?php echo $margarina ?> g de margarina </li>
                <li> <?php echo $copo ?> copo(s) de água </li>

            </ul>
            <br>

            <h3 class="subtitle">Preparo:</h3>
            <ol>
            
            <li> Dissolva o fermento e o açúcar em 1 copo de água morna.</li>
            <li> Em uma bacia grande misture a farinha, a manteiga e o sal.</li>
            <li> Faça um buraco no centro da massa e despeje o copo com a mistura de fermento e açúcar, misture a água do centro para fora.</li>
            <li> Amasse e sove até a massa ficar lisa e desgrudando.</li>
            <li> Modele de forma redonda a massa, cubra com um pano e deixe descansar por 1 hora e meia.</li>
            <li> Separe a massa em pedaços, utilize um rolo para esticar os pedaços.</li>
            <li> Usando uma faca faça um leve corte em cima da massa.</li>
            <li> Coloque os pedaços de massa em uma forma, separados para poderem crescer sem grudar, leve ao forno sem ligar e espere mais 1 hora.</li>
            <li> Ligue o forno a 200ºC, quando o forno estiver quente pincele os pães com água.</li>
            <li> Asse os pães entre 20 e 30 minutos.</li>
            <li> Retire do forno. </li>
            
            </ol>
            <br>
            
            <h3 class="subtitle"> Preços: </h3>
            <table>
                <tr>
                    <td class="italic">Ingrediente</td>
                    <td class="italic">Mercado 1</td>
                    <td class="italic">Mercado 2</td>
                    <td class="italic">Mercado 3</td>
                </tr>
                <tr>
                    <td class="italic"> Fermento </td> 
                    <td> R$<?php echo ($fermento / 10) * 7.00; $total1 = ($fermento / 10) * 7.00 ?> </td>
                    <td> R$<?php echo ($fermento / 10) * 6.00; $total2 = ($fermento / 10) * 6.00 ?> </td>
                    <td> R$<?php echo ($fermento / 10) * 6.50; $total3 = ($fermento / 10) * 6.50 ?> </td>
                </tr>
                <tr>
                    <td class="italic"> Açúcar   </td>
                    <td> R$<?php echo $acucar * 0.10; $total1+= $acucar * 0.10 ?> </td>
                    <td> R$<?php echo $acucar * 0.15; $total2+= $acucar * 0.15 ?> </td>
                    <td> R$<?php echo $acucar * 0.20; $total3+= $acucar * 0.20 ?> </td>
                </tr>
                <tr>
                    <td class="italic"> Farinha de Trigo    </td>
                    <td> R$<?php echo round(($trigo / 1000)* 7.75, 2); $total1+= round(($trigo / 1000)* 7.75, 2) ?> </td>
                    <td> R$<?php echo round(($trigo / 1000)* 8.75, 2); $total2+= round(($trigo / 1000)* 8.75, 2) ?> </td>
                    <td> R$<?php echo round(($trigo / 1000)* 7.20, 2); $total3+= round(($trigo / 1000)* 7.20, 2) ?> </td>
                </tr>
                <tr>
                    <td class="italic"> Sal      </td>
                    <td> R$<?php echo $sal * 0.02; $total1+= $sal * 0.02 ?> </td>
                    <td> R$<?php echo $sal * 0.03; $total2+= $sal * 0.02 ?> </td>
                    <td> R$<?php echo $sal * 0.02; $total3+= $sal * 0.02 ?> </td>
                </tr>
                <tr>
                    <td class="italic"> Margarina     </td>
                    <td> R$<?php echo $margarina * 0.75; $total1+= $margarina * 0.75?> </td>
                    <td> R$<?php echo $margarina * 0.60; $total2+= $margarina * 0.60?> </td>
                    <td> R$<?php echo $margarina * 0.50; $total3+= $margarina * 0.50?> </td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td> R$<?php echo round($total1,2) ?> </td>
                    <td> R$<?php echo round($total2,2) ?> </td>
                    <td> R$<?php echo round($total3,2) ?> </td>
                </tr>
            </table>
            <br><br>
        </div>

        <a href="<?php echo "cacetinho_visual.php?quant=$rendimento"; ?>" class="button clickable">Ver com Imagens</a>

        <br><br><br>

    </main>
    <script src="sidebar.js"></script>
</body>
</html>