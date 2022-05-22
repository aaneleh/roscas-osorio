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
            $acucar = $farinha * 2;
            $sal = (round($farinha / 3 ,PHP_ROUND_HALF_UP));
            $acucarEcanela = $farinha;
            $vinagre = (round($farinha / 3 ,PHP_ROUND_HALF_UP));
            $fermento = ceil($farinha / 3);
            $oleo = 1;
            $ovo =  ceil($farinha / 3);
            $margarina = ceil($farinha / 3);
            $leite = (round($farinha / 2 ,PHP_ROUND_HALF_UP));
                $rendimento = round($farinha * 21.6666666667);
                $preparo = ceil($rendimento / 3 + 7);
                $cozimento = ceil(($rendimento / 3) + 12);

    ?>

    <!-- MAIN -->
    <main>
        <h1 class="title">CUECA VIRADA</h1>

        <div class="receita">
            <p> Rendimento:         <?php echo $rendimento ?>   Cuecas Viradas </p>
            <p> Tempo de preparo:   <?php echo $preparo ?>      min </p>
            <p> Tempo de cozimento: <?php echo $cozimento ?>    min </p>
            <br>

            <h3 class="subtitle">  Ingredientes: </h3>
            <ul>
                <li> <?php echo $farinha ?> Xícara(s) de Farinha de Trigo</li>
                <li> <?php echo $acucar ?> Colher(es) de sopa de Açúcar </li>
                <li> <?php echo $sal ?> Colher(es) de chá de Sal </li>
                <li> <?php echo $leite ?> 1/2 Xícara(s) de Leite</li>
                <li> <?php echo $margarina ?> Colher(es) de sopa de Margarina</li>
                <li> <?php echo $acucarEcanela ?> Xícara(s) de Açúcar com Canela </li>
                <li> <?php echo $vinagre ?> Colher(es) de sopa de Vinagre</li>
                <li> <?php echo $fermento ?> Colher(es) de sopa de Fermeto em pó </li>
                <li> <?php echo $oleo ?> Garrafa de Óleo </li>
                <li> <?php echo $ovo ?> Ovo(s) </li>

            </ul>
            <br>

            <h3 class="subtitle">Preparo:</h3>
            <ol>
            
            <li> Junte em uma vasilha ou bacia os seguintes componetes: farinha, açucar, leite, sal, ovo, margarina, vinagre e fermento.</li>
            <li> Misture até que não gurde mais (se ainecessário, colocar mais farinha para não grudar).</li>
            <li> Em seguida abra a massa com um rolo em um superfície enfarinhada.</li>
            <li> Corte as tirinhas do tamanho desejado(aconselhamos meio rolo de medida para o comprimento e o cabo de uma faca para a grossura).</li>
            <li> Faça um corte no meio e passa um das pontas por dentro do corte.</li>
            <li> Coloque em uma penala 1 litro de óleo.</li>
            <li> Espere o Óleo ferver e então coloque para fritar </li>
            <li> Depois de fritar coloque para descansar em papel toalha.</li>
            <li> Polvilhar com Canela e Açúcar.</li>
            <li> Agora é só servir e aproveitar. </li>
            
            </ol>
            <br>
            
            <h3 class="subtitle"> Preços: </h3>

            <table>
                <tr>
                    <td class="italic">Ingrediente</td>
                    <td class="italic">Mercado 1 (Rissul)</td>
                    <td class="italic">Mercado 2 (Asun)</td>
                    <td class="italic">Mercado 3 (Carrefur)</td>
                </tr>
                <tr>
                    <td class="italic"> Farinha de Trigo</td> 
                    <td> R$<?php echo $farinha * 0.51; $total1 = $farinha * 0.51;?> </td>
                    <td> R$<?php echo $farinha * 0.57; $total2 = $farinha * 0.57;?> </td>
                    <td> R$<?php echo $farinha * 0.68; $total3 = $farinha * 0.68;?> </td>
                </tr>
                <tr>
                    <td class="italic"> Açúcar   </td>
                    <td> R$<?php echo $acucar * 0.05; $total1+= $acucar * 0.05 ?> </td>
                    <td> R$<?php echo $acucar * 0.05; $total2+= $acucar * 0.05 ?> </td>
                    <td> R$<?php echo $acucar * 0.05; $total3+= $acucar * 0.05 ?> </td>
                </tr>
                <tr>
                    <td class="italic"> Fermento    </td>
                    <td> R$<?php echo $fermento * 0.14; $total1+= $fermento * 0.14 ?> </td>
                    <td> R$<?php echo $fermento * 0.16; $total2+= $fermento * 0.16 ?> </td>
                    <td> R$<?php echo $fermento * 0.13; $total3+= $fermento * 0.13 ?> </td>
                </tr>
                <tr>
                    <td class="italic"> Sal      </td>
                    <td> R$<?php echo $sal * 0.01; $total1+= $sal * 0.01 ?> </td>
                    <td> R$<?php echo $sal * 0.01; $total2+= $sal * 0.01 ?> </td>
                    <td> R$<?php echo $sal * 0.01; $total3+= $sal * 0.01 ?> </td>
                </tr>
                <tr>
                    <td class="italic"> Margarina     </td>
                    <td> R$<?php echo $margarina * 0.17; $total1+= $margarina * 0.75?> </td>
                    <td> R$<?php echo $margarina * 0.18; $total2+= $margarina * 0.60?> </td>
                    <td> R$<?php echo $margarina * 0.13; $total3+= $margarina * 0.50?> </td>
                </tr>
                <tr>
                    <td class="italic"> Canela </td> 
                    <td> R$<?php echo $acucarEcanela * 11.07; $total1 = $acucarEcanela * 11.07 ?> </td>
                    <td> R$<?php echo $acucarEcanela * 8.38; $total2 = $acucarEcanela * 8.38 ?> </td>
                    <td> R$<?php echo $acucarEcanela * 5.72; $total3 = $acucarEcanela * 5.72 ?> </td>
                </tr>
                <tr>
                    <td class="italic"> Óleo </td> 
                    <td> R$<?php echo $oleo * 9.49; $total1 = $oleo * 9.49 ?> </td>
                    <td> R$<?php echo $oleo * 9.99; $total2 = $oleo * 9.99 ?> </td>
                    <td> R$<?php echo $oleo * 14.79; $total3 = $oleo * 14.79 ?> </td>
                </tr>
                <tr>
                    <td class="italic"> Vinagre </td> 
                    <td> R$<?php echo $vinagre * 0.07; $total1 = $vinagre *10.50 ?> </td>
                    <td> R$<?php echo $vinagre * 0.07; $total2 = $vinagre *10.00 ?> </td>
                    <td> R$<?php echo $vinagre * 0.11; $total3 = $vinagre *11.00 ?> </td>
                </tr>
                <tr>
                    <td class="italic"> Leite </td> 
                    <td> R$<?php echo $leite * 0.55; $total1 = $leite * 0.55 ?> </td>
                    <td> R$<?php echo $leite * 0.55; $total2 = $leite * 0.55 ?> </td>
                    <td> R$<?php echo $leite * 0.59; $total3 = $leite * 0.59 ?> </td>
                </tr>
                <tr>
                    <td class="italic"> Ovos </td> 
                    <td> R$<?php echo $ovo * 0.83; $total1 = $ovo *10.50 ?> </td>
                    <td> R$<?php echo $ovo * 0.75; $total2 = $ovo *10.00 ?> </td>
                    <td> R$<?php echo $ovo * 0.90; $total3 = $ovo *11.00 ?> </td>
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

        <a href="<?php echo "virada_visual.php?quant=$rendimento"; ?>" class="button clickable">Ver com Imagens</a>

        <br><br><br>

    </main>
</body>
</html>