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
            $ovo = round($_GET['quant'] / 7.5);
        } else {
            $ovo = 8;
        }
        $ovo = ceil($_GET['quant'] / 7.5);
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
            <p> Rendimento:         <?php echo $rendimento ?>   Pães de Queijo </p>
            <p> Tempo de preparo:   <?php echo $preparo ?>      min </p>
            <p> Tempo de cozimento: <?php echo $cozimento ?>    min </p>
            <br>

            <h3 class="subtitle">  Ingredientes: </h3>
            <ul>
                <li> <?php echo $azedo ?> g de polvilho azedo </li>
                <li> <?php echo $doce ?> g de polvilho doce </li>
                <li> <?php echo $sal ?> g de sal </li>
                <li> <?php echo $leite ?> ml de leite </li>
                <li> <?php echo $manteiga ?> g de manteiga </li>
                <li> <?php echo $agua ?> ml de água </li>
                <li> <?php echo $ovo ?> ovos </li>
                <li> <?php echo $queijo ?> g de queijo ralado </li>

            </ul>
            <br>

            <h3 class="subtitle">Preparo:</h3>
            <ol>
                <li> Coloque a água e a manteiga em uma panela, leve ao fogo e deixe até a manteiga derreter.</li>
                <li> Misture os dois tipos de polvilho em uma bacia e despeje a água com a manteiga nela.</li>
                <li> Coloque os outros ingredientes e mexa até a massa ficar homogênea.</li>
                <li> Coloque a massa por 40 minutos na geladeira.</li>
                <li> Modele a massa em bolinhas.</li>
                <li> Coloque as bolinhas em uma forma untada.</li>
                <li> Ligue o forno a 200ºC e espere 20 minutos.</li>
                <li> Retire do forno.</li>       
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
                    <td class="italic"> Ovo </td> 
                    <td> R$<?php echo $ovo * 0.75; $total1 = $ovo *0.75 ?> </td>
                    <td> R$<?php echo $ovo * 0.60; $total2 = $ovo *0.60 ?> </td>
                    <td> R$<?php echo $ovo *0.50 ; $total3 = $ovo *0.50 ?> </td>
                </tr>
                <tr>
                    <td class="italic"> Polvilho Doce   </td>
                    <td> R$<?php echo $doce *1.50 ; $total1+= $doce * 1.50  ?> </td>
                    <td> R$<?php echo $doce *1.75 ; $total2+= $doce * 1.75 ?> </td>
                    <td> R$<?php echo $doce *1.38 ; $total3+= $doce * 1.38 ?> </td>
                </tr>
                <tr>
                    <td class="italic"> Polvilho Azedo    </td>
                    <td> R$<?php echo $azedo * 1.05; $total1+= $azedo * 1.05 ?> </td>
                    <td> R$<?php echo $azedo * 1.14; $total2+= $azedo * 1.14 ?> </td>
                    <td> R$<?php echo $azedo * 1.23; $total3+= $azedo * 1.23 ?> </td>
                </tr>
                <tr>
                    <td class="italic"> Sal      </td>
                    <td> R$<?php echo $sal * 0.0075; $total1+= $sal * 0.0075 ?> </td>
                    <td> R$<?php echo $sal * 0.0060; $total2+= $sal * 0.0060 ?> </td>
                    <td> R$<?php echo $sal * 0.0030; $total3+= $sal * 0.0030 ?> </td>
                </tr>
                <tr>
                    <td class="italic"> Manteiga     </td>
                    <td> R$<?php echo $manteiga * 1.25; $total1+= $manteiga * 1.25?> </td>
                    <td> R$<?php echo $manteiga * 1.63; $total2+= $manteiga * 1.63?> </td>
                    <td> R$<?php echo $manteiga * 1.75; $total3+= $manteiga * 1.75?> </td>
                </tr>
                <tr>
                    <td class="italic"> Leite      </td>
                    <td> R$<?php echo $leite * 0.20; $total1+= $leite * 0.20?> </td>
                    <td> R$<?php echo $leite * 0.21; $total2+= $leite * 0.21?> </td>
                    <td> R$<?php echo $leite * 0.25; $total3+= $leite * 0.25?> </td>
                </tr>
                <tr>
                    <td class="italic"> Queijo      </td>
                    <td> R$<?php echo $queijo * 5.70; $total1+= $queijo * 5.70?> </td>
                    <td> R$<?php echo $queijo * 5,70; $total2+= $queijo * 5.70?> </td>
                    <td> R$<?php echo $queijo * 5.50; $total3+= $queijo * 5.50?> </td>
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

        <a href="<?php echo "queijo_visual.php?quant=$rendimento"; ?>" class="button clickable">Ver com Imagens</a>

        <br><br><br>

    </main>
</body>
</html>