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
            <div class="page-title">
                <h2 class="font-bold" style="color: #008445;">
                    Apresentação
                </h2>

                <p class="Texto">
                    <strong>Bem-vindo ao “Calc para Iniciantes”!</strong>
                </p>

                <p class="Texto">
                    Chegamos ao final do nosso curso. Nas aulas anteriores você aprendeu sobre como realizar cálculos de formas mais eficientes além de como estilizar sua planilha. 
                </p>
                <p class="Texto">
                    Na aula 03 estaremos trabalhando com os conceitos de gráficos, formatações condicionais e filtros. Conceitos estes que permitirão enriquecer ainda mais suas planilhas.

                </p>
                <p class="Texto">
                    Esperamos que você se dedique ao curso e tenha um bom aproveitamento!
                </p>

                <br>
                <hr>
                <h2 class="font-bold" style="color: #008445;">
                    Objetivo
                </h2>
                    <p class="Texto">
                        <i class="fas fa-bullseye" style="color: #FC6B30;"></i> Proporcionar ao aluno uma visão básica de alguns recursos do LibreOffice Calc através de exemplos práticos que possam ser utilizados em seu cotidiano pessoal e profissional.
                    </p>

            </div> <!-- CLASS PAGE TITLE FIM -->
            
            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                        <a href="Topico01.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
                </div>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>