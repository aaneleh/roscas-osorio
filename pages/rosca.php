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
            <img class="menu_logo" src="/images/Logo.png" alt="Roscas Osorio">
        </a>

        <!-- DESKTOP -->
        <div class="menu_links" id="menu_desktop">
            <a href="/index.html">Home</a>
            <a href="#negocio">Seu negócio</a>
        </div>

        <!-- MOBILE -->
        <div class="menu_links clickable" id="menu_mobile" onClick='toggleSidebar()'>
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </div>
        <div class="sidebar" id="sidebar">
            <a href="/index.html">Home</a>
            <a href="#negocio">Seu negócio</a>
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
            <p> Rendimento:         <?php echo $rendimento ?>   Roscas </p>
            <p> Tempo de preparo:   <?php echo $preparo ?>      min </p>
            <p> Tempo de cozimento: <?php echo $cozimento ?>    min </p>
            <br>

            <h3 class="subtitle">  Ingredientes: </h3>
            <ul>
                <li> <?php echo $polvilho ?> kg de polvilho azedo </li>
                <li> <?php echo $acucar ?>   xícaras de açucar</li>
                <li> <?php echo $banha ?>    colheres de banha</li>
                <li> <?php echo $sal ?>      colher de sal</li>
                <li> <?php echo $ovos ?>     ovos</li>
                <li> <?php echo $agua ?>     1/4 xícara de água</li>
            </ul>
            <br>

            <h3 class="subtitle">Preparo:</h3>
            <ol>
                <li>Misture em uma bacia grande o polvilho, o açúcar, o sal e mexa. Depois adicione a banha e misture.</li>
                <li>Escalde a mistura despejando uma xícara do total da água fervente bem no meio da massa, não molhando as superfícies. Misture sem umidecer toda massa. Acrescente os ovos e misture novamente. Após deixar o restante da água esfriar até ficar morna, despeje-a na massa e misture com as mãos até ficar homogênea. Leve-a a uma mesa para sova-la, divida-a em dois pedaços e sove novamente.</li>
                <li>Retire pequenos pedaços e enrole-os bem, deixando-os bem esticados. Desta tira, calcule a medida da soma do tamanho de três facadas de serrina na horizontal e corte. Após, enrole as tiras formando uma rosca, fechando suas pontas.</li>
                <li>Leve-a ao forno a 200°C por 20 a 25 min.</li>
            </ol>
            <br>

            <h3 class="subtitle"> Preços: </h3>
            <table>
                <tr>
                    <td class="italic">Ingrediente</td>
                    <td class="italic">Mercado 1></td>
                    <td class="italic">Mercado 2></td>
                    <td class="italic">Mercado 3></td>
                </tr>
                <tr>
                    <td class="italic"> Polvilho </td>
                    <td> <?php echo $polvilho * 10.50; $total1 = $polvilho *10.50 ?> R$  </td>
                    <td> <?php echo $polvilho * 10.00; $total2 = $polvilho *10.00 ?> R$  </td>
                    <td> <?php echo $polvilho * 11.00; $total3 = $polvilho *11.00 ?> R$  </td>
                </tr>
                <tr>
                    <td class="italic"> Açúcar   </td>
                    <td> <?php echo $acucar * 1.00; $total1+= $acucar * 1.00 ?> R$    </td>
                    <td> <?php echo $acucar * 1.50; $total2+= $acucar * 1.50 ?> R$    </td>
                    <td> <?php echo $acucar * 2.00; $total3+= $acucar * 2.00 ?> R$    </td>
                </tr>
                <tr>
                    <td class="italic"> Banha    </td>
                    <td> <?php echo $banha * 0.75; $total1+= $banha * 0.75 ?> R$     </td>
                    <td> <?php echo $banha * 0.50; $total2+= $banha * 0.50 ?> R$     </td>
                    <td> <?php echo $banha * 0.75; $total3+= $banha * 0.75 ?> R$     </td>
                </tr>
                <tr>
                    <td class="italic"> Sal      </td>
                    <td> <?php echo $sal * 0.02; $total1+= $sal * 0.02 ?> R$       </td>
                    <td> <?php echo $sal * 0.03; $total2+= $sal * 0.02 ?> R$       </td>
                    <td> <?php echo $sal * 0.02; $total3+= $sal * 0.02 ?> R$       </td>
                </tr>
                <tr>
                    <td class="italic"> Ovos     </td>
                    <td> <?php echo $ovos * 0.75; $total1+= $ovos * 0.75?> R$      </td>
                    <td> <?php echo $ovos * 0.60; $total2+= $ovos * 0.60?> R$      </td>
                    <td> <?php echo $ovos * 0.50; $total3+= $ovos * 0.50?> R$      </td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td> <?php echo $total1 ?> R$</td>
                    <td> <?php echo $total2 ?> R$</td>
                    <td> <?php echo $total3 ?> R$</td>
                </tr>
            </table>
            <br><br>
        </div>
    </main>
</body>
</html>