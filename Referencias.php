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

                <h3 class="font-bold">Referências</h3>
                <hr>

                <ul style="list-style: none;">
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> ALENCAR, Thiago. ANDRADE, Elinardy. Apostila Módulo I – Projeto eJovem. Fortaleza: SEDUC Fortaleza, 2016.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> <strong>Site Camila Oliveira</strong> Disponível em: <a href=" http://camilaoliveira.net/blog/2015/03/16/libreofficecalc-filtro/" target="_blank"> http:// camila oliveira.net /blog/2015 /03/16/ libreoffice calc-filtro/</a>. Acesso em: 09 mar. 2017.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> <strong>Curso Básico de LibreOffice.org – EGPCE</strong> Disponível em: <a href="http://softwarelivre.ceara.gov.br/phocadownload/libreoffice.org.basico.apostila.hist.calc.writer.2011r02.pdf" target="_blank">http:// softwarelivre. ceara.gov.br /phoca download/ libreoffice.org .basico .apostila .hist.calc .writer. 2011r02.pdf</a>. Acesso em 15 de fevereiro de 2017.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> <strong>Guia de introdução às funções do LibreOffice Calc</strong> Disponível em: <a href="https://wiki.documentfoundation.org/images/9/95/Guia_de_Introdu%C3%A7%C3%A3o_%C3%A0s_Fun%C3%A7%C3%B5es_do_LibreOffice_Calc.pdf" target="_blank">https://wiki. document foundation .org/images /9/95/Guia _de_Introdu %C3%A7% C3%A3o _%C3%A0s_ Fun%C3%A7% C3%B5es_ do_Libre Office_Calc.pdf</a>. Acesso em 15 de fevereiro de 2017. 
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i> <strong>LibreOffice – The Document Foundation</strong> Disponível em: <a href="https://pt-br.libreoffice.org/descubra/calc/" target="_blank"> https:// pt-br. libreoffice.org /descubra/calc/</a>. Acesso em 15 de fevereiro de 2017. 
                    </li>
                </ul>
            </div>

        </div>

        <br>
        <div class="center">
            <div class="btn-group" id="btn-group">
                <a href="Topico03.2.php" class="btn btn-outline-success btn-sm ">Página Anterior</a>
                <a href="#" class="btn btn-outline-success btn-sm">Avaliação</a>
            </div>
        </div>

        <!-- SCRIPT LIGHTBOX -->
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