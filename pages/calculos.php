<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roscas Osório</title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/calculos.css">
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
            <a href="/index.html#receitas"> Receitas </a>
        </div>

        <!-- MOBILE -->
        <div class="menu_links clickable" id="menu_mobile" onClick='toggleSidebar()'>
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </div>
        <div class="sidebar" id="sidebar">
            <a href="/index.html">Home</a>
            <a href="/index.html#receitas"> Receitas </a>
            <p onClick='toggleSidebar()' class="clickable">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                    <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                </svg>
            </p>
        </div>
    </nav>

    <?php
        //print_r($_POST);

        function arredondar($valor){
            $arredondado = round($valor,2);
            return $arredondado;
        }
    ?>

    <!-- MAIN -->
    <main>
        <h1 class="title">CUSTOS DO ESTABELECIMENTO</h1>

        <div class="resultados_wrapper">
            <!-- CUSTOS FIXOS -->
            <section>
                <h2 class="subtitle">Custos Fixos</h2>

                <?php
                    //tabela 1 - calculos dos custos fixos
                    $custosFunc = ($_POST['quant_coz'] * $_POST['sal_coz']) + ($_POST['quant_caix'] * $_POST['sal_caix']) + ($_POST['quant_limp'] * $_POST['sal_limp']);
                    $custosEstab = $_POST['conta_agua'] + $_POST['conta_luz'] + $_POST['aluguel'];
                    $custosFixos = $custosFunc + $custosEstab;
                ?>
                
                <table>
                    <tr>
                        <td class="italic">Custos com funcionários</td>
                        <td class="italic">Custos com o estabelecimento</td>
                        <td class="bold italic">Total</td>
                    </tr>

                    <tr>
                        <td> R$ <?php  echo $custosFunc; ?> </td>
                        <td> R$ <?php  echo $custosEstab; ?> </td>
                        <td> R$ <?php  echo $custosFixos; ?> </td>
                    </tr>
                </table>
            </section>

            <!-- CUSTOS VARIAVEIS -->
            <section>
                <h2 class="subtitle">Custos Variáveis</h2>

                <?php
                    //tabela 2 - calculos dos custos variaveis
                    $rosca_quant = $_POST['quant_rosca'];
                    $cacetinho_quant = $_POST['quant_cacetinho'];
                    $queijo_quant = $_POST['quant_queijo'];
                    $sonho_quant = $_POST['quant_sonho'];
                    $doce_quant = $_POST['quant_doce'];

                    $rosca_mes = $rosca_quant * 1.84;
                    $cacetinho_mes = $cacetinho_quant * 1.00;
                    $queijo_mes = $queijo_quant * 1.00;
                    $sonho_mes = $sonho_quant * 1.00;
                    $doce_mes = $doce_quant * 1.86;

                    $custosVariaveis = $rosca_mes + $cacetinho_mes + $queijo_mes + $sonho_mes + $doce_mes;
                ?>

                <table>
                    <tr>
                        <td class="italic">Receitas</td>
                        <td class="italic">Quantidade por mês</td>
                        <td class="italic">Menos custo p/ unidade</td>
                        <td class="italic">Custo total p/ mês do produto</td>
                    </tr>

                    <tr>
                        <td class="italic"> Rosca de Polvilho </td>
                        <td> <?php echo $rosca_quant; ?> </td>
                        <td> R$ 1,84 </td>
                        <td> R$ <?php echo $rosca_mes; ?> </td>
                    </tr>
                    <tr>
                        <td class="italic"> Cacetinho </td>
                        <td> <?php echo $cacetinho_quant; ?> </td>
                        <td> R$ 1,00 </td>
                        <td> R$ <?php echo $cacetinho_mes; ?> </td>
                    </tr>
                    <tr>
                        <td class="italic"> Pão de Queijo </td>
                        <td> <?php echo $queijo_quant; ?> </td>
                        <td> R$ 1,00 </td>
                        <td> R$ <?php echo $queijo_mes; ?> </td>
                    </tr>
                    <tr>
                        <td class="italic"> Sonho </td>
                        <td> <?php echo $sonho_quant; ?> </td>
                        <td> R$ 1,00 </td>
                        <td> R$ <?php echo $sonho_mes; ?> </td>
                    </tr>
                    <tr>
                        <td class="italic"> Pão Doce </td>
                        <td> <?php echo $doce_quant; ?> </td>
                        <td> R$ 1,86 </td>
                        <td> R$ <?php echo $doce_mes; ?> </td>
                    </tr>

                </table>

                <br>

                <table>
                    <tr>
                        <td class="bold italic">Custo Variável Total</td>
                        <td>R$ <?php echo $custosVariaveis; ?> </td>
                    </tr>
                </table>
            </section>

            <!-- CUSTOS TOTAIS -->
            <section>
                <h2 class="subtitle">Custo Total</h2>

                <?php
                    //tabela 3 - calculos dos custos totais
                    $custosTotais = $custosFixos + $custosVariaveis;
                ?>

                <table>
                    <tr>
                        <td class="italic" >Custo Fixo</td>
                        <td class="italic" >Custo Variável</td>
                        <td class="italic bold">Custo Total</td>
                    </tr>
                    <tr>
                        <td>R$ <?php echo $custosFixos; ?> </td>
                        <td>R$ <?php echo $custosVariaveis; ?> </td>
                        <td>R$ <?php echo $custosTotais; ?></td>
                    </tr>
                </table>
            </section>

            <!-- PRECO UNITARIO DE VENDA -->
            <section>
                <h2 class="subtitle">Preço unitário de venda</h2>
                
                <?php
                    //tabela 4 - calculos do preço unitario de venda
                    //preços sem margem de lucro
                    $rosca_preco = arredondar( ($rosca_mes + ( $custosFixos/5 ) ) / $rosca_quant);
                    $cacetinho_preco = arredondar( ($cacetinho_mes + ( $custosFixos/5 ) ) / $cacetinho_quant);
                    $queijo_preco = arredondar( ($queijo_mes + ( $custosFixos/5 ) ) / $queijo_quant);
                    $sonho_preco = arredondar( ($sonho_mes + ( $custosFixos/5 ) ) / $sonho_quant);
                    $doce_preco = arredondar( ($doce_mes + ( $custosFixos/5 ) ) / $doce_quant);

                    //preços com margem de lucro
                    $porcentagem_lucro = $_POST['lucro'];
                    $decimal_lucro = $porcentagem_lucro / 100;

                    $rosca_preco2 = arredondar($rosca_preco + ($rosca_preco * $decimal_lucro));
                    $cacetinho_preco2 = arredondar ($cacetinho_preco + ($cacetinho_preco * $decimal_lucro));
                    $queijo_preco2 = arredondar($queijo_preco + ($queijo_preco * $decimal_lucro) );
                    $sonho_preco2 = arredondar($sonho_preco + ($sonho_preco * $decimal_lucro) );
                    $doce_preco2 = arredondar($doce_preco + ($doce_preco * $decimal_lucro) );

                    $rosca_receita = arredondar($rosca_quant * $rosca_preco2);
                    $cacetinho_receita = arredondar($cacetinho_quant * $cacetinho_preco2);
                    $queijo_receita = arredondar($queijo_quant * $queijo_preco2);
                    $sonho_receita = arredondar($sonho_quant * $sonho_preco2);
                    $doce_receita = arredondar($doce_quant * $doce_preco2);

                ?>
                
                
                <p>Para calular o preço unitário é somado o custo mensal com os ingredientes do produto com um quinto dos custos fixos e então esse valor é divido pela quantidade mensal do produto.</p>
                <p>Margem de lucro informada: <?php echo $porcentagem_lucro; ?>%</p>
                <table>
                    <tr>
                        <td class="italic">Produto</td>
                        <td class="italic">Preço unitário</td>
                        <td class="italic">Preço + Lucro</td>
                        <td class="italic">Receita por produto</td>
                    </tr>
                    <tr>
                        <td class="italic"> Rosca de Polvilho </td>
                        <td> R$ <?php echo $rosca_preco; ?> </td>
                        <td> R$ <?php echo $rosca_preco2; ?> </td>
                        <td> R$ <?php echo $rosca_receita; ?> </td>
                    </tr>
                    <tr>
                        <td class="italic"> Cacetinho </td>
                        <td> R$ <?php echo $cacetinho_preco; ?></td>
                        <td> R$ <?php echo $cacetinho_preco2; ?> </td>
                        <td> R$ <?php echo $cacetinho_receita; ?> </td>
                    </tr>
                    <tr>
                        <td class="italic"> Pão de Queijo </td>
                        <td> R$ <?php echo $queijo_preco; ?></td>
                        <td> R$ <?php echo $queijo_preco2; ?> </td>
                        <td> R$ <?php echo $queijo_receita; ?> </td>
                    </tr>
                    <tr>
                        <td class="italic"> Sonho </td>
                        <td> R$ <?php echo $sonho_preco; ?> </td>
                        <td> R$ <?php echo $sonho_preco2; ?> </td>
                        <td> R$ <?php echo $sonho_receita; ?> </td>
                    </tr>
                    <tr>
                        <td class="italic"> Pão Doce </td>
                        <td> R$ <?php echo $doce_preco; ?> </td>
                        <td> R$ <?php echo $doce_preco2; ?> </td>
                        <td> R$ <?php echo $doce_receita; ?> </td>
                    </tr>
                </table>
            </section>
            
            <!-- RECEITA TOTAL E LUCRO -->
            <section>
                <h2 class="subtitle">Receita Total</h2>
                
                <?php
                    //tabela 5 - receita total
                    $receitaTotal = $rosca_receita + $cacetinho_receita + $queijo_receita + $sonho_receita + $doce_receita;
                    $lucro = $receitaTotal - $custosTotais;
                ?>
                
                <p> Lucro: Calculado através da subtração do valor obtido pela venda de todos os produtos com os custos totais</p>
                <table>
                    <tr>
                        <td class="italic">Receita total</td>
                        <td class="italic">Custo total</td>
                        <td class="italic bold">Lucro</td>

                    </tr>
                    <tr>
                        <td>R$ <?php echo $receitaTotal; ?></td>
                        <td>R$ <?php echo $custosTotais; ?></td>
                        <td>R$ <?php echo $lucro; ?> </td>
                    </tr>
                </table>
            </section>
        </div>

    </main>
</body>
</html>