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
                <i class="fas fa-folder"></i> 01.3 - Classificação
            </h2>
            <hr >

            <p class="Texto">
                A classificação organiza as células visíveis na folha. No Calc, você pode classificar células utilizando até três critérios, que são aplicados, um após o outro. Classificações são úteis, quando há a necessidade de procurar por um item específico, e se torna ainda mais poderosa quando os dados são filtrados.
            </p>

            <p class="Texto">
                Além disso, a classificação é sempre útil quando adicionamos novas informações. Quando uma lista é extensa, normalmente é mais fácil adicionar novas informações no final da folha, em vez de incluir linhas nos locais apropriados. Uma vez inseridas as informações, é possível classificá-las para atualizar a folha.
            </p>

            <p class="Texto">
                Essa funcionalidade é utilizada para ordenar os dados da planilha com base na informação de uma ou mais colunas, extremamente útil para facilitar a análise dos dados ou apresentação do resultado. A utilização é simples.
            </p>

            <p class="Texto">
                Há duas formas de fazer, a mais simples e imediata é acessar os botões do menu. São duas opções: a ordenação crescente e a decrescente. Primeiro, selecione uma das colunas, depois clique no tipo de classificação desejada. Pronto, os dados serão imediatamente ordenados.
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 5:</strong> Classificações rápidas </p>
                <a href="imagens/Figura05.png" data-toggle="lightbox" data-footer="Classificações rápidas">
                    <img class="img-fluid" src="imagens/Figura05.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>

            <p class="Texto">
                A segunda forma é através do acesso pelo menu Dados – Classificação. Será exibido um menu com recursos mais avançado de classificação. É possível fazer a ordenação, utilizando várias colunas com níveis diferentes e marcar algumas opções adicionais. Segue um breve passo a passo:
            </p>

            <p class="Texto">
                O primeiro passo é selecionar o intervalo de dados, que será ordenado. Geralmente, selecionamos toda a tabela para manter a consistência da informação, mas caso seja necessário é possível ordenar apenas uma coluna. Acesse o menu, na opção Dados – Classificação para definir os critérios de classificação desejado.
            </p>

            <p class="Texto">
                Caso tenha esquecido de efetuar a seleção, não tem problema, o Calc exibirá uma mensagem sinalizando que não foram selecionadas todas células da tabela e será dada a opção de Estender a seleção, manter a seleção ou cancelar.
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 6:</strong> Ordenar </p>
                <a href="imagens/Figura06.png" data-toggle="lightbox" data-footer="Ordenar">
                    <img class="img-fluid" src="imagens/Figura06.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>

            <p class="Texto">
                Será exibido um menu que conterá duas abas para definir os parâmetros de ordenação:
            </p>

            <p class="Texto">
                <i class="fas fa-arrow-right LaranjaEstado"></i><strong> Aba de Critério de Ordenação:</strong> nessa aba, é possível definir três níveis de ordenação, ou seja, é possível selecionar várias colunas e classificar os dados seguindo a ordem das chaves.
            </p>

            <p class="Texto">
                <i class="fas fa-arrow-right LaranjaEstado"></i><strong> Aba de opções:</strong> é possível adicionar alguns critérios adicionais à classificação, as opções são:
            </p>

            <ul class="fa-ul">
                <li class="Texto">
                    <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i><strong> Diferenciar maiúscula de minúscula na classificação: </strong>se duas entradas são quase idênticas, uma com uma letra maiúscula no início, outra com uma letra minúscula na mesma posição;
                </li>
                <br>

                <li class="Texto">
                    <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i><strong> O intervalo contém rótulos de coluna:</strong> se não for marcada, a primeira linha (ou coluna) também será ordenada. Por padrão fica pré marcado;
                </li>
                <br>

                <li class="Texto">
                    <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i><strong> Incluir formatos:</strong> preservar o formato atual das células, por padrão também ficam selecionadas;
                </li>
                <br>

                <li class="Texto">
                    <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i><strong> Ativar classificação natural:</strong> esta função é para ordenar corretamente uma sequência do tipo A1, A2, A3, …, A10, A11, …, A20, A21. Por padrão, a ordenação é feita verificando o primeiro caractere, começamos com A. Depois verificamos o segundo caractere e o terceiro, ficando assim: A1, A10, A11, A2, A20 etc. Com a flag ativa a ordenação fica mais natural desta forma: A1, A2, A3, …, A10, A11, …, A20, A21;
                </li>
                <br>

                <li class="Texto">
                    <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i><strong> Copiar resultados da classificação para:</strong> permite copiar a seleção para outro local pré-definido. Para usar essa função, antes de classificar os dados, acesse a opção “Dados – Definir Intervalo”. Insira um nome para o intervalo, selecione o intervalo em si e depois clique na opção “Adicionar”. Ao voltar para o menu de classificação, será possível ver o nome do intervalo criado na relação abaixo da flag e ao clicar Ok os dados serão colados lá;
                </li>
                <br>

                <li class="Texto">
                    <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i><strong> Ordem de classificação personalizada:</strong>  é a possibilidade de criar uma lista personalizada de ordenação, como os modelos personalizados que já existem de dia da semana e mês. É possível inserir mais modelos personalizados, acessando o menu <strong>LibreOffice – Preferência – LibreOffice Calc – Listas de Classificação</strong>, clique na opção “Nova” para inserir uma nova relação e depois em “Adicionar”;
                </li>
                <br>

                <li class="Texto">
                    <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i><strong> Idioma:</strong> selecionar o idioma específico para ordenação;
                </li>
                <br>

                <li class="Texto">
                    <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i><strong> Direção:</strong> Acreditamos ser este o mais diferente, a direção em como deverá ser feita a classificação. Normalmente, classificamos de cima para baixo, essa é a opção padrão, mas também pode ser feito da esquerda para direita.
                </li>
                <br>

            </ul>

            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico01.2.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico01.4.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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