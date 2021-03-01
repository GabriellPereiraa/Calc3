<?php
// HEADER
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid">
            <h2 class="font-bold LaranjaEstado">
                <i class="fas fa-folder"></i> 2 - Gráficos
            </h2>

            <p class="Texto"><strong>Objetivo:</strong>  Praticar a construção de planilhas eletrônicas no LibreOffice Calc, fazendo uso dos conceitos de Gráficos.

            </p>
            
            <hr class="hrLaranja">

            <h2 class="font-bold LaranjaEstado">
                <i class="fas fa-folder"></i> 02.1 - Gráficos no Calc  
            </h2>
            <hr>

            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 02.1.1 - O que são gráficos?
            </h3>
            <hr class="hrAEstado">

            <p class="Texto">
                Pode-se dizer que os gráficos são representações dos dados de planilhas através de imagens. Em vez de analisar colunas de números em uma planilha, representa-se em imagens gráficas que são de mais fácil entendimento. 
            </p>

            <br>
            <hr>

            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 02.1.2 - Tipos de gráficos
            </h3>
            <hr class="hrAEstado">

            <p class="Texto">
                O ideal é que você selecione um tipo de gráfico que torne a interpretação dos seus dados mais claras e informativas. O Calc oferece uma ampla variedade de tipos de gráficos e métodos simples para selecioná-los e visualizá-los. 
            </p>

            <p class="Texto">
                Um gráfico é capaz de transmitir sua mensagem rapidamente possibilitando apresentar os dados de uma planilha, evidenciando comparações, padrões e tendências.
            </p>

            <p class="Texto">
                Por exemplo, é possível mostrar, instantaneamente, se os números de metas caíram ou aumentaram de um trimestre para outro.
            </p>
            <br>
            <hr>


            <h4 class="font-bold AzulEstado">
                <i class="fas fa-angle-right"></i> 02.1.2.1 - Gráficos de colunas
            </h4>
            <hr class="hrAEstado">

            <p class="Texto">
                São úteis para ilustrar comparações entre itens. Gráficos de colunas, geralmente, as categorias são organizadas ao longo do eixo horizontal (X), e os valores ao longo do eixo vertical (Y)
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 8:</strong>  Gráfico em coluna.</p>
                <a href="imagens/Figura08.png" data-toggle="lightbox" data-footer="Gráfico em coluna. ">
                    <img class="img-fluid" src="imagens/Figura08.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>
            <hr>


            <h4 class="font-bold AzulEstado">
                <i class="fas fa-angle-right"></i> 02.1.2.2 - Gráficos de linhas
            </h4>
            <hr class="hrAEstado">
            
            <p class="Texto">
                Podem exibir dados contínuos ao longo do tempo, definidos em relação a uma escala comum, e que, portanto, são ideais para mostrar tendências a intervalos iguais. Nesse tipo de gráfico, os dados de categorias são distribuídos uniformemente ao longo do eixo horizontal, enquanto os dados de valores são distribuídos igualmente ao longo do eixo vertical.
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 9:</strong>  Gráfico em linha.</p>
                <a href="imagens/Figura09.png" data-toggle="lightbox" data-footer="Gráfico em linha. ">
                    <img class="img-fluid" src="imagens/Figura09.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>
            <hr>


            <h4 class="font-bold AzulEstado">
                <i class="fas fa-angle-right"></i> 02.1.2.3 - Gráficos de pizza 
            </h4>
            <hr class="hrAEstado">
            
            <p class="Texto">
                Mostram o quanto cada valor representa sobre o valor total. São utilizados quando há apenas uma série de dados a serem comparados e todos os valores são positivos.
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 10:</strong>  Gráfico em pizza.</p>
                <a href="imagens/Figura10.png" data-toggle="lightbox" data-footer="Gráfico em pizza.">
                    <img class="img-fluid" src="imagens/Figura10.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>
            <hr>


            <h4 class="font-bold AzulEstado">
                <i class="fas fa-angle-right"></i> 02.1.2.4 - Gráficos de barras
            </h4>
            <hr class="hrAEstado">

            <p class="Texto">
                Ilustram comparações entre itens individuais. Considere a utilização de gráficos de barras, quando os rótulos dos eixos forem longos e para comparar múltiplos valores.
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 11:</strong>  Gráfico em barra.</p>
                <a href="imagens/Figura11.png" data-toggle="lightbox" data-footer="Gráfico em barra.">
                    <img class="img-fluid" src="imagens/Figura11.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>
            <hr>


            <h4 class="font-bold AzulEstado">
                <i class="fas fa-angle-right"></i> 02.1.2.5 - Gráficos de área
            </h4>
            <hr class="hrAEstado">

            <p class="Texto">
                Enfatizam a magnitude da mudança no decorrer do tempo e podem ser usados para chamar atenção para o valor total ao longo de uma tendência. Exibindo a soma dos valores, o gráfico de área mostra também a relação das partes com um todo 
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 12:</strong>  Gráfico em área.</p>
                <a href="imagens/Figura12.png" data-toggle="lightbox" data-footer="Gráfico em área.">
                    <img class="img-fluid" src="imagens/Figura12.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>
            <hr>


            <h4 class="font-bold AzulEstado">
                <i class="fas fa-angle-right"></i> 02.1.2.6 - Gráficos de dispersão (XY)
            </h4>
            <hr class="hrAEstado">

            <p class="Texto">
                Apresentam dois eixos de valores, mostrando um conjunto de dados numéricos ao longo do eixo horizontal (eixo X) e outro ao longo do eixo vertical (eixo Y). Combinam esses valores em pontos de dados únicos e os exibem em intervalos irregulares ou agrupamentos. Comumente, esse tipo de gráfico é usado para exibir e comparar valores numéricos, como dados científicos, estatísticos e de engenharia
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 13:</strong>  Gráfico em área.</p>
                <a href="imagens/Figura13.png" data-toggle="lightbox" data-footer="Gráfico em área.">
                    <img class="img-fluid" src="imagens/Figura13.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>
            <hr>


            <h4 class="font-bold AzulEstado">
                <i class="fas fa-angle-right"></i> 02.1.2.7 - Gráficos de bolhas
            </h4>
            <hr class="hrAEstado">

            <p class="Texto">
                Em gráficos de bolhas, podem ser inseridos dados que se encontram organizados em colunas nas planilhas, de tal forma que valores de X sejam listados na primeira coluna e valores de Y correspondentes sejam listados em colunas adjacentes. 
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 14:</strong>  Gráfico em área.</p>
                <a href="imagens/Figura14.png" data-toggle="lightbox" data-footer="Gráfico em área.">
                    <img class="img-fluid" src="imagens/Figura14.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>
            <hr>


            <h4 class="font-bold AzulEstado">
                <i class="fas fa-angle-right"></i> 02.1.2.8 - Gráficos em rede
            </h4>
            <hr class="hrAEstado">

            <p class="Texto">
            Gráficos em comparam os valores agregados de várias séries de dados. Cada série de dados tem cor ou padrão exclusivo e é representada na legenda do gráfico. É possível inserir uma ou mais séries de dados em um gráfico.
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 15:</strong> Gráfico em rede.</p>
                <a href="imagens/Figura15.png" data-toggle="lightbox" data-footer="Gráfico em rede.">
                    <img class="img-fluid" src="imagens/Figura15.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>
            <hr>


            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 02.1.3 - Construção de gráficos
            </h3>
            <hr class="hrAEstado">

            <p class="Texto">
                No Calc, é fácil gerar gráficos a partir de qualquer planilha. Pode-se chamar o assistente de gráficos a partir do seu ícone ou do menu <strong> Inserir → gráfico.</strong>
            </p>

            <p class="Texto">
                Os gráficos no Calc estão muito fáceis e muito intuitivos e são prometidas ainda muitas melhorias para esse recurso. Ao se invocar o comando Inserir Gráfico, tem-se uma tela como a seguir (previsão do gráfico e seu assistente).
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 16:</strong> Inserir Gráficos.</p>
                <a href="imagens/Figura16.png" data-toggle="lightbox" data-footer="Inserir Gráficos.">
                    <img class="img-fluid" src="imagens/Figura16.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 17:</strong> Assistente de Gráficos.</p>
                <a href="imagens/Figura17.png" data-toggle="lightbox" data-footer="Assistente de Gráficos.">
                    <img class="img-fluid" src="imagens/Figura17.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>

            <p class="Texto">
                <strong>Etapa 1</strong> – Você terá vários tipos e subtipos de gráficos a escolher: barras, pizza, rede, dispersão etc;
            </p>

            <p class="Texto">
                <strong>Etapa 2</strong> – Intervalo de Dados – aqui se informa ao Calc a área a ser computada e plotada;

            </p>

            <p class="Texto">
                <strong>Etapa 3</strong> – Série de Dados – aqui se definem nomes e rótulos para as séries dos dados;
            </p>

            <p class="Texto">
                <strong>Etapa 4</strong> – É nessa etapa que se fazem as legendas do gráfico.
            </p>

            <p class="Texto">
                A seguir, vemos um gráfico de Pizza gerado no LibreOffice.org Calc:
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 18:</strong> Gráfico de Pizza.</p>
                <a href="imagens/Figura18.png" data-toggle="lightbox" data-footer="Gráfico de Pizza.">
                    <img class="img-fluid" src="imagens/Figura18.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 19:</strong> Tabela Modelo.</p>
                <a href="imagens/Figura19.png" data-toggle="lightbox" data-footer="Tabela Modelo.">
                    <img class="img-fluid" src="imagens/Figura19.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 20:</strong> Gráfico da Tabela Modelo.</p>
                <a href="imagens/Figura20.png" data-toggle="lightbox" data-footer="Gráfico da Tabela Modelo.">
                    <img class="img-fluid" src="imagens/Figura20.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>

            <p class="Texto">
                Para se fazer qualquer modificação, inclusive da modalidade do gráfico, é bastante dar um duplo clique neste e estaremos no modo de edição do gráfico. Nesse modo, podem ser mudados quaisquer dados, inclusive as escalas dos gráficos.
            </p>

            <p class="Texto">
                Pode-se interromper a qualquer momento, claro, a confecção do gráfico via assistente. Basta pressionar "<strong>Esc</strong>" 
            </p>

            <p class="Texto">
                Vamos tomar como exemplo a planilha do lado esquerdo:
            </p>

            <p class="Texto">
                Colocaremos os alunos no <strong>eixo X</strong> e as notas no <strong>eixo Y</strong>. Para isto, basta acessar o menu <strong>Inserir → Gráfico</strong>. Assim que acessado o item de menu acima, será mostrada a tela "<strong>Assistente de Gráfico</strong>". Escolha um "<strong>Tipo de Gráfico</strong>" e aperte o botão "<strong>Próximo >></strong>". Para o nosso exemplo, foi escolhido "<strong>Coluna</strong>".
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 21:</strong> Gráfico da Tabela Modelo.</p>
                <a href="imagens/Figura21.png" data-toggle="lightbox" data-footer="Gráfico da Tabela Modelo.">
                    <img class="img-fluid" src="imagens/Figura21.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 22 e 23:</strong> Assistente da Tabela Modelo 2.</p>
                <a href="imagens/Figura22.png" data-toggle="lightbox" data-footer="Assistente da Tabela Modelo 2.">
                    <img class="img-fluid" src="imagens/Figura22.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>

            <p class="Texto">
                Perceba que, ao concluir o processo, a tabela é incluída e na parte superior aparecem novas opções, que nos permitem modificar a estrutura do gráfico, inserindo bordas, alterando cores, legendas, títulos etc.
            </p>

            <hr>
            <div>
                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                <p class="SaibaMaisTexto">
                    Clique em <a href="https://www.youtube.com/watch?v=rPv9B3oEoNw" target="_blank">https://www.youtube .com/watch?v= rPv9B3oEoNw</a> e aprenda um pouco mais sobre como configurar e utilizar, cada gráfico.
                </p>
            </div>
            <hr>

            <div>
                <p class="AtividadeTitulo"> Pratique</p>
                <p class="AtividadeTexto">
                    Crie uma tabela com uma área destinada às suas despesas e outra destinada às receitas e em um campo da planilha repercuta o total líquido. Faça um gráfico demonstrativo desta planilha, refletindo as despesas e as receitas.
                </p>
                <p class="AtividadeTexto">
                    Uma fábrica de automóveis de uma determinada marca realizou a seguinte venda nos últimos meses:
                </p>

                <p class="AtividadeTexto">
                    <i class="fas fa-arrow-right LaranjaEstado"></i> Em junho, o faturamento em vendas foi de R$ 4.234.567,12
                </p>
                <p class="AtividadeTexto">
                    <i class="fas fa-arrow-right LaranjaEstado"></i> Em julho, o faturamento em vendas foi de R$ 6.842.524,45
                </p>
                <p class="AtividadeTexto">
                    <i class="fas fa-arrow-right LaranjaEstado"></i> Em agosto, o faturamento em vendas foi de R$ 7.356.349,56
                </p>
                <p class="AtividadeTexto">
                    <i class="fas fa-arrow-right LaranjaEstado"></i> Em setembro, o faturamento em vendas foi de R$ 7.642.333,87
                </p>

                <p class="AtividadeTexto">
                    Construa um gráfico que represente adequadamente esses dados para apresentar em uma reunião, que irá analisar as vendas nos últimos meses. 
                </p>

                <p class="Texto">
                    <small><i class="fa fa-info-circle fa-lg Azul" aria-hidden="true"></i> Essa atividade é apenas para fins de exercitar o conteúdo já visto, não será avaliada pela equipe no final do curso, portanto, não precisa ser enviada para correção.</small>
                </p>
            </div>
            <br>

            <p class="Texto">
                <strong> Chegamos ao final do nosso curso, esperamos que ele tenha sido proveitoso para você. Até a próxima!</strong>
            </p>

            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico01.4.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Referencias" class="btn btn-outline-success btn-sm">Proxima Página</a>
                </div>
            </div>

            <script>
                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                    event.preventDefault();
                    $(this).ekkoLightbox();
                });                    
            </script>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>