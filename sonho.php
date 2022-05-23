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
            $ovo = ceil($_GET['quant'] / 40);
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
    ?>

    <!-- MAIN -->
    <main>
        <h1 class="title">SONHO</h1>

        <div class="receita">
            <p> Rendimento:         <?php echo $rendimento ?>   sonhos </p>
            <p> Tempo de preparo:   <?php echo $preparo ?>      min </p>
            <p> Tempo de cozimento: <?php echo $cozimento ?>    min </p>
            <br>

            <h3 class="subtitle">  Ingredientes: </h3>
            <ul>
                <li> <?php echo $fermento ?> g de fermento biológico </li>
                <li> <?php echo $acucar ?> g de açucar </li>
                <li> <?php echo $sal ?> g de sal </li>
                <li> <?php echo $trigo ?> g de farinha de trigo </li>
                <li> <?php echo $maizena ?> g de maizena </li>
                <li> <?php echo $leite ?> ml de leite </li>
                <li> <?php echo $condensado ?> ml de leite condensado </li>
                <li> <?php echo $oleo ?> ml óleo </li>
                <li> <?php echo $ovo ?> ovos</li>
            </ul>
            <br>

            <h3 class="subtitle">Preparo:</h3>
            <ol>
                <li> Deixe Metade do leite morno, e dissolva nele o fermento</li>
                <li> Coloque o açúcar e os demais ingredientes.</li>
                <li> Sove a massa até que fique sem grudar nas mãos.</li>
                <li> Faça bolinhas com a massa. </li>
                <li> Deixe a massa crescer por mais ou menos 1 hora.</li>
                <li> Frite em óleo quente.</li>
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
                    <td class="italic"> Fermento Biológico</td> 
                    <td> R$<?php echo $fermento * 0.25; $total1 = $fermento *0.25 ?> </td>
                    <td> R$<?php echo $fermento * 0.37; $total2 = $fermento *0.37 ?> </td>
                    <td> R$<?php echo $fermento *0.50 ; $total3 = $fermento *0.50 ?> </td>
                </tr>
                <tr>
                    <td class="italic"> Açúcar   </td>
                    <td> R$<?php echo round(($acucar / 1000) * 4.00,2) ; $total1+= round(($acucar / 1000) * 4.00,2)  ?> </td>
                    <td> R$<?php echo round(($acucar / 1000) * 5.50,2) ; $total2+= round(($acucar / 1000) * 4.00,2) ?> </td>
                    <td> R$<?php echo round(($acucar / 1000) * 6.00,2) ; $total3+= round(($acucar / 1000) * 4.00,2) ?> </td>
                </tr>
                <tr>
                    <td class="italic"> Farinha de Trigo    </td>
                    <td> R$<?php echo round(($trigo / 1000) * 6.00,2); $total1+= round(($trigo / 1000) * 6.00,2) ?> </td>
                    <td> R$<?php echo round(($trigo / 1000) * 5.00,2); $total2+= round(($trigo / 1000) * 5.00,2) ?> </td>
                    <td> R$<?php echo round(($trigo / 1000) * 5.80,2); $total3+= round(($trigo / 1000) * 5.80,2) ?> </td>
                </tr>
                <tr>
                    <td class="italic"> Sal      </td>
                    <td> R$<?php echo $sal * 0.01; $total1+= $sal * 0.01 ?> </td>
                    <td> R$<?php echo $sal * 0.012; $total2+= $sal * 0.012 ?> </td>
                    <td> R$<?php echo $sal * 0.0125; $total3+= $sal * 0.0125 ?> </td>
                </tr>
                <tr>
                    <td class="italic"> Ovos     </td>
                    <td> R$<?php echo $ovo * 0.75; $total1+= $ovo * 0.75?> </td>
                    <td> R$<?php echo $ovo * 0.60; $total2+= $ovo * 0.60?> </td>
                    <td> R$<?php echo $ovo * 0.50; $total3+= $ovo * 0.50?> </td>
                </tr>
                <tr>
                    <td class="italic"> Leite      </td>
                    <td> R$<?php echo round(($leite / 1000) * 4.60,2); $total1+= round(($leite / 1000) * 5.00,2)?> </td>
                    <td> R$<?php echo round(($leite / 1000) * 5.00,2); $total2+= round(($leite / 1000) * 5.00,2)?> </td>
                    <td> R$<?php echo round(($leite / 1000) * 4.90,2); $total3+= round(($leite / 1000) * 5.00,2)?> </td>
                </tr>
                <tr>
                    <td class="italic"> Óleo      </td>
                    <td> R$<?php echo round(($oleo / 900) * 9.50,2); $total1+= round(($oleo / 900) * 9.50,2)?> </td>
                    <td> R$<?php echo round(($oleo / 900) * 10.00,2); $total2+= round(($oleo / 900) * 10.00,2)?> </td>
                    <td> R$<?php echo round(($oleo / 900) * 8.40,2); $total3+= round(($oleo / 900) * 8.40,2)?> </td>
                </tr>
                <tr>
                    <td class="italic"> Leite Condensado      </td>
                    <td> R$<?php echo round(($condensado / 395)* 3.00,2); $total1+= round(($condensado / 395)* 3.00,2)?> </td>
                    <td> R$<?php echo round(($condensado / 395)* 3.15,2); $total2+= round(($condensado / 395)* 3.15,2)?> </td>
                    <td> R$<?php echo round(($condensado / 395)* 3.40,2); $total3+= round(($condensado / 395)* 4.40,2)?> </td>
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

        <a href="<?php echo "sonho_visual.php?quant=$rendimento"; ?>" class="button clickable">Ver com Imagens</a>

        <br><br><br>

    </main>
    <script src="sidebar.js"></script>
</body>
</html>