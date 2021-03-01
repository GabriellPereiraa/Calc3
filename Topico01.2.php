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
                <i class="fas fa-folder"></i> 01.2 -  Filtros
            </h2>
            <hr >

            <p class="Texto">
                Um filtro é uma lista de condições em que cada entrada deve atender para poder ser exibida. Você pode configurar três tipos de filtros no submenu. Selecione as colunas nas quais deseja aplicar o filtro e em seguida vá ao menu <strong>Dados → Autofiltro</strong>.
            </p>

            <p class="Texto">
                Filtros automáticos adicionam uma lista de seleção na linha de topo da coluna que contém os filtros mais utilizados. Eles são rápidos, convenientes e úteis com textos e números, porque cada lista contém cada entrada única nas células selecionadas.
            </p>

            <p class="Texto">
                Além dessas entradas únicas, filtros automáticos incluem a opção de exibir todas as entradas, os dez maiores valores numéricos, e todas as células vazias, ou as preenchidas, assim como um filtro padrão. Os filtros automáticos são um pouco limitados. Em particular, eles não permitem expressões regulares. Portanto, você não pode utilizá-los para exibir células com conteúdo semelhante, mas não idênticos.
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 3:</strong> Autofiltro </p>
                <a href="imagens/Figura03.png" data-toggle="lightbox" data-footer="Autofiltro">
                    <img class="img-fluid" src="imagens/Figura03.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>

            <p class="Texto">
                Filtros padrão são mais complexos do que os filtros automáticos. Você pode configurar até três condições para cada filtro, e combiná-las com operadores <strong>E</strong> e <strong>OU</strong>. Filtros padrão são mais úteis para números, embora alguns dos operadores, como <strong>=</strong> e <strong><></strong> também possam ser úteis com textos.
            </p>

            <p class="Texto">
                Outros operadores condicionais para filtros padrão incluem opções para exibição do maior e do menor valor, ou uma porcentagem deles. Úteis por si só, os filtros padrão adicionam valor, quando utilizados para refinar os filtros automáticos.
            </p>

            <p class="Texto">
                <strong>Filtros avançados</strong>, são estruturas semelhantes aos filtros padrão. As diferenças são que os filtros avançados são limitados a três condições, e seus critérios não são configurados em uma caixa de diálogo. Ao invés disso, os filtros avançados são inseridos numa área em branco da folha, e referenciados pela ferramenta de filtro avançado para que sejam aplicados.
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 4:</strong> Mais Filtros </p>
                <a href="imagens/Figura04.png" data-toggle="lightbox" data-footer="Mais Filtros">
                    <img class="img-fluid" src="imagens/Figura04.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>

            <p class="Texto">
                Clique em <a href="https://www.youtube.com/embed/vGzHj4XFxBw"> https:// www.youtube.com /embed/ vGzHj4XFxBw</a> e assista um vídeo explicativo sobre Filtros.
            </p>

            <hr>
            <div>
                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                <p class="SaibaMaisTexto">
                    Quer aprender um pouco mais sobre como utilizar corretamente os filtros?
                </p>
                <p class="SaibaMaisTexto">
                    Acesse: <a href="http://camilaoliveira.net/blog/2015/03/16/libreoffice-calc-filtro">http:// camilaoliveira.net /blog/2015/03/16/ libreoffice-calc-filtro</a>
                </p>
            </div>
            <hr>
            <br>

            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico01.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico01.3.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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