$(document).ready(function() {
    const checkboxes = $('input[type="checkbox"]'); // Seleciona todos os checkboxes na página
    const results = $('#resultado'); // Seleciona o elemento que exibirá os resultados
    const classificarBtn = $('#classificarBtn'); // Seleciona o botão de classificar
    const limparBtn = $('#limparBtn'); // Seleciona o botão de limpar

    function updateResults() {
        results.html(''); // Limpa os resultados anteriores
        let selecoes = []; // Cria uma lista para armazenar as seleções
        let maiorClassificacao = 0; // Inicializa a variável para armazenar a maior classificação

        checkboxes.each(function() {
            if ($(this).is(':checked')) { // Verifica se o checkbox está marcado
                const valorClassificacao = parseInt($(this).val()); // Obtém o valor da classificação do checkbox
                const nomeCategoria = $(this).attr('name'); // Obtém o nome da categoria do checkbox
                const textoCategoria = $(this).next('legend').text().trim(); // Obtém o texto da categoria do checkbox
                const topicoCategoria = $(this).data('topico'); // Obtém o tópico do checkbox a partir de um atributo data

                // Adiciona as informações da seleção à lista
                selecoes.push({
                    valor: valorClassificacao,
                    nome: nomeCategoria,
                    texto: textoCategoria,
                    topico: topicoCategoria
                });

                // Atualiza a maior classificação se o valor atual for maior
                if (valorClassificacao > maiorClassificacao) {
                    maiorClassificacao = valorClassificacao;
                }
            }
        });

        if (selecoes.length === 0) {
            return; // Não exibe nada se nenhuma seleção for feita
        }

        // Define os detalhes das classificações
        const classificacoesDetalhadas = {
            0: `
            <h3>Classificação Indicativa: Livre</h3>
            <p>Conteúdo apropriado para todas as idades.</p>
            <ul>
                <li>Ausência de violência ou violência fantasiosa muito leve e sem impacto negativo.</li>
                <li>Sem conteúdo sexual ou referências sexuais.</li>
                <li>Linguagem apropriada para todas as idades, sem palavrões ou linguagem chula.</li>
                <li>Ausência de consumo ou referências a drogas lícitas ou ilícitas.</li>
                <li>Temas abordados são geralmente educativos, lúdicos ou neutros.</li>
            </ul>
        `,
            10: `
            <h3>Classificação Indicativa: 10 anos</h3>
            <p>Conteúdo apropriado para crianças a partir de 10 anos.</p>
            <ul>
                <li>Violência fantasiosa ou moderada que não cause medo ou trauma, geralmente em contextos de aventura ou fantasia.</li>
                <li>Insinuação leve de consumo de álcool ou drogas, sem incentivo ao uso.</li>
                <li>Linguagem moderada que pode incluir alguns palavrões leves.</li>
                <li>Pode conter insinuações de temas sexuais, mas sem qualquer conteúdo explícito ou sugestivo.</li>
            </ul>
        `,
            12: `
            <h3>Classificação Indicativa: 12 anos</h3>
            <p>Conteúdo apropriado para adolescentes a partir de 12 anos.</p>
            <ul>
                <li>Violência moderada que pode incluir lutas, confrontos e situações de perigo, mas sem violência gráfica detalhada.</li>
                <li>Referências ao consumo de drogas lícitas e ilícitas, mas sem exibição explícita do uso.</li>
                <li>Linguagem chula e palavrões moderados são permitidos.</li>
                <li>Insinuações sexuais e temas relacionados à sexualidade podem ser presentes, mas sem cenas de sexo explícito.</li>
            </ul>
        `,
            14: `
            <h3>Classificação Indicativa: 14 anos</h3>
            <p>Conteúdo apropriado para adolescentes a partir de 14 anos.</p>
            <ul>
                <li>Violência intensa que pode incluir brigas, perseguições e cenas de perigo, mas sem detalhes gráficos extremos.</li>
                <li>Conteúdo sexual pode incluir insinuações mais explícitas e situações românticas, mas sem cenas de sexo explícito.</li>
                <li>Referências ao uso de drogas lícitas e ilícitas são mais frequentes, mas sem incentivo claro ao uso.</li>
                <li>Linguagem chula e palavrões mais fortes são permitidos.</li>
            </ul>
        `,
            16: `
            <h3>Classificação Indicativa: 16 anos</h3>
            <p>Conteúdo apropriado para adolescentes a partir de 16 anos.</p>
            <ul>
                <li>Violência extrema, incluindo cenas de batalha, tortura, e morte, com algum grau de detalhamento gráfico.</li>
                <li>Conteúdo sexual pode incluir cenas de nudez e sexo implícito ou explícito, mas sem pornografia.</li>
                <li>Consumo explícito de drogas lícitas e ilícitas pode ser mostrado, sem incentivo direto ao uso.</li>
                <li>Linguagem vulgar e ofensiva é permitida.</li>
            </ul>
        `,
            18: `
            <h3>Classificação Indicativa: 18 anos</h3>
            <p>Conteúdo exclusivamente para adultos.</p>
            <ul>
                <li>Violência extrema e gráfica, incluindo tortura, mutilação, e morte com detalhes explícitos.</li>
                <li>Sexo explícito, incluindo cenas de relações sexuais detalhadas, sem restrições.</li>
                <li>Consumo explícito de drogas ilícitas, incluindo cenas de uso e abuso de substâncias.</li>
                <li>Linguagem extremamente vulgar e ofensiva, sem restrições.</li>
            </ul>
        `
        };

        // Define as classes CSS para as classificações
        const classificacoesClasses = {
            0: "livre",
            10: "classificacao-10",
            12: "classificacao-12",
            14: "classificacao-14",
            16: "classificacao-16",
            18: "classificacao-18"
        };

        // Define as imagens para as classificações
        const classificacoesImagens = {
            0: "Classind_AL.svg.png",
            10: "Classind_A10.svg.png",
            12: "Classind_A12.svg.png",
            14: "Classind_A14.svg.png",
            16: "Classind_A16.svg.png",
            18: "Classind_A18.svg.png"
        };

        // Define as imagens pequenas para as classificações
        const classificacoesImagensPequenas = {
            0: "Classind_AL.svg_30x30.png",
            10: "Classind_A10.svg_30x30.png",
            12: "Classind_A12.svg_30x30.png",
            14: "Classind_A14.svg_30x30.png",
            16: "Classind_A16.svg_30x30.png",
            18: "Classind_A18.svg_30x30.png"
        };

        // Cria o HTML das seleções feitas
        let selecoesHtml = selecoes.map(selecao => {
            return `<li class="${classificacoesClasses[selecao.valor]}">
                        <img src="imgs/${classificacoesImagensPequenas[selecao.valor]}" alt="${selecao.texto} (${selecao.topico})" style="width: 30px; height: 30px; margin-right: 5px;">
                        ${selecao.texto} (${selecao.topico})
                    </li>`;
        }).join('');

        // Atualiza o conteúdo dos resultados com as classificações e seleções
        results.html(`
        <div class="text-center">
            <img src="imgs/${classificacoesImagens[maiorClassificacao]}" alt="Classificação ${maiorClassificacao}" />
        </div>
        ${classificacoesDetalhadas[maiorClassificacao]}
        <h4>Classificação baseada nas seguintes características presentes na sua obra*:</h4>
        <ul class="result-list">${selecoesHtml}</ul>
        <small>*classificado conforme as indicações dos documentos <b>Guia Prático de Classificação Indicativa - 4ª edição (2021)</b> e
<b>Classificação Indicativa: Guia Prático de Artes Visuais</b> do <a href="bibliografia.php">Ministério da Justiça</a></small>
    `);
    }

    // Adiciona evento para atualizar os resultados quando os checkboxes são alterados
    checkboxes.on('change', updateResults);

    // Adiciona evento ao botão de classificar para atualizar os resultados e rolar a página
    classificarBtn.on('click', function(event) {
        event.preventDefault();
        updateResults();
        $('html, body').animate({
            scrollTop: $('#results-column').offset().top
        }, 'slow');
    });

    // Adiciona evento ao botão de limpar para desmarcar os checkboxes, limpar os resultados e rolar a página para o topo
    limparBtn.on('click', function(event) {
        event.preventDefault();
        checkboxes.prop('checked', false);
        results.html('');
        $('html, body').animate({
            scrollTop: 0
        }, 'slow');
    });

    updateResults(); // Atualiza os resultados ao carregar a página
});
