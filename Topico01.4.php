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
                <i class="fas fa-folder"></i> 01.4 - Elementos básicos de uma planilha no Calc
            </h2>
            <hr>

            <p class="Texto">
                Se houver linhas ou colunas longas de dados que vão além da área visível na planilha, será possível congelá-las, o que permite que as colunas ou linhas congeladas sejam vistas quando percorrer o resto dos dados. 
            </p>

            <p class="Texto">
                Vamos visualizar a tabela a seguir, percebam que a quantidade de colunas ultrapassa o espaço de visualização da tela. 
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 7:</strong>  Congelar Linha e Coluna </p>
                <a href="imagens/Figura07.png" data-toggle="lightbox" data-footer="Congelar Linha e Coluna">
                    <img class="img-fluid" src="imagens/Figura07.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>

            <p class="Texto">
                Selecione a primeira coluna (A), em seguida, vá na barra de ferramentas e escolha a ferramenta "<strong>Congelar linhas e colunas</strong>".  Nesse caso, vamos escolher "<strong>Fixar primeira coluna</strong>".
            </p>

            <p class="Texto">
                Perceba agora que mesmo rolando a barra horizontal para o lado, a primeira coluna permanece fixa. Isso facilita muito na visualização de dados que sejam importantes.
            </p>

            <hr>
            <div class="Dica">
                <p class="CuriosidadeTitulo"> Dica</p>
                <p class="CuriosidadeTexto">
                    Quer saber mais sobre? 
                </p>
                <p class="CuriosidadeTexto">
                    Clique em <a href="https://www.youtube.com/embed/6F4XWKcQIk0">https:// www.youtube.com /embed/ 6F4XWKcQIk0</a> e assista ao vídeo sobre Divisão e Congelamento de Janelas.
                </p>
            </div>
            <hr>

            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico01.3.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico01.5.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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