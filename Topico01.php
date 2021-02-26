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
                <i class="fas fa-folder"></i> 1 – Formatações Condicionais, Filtros e Classificação
            </h2>

            <p class="Texto"><strong>Objetivo:</strong>  Praticar a construção de planilhas eletrônicas no LibreOffice Calc, fazendo uso dos conceitos de formatações condicionais, filtros e classificações.
            </p>
            
            <hr class="hrLaranja">

            <h2 class="font-bold LaranjaEstado">
                <i class="fas fa-folder"></i> 01.1 - Formatação Condicional
            </h2>
            <hr >

            <p class="Texto">
                Potente suíte de escritório, sua interface limpa. Suas poderosas ferramentas libertam a criatividade e melhoram a produtividade. O LibreOffice incorpora várias aplicações que a tornam uma da mais avançada suíte de escritório livre e de código aberto do mercado. O Calc permite abrir arquivos de outras suítes de escritório, como, por exemplo, o Pacote Office da Microsoft. Isso, graças à utilização do formato Open Document (ODF – OpenDocument Format).  
            </p>

            <p class="Texto">
                Recurso muito útil em uma planilha, a Formatação Condicional faz, como o próprio nome sugere, a formatação das células selecionadas de acordo com regras lógicas, estabelecidas pelo usuário. Uma <strong>diferença funcional entre o Calc e o Excel</strong> é que utilizamos Estilos para formatar condicionalmente no Calc, mas isso não acontece no Excel. Desse modo, a formatação condicional no Excel é mais fácil, mais direta. Porém, se quisermos modificar somente o estilo das células afetadas pela formatação condicional, o Calc é uma “mão na roda”, pois podemos manipular o estilo de acordo com a nossa vontade aplicando diferentes formatações de acordo com cada condição preestabelecida por nós. 
            </p>

            <p class="Texto">
                Podemos ter uma planilha de notas de alunos em que, por exemplo, as notas iguais ou maiores que 7 (sete) sejam realçadas em amarelo (plano de fundo) com azul-escuro na cor da fonte. Primeiro, geraremos a nossa planilha fictícia e injetaremos nela alguns nomes de alunos e suas respectivas notas.
            </p>

            <p class="Texto">
                Selecione o intervalo em que deverá ser inclusa a formatação, pode ser uma tabela inteira, uma coluna ou intervalo aleatório, a ser definido pelo usuário. O uso mais comum é o de colunas. Utilizaremos, como base para essa explicação, a tabela feita na aula 02.
            </p>

            <p class="Texto">
                Após a seleção dos dados, acesse o <strong>Menu → Formatar → Formatação Condicional</strong> ou clique no "<strong>Acesso Rápido</strong>", localizado na barra de formatação. Será aberta uma caixa de diálogo da funcionalidade.
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 1:</strong> Formatação Condicional </p>
                <a href="imagens/Figura01.png" data-toggle="lightbox" data-footer="Formatação Condicional ">
                    <img class="img-fluid" src="imagens/Figura01.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>

            <p class="Texto">
                É possível fazer vários tipos de formatações, utilizando por exemplo:
            </p>
            <ul class="fa-ul">
                <li class="Texto">
                    <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> Condição;
                </li>
                <li class="Texto">
                    <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> Escala de Cores;
                </li>
                <li class="Texto">
                    <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> Barra de dados;
                </li>
                <li class="Texto">
                    <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> Conjunto de ícones e de datas.
                </li>
            </ul>
            <br>


            <p class="Texto">
                A formatação é realizada com base nos valores das células, ou seja, será possível incluir critérios para definir em quais valores será aplicada a formatação especificada. Uma vez feita a definição de intervalo, será aberto um combo para selecionar o critério (valor igual a, maior que, entre e várias outras opções), a caixa de formatação irá se ajustar para inclusão dos dados de acordo com a opção do critério.
            </p>

            <p class="Texto">
                Queremos marcar as notas que forem maiores ou iguais a 7, conforme imagem a seguir:
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 2:</strong> Condição: o valor da Célula é </p>
                <a href="imagens/Figura02.png" data-toggle="lightbox" data-footer="Condição: o valor da Célula é">
                    <img class="img-fluid" src="imagens/Figura02.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>

            <p class="Texto">
                Uma vez definido o intervalo e o critério de formatação, efetue a seleção de estilo a ser aplicado. Há várias opções de formatação preestabelecida, mas é possível adicionar novos estilos, selecionando a opção "<strong>Novo estilo</strong>". Ao selecionar, será aberta uma janela de formatação e com ela você consegue realizar as devidas mudanças que necessita. No caso, em "<strong>Efeito da Fonte</strong>", alteramos a cor da fonte, e em "<strong>Plano de fundo</strong>" alteramos a cor de fundo da célula.
            </p>

            <p class="Texto">
                Clique em <a href="https://www.youtube.com/embed/-E9C35Gbcj8">https://www.youtube.com /embed/-E9C35Gbcj8</a> e veja um vídeo explicativo - Aplicação de formatação condicional
            </p>
            
            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Apresentacao.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico01.2.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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