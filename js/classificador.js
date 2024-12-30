$(document).ready(function() {
    const checkboxes = $('input[type="checkbox"]');
    const results = $('#resultado');
    const classificarBtn = $('#classificarBtn');
    const limparBtn = $('#limparBtn');

    function updateResults() {
        results.html(''); // Clear previous results
        let selecoes = [];
        let maiorClassificacao = 0;

        checkboxes.each(function() {
            if ($(this).is(':checked')) {
                const valorClassificacao = parseInt($(this).val());
                const nomeCategoria = $(this).attr('name');
                const textoCategoria = $(this).next('legend').text().trim();
                const topicoCategoria = $(this).data('topico'); // Assumindo que o tópico está armazenado no data attribute

                selecoes.push({
                    valor: valorClassificacao,
                    nome: nomeCategoria,
                    texto: textoCategoria,
                    topico: topicoCategoria
                });

                if (valorClassificacao > maiorClassificacao) {
                    maiorClassificacao = valorClassificacao;
                }
            }
        });

        if (selecoes.length === 0) {
            return; // Não exibe nada se nenhuma seleção for feita
        }

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

        const classificacoesClasses = {
            0: "livre",
            10: "classificacao-10",
            12: "classificacao-12",
            14: "classificacao-14",
            16: "classificacao-16",
            18: "classificacao-18"
        };

        const classificacoesImagens = {
            0: "Classind_AL.svg.png",
            10: "Classind_A10.svg.png",
            12: "Classind_A12.svg.png",
            14: "Classind_A14.svg.png",
            16: "Classind_A16.svg.png",
            18: "Classind_A18.svg.png"
        };

        const classificacoesImagensPequenas = {
            0: "Classind_AL.svg_30x30.png",
            10: "Classind_A10.svg_30x30.png",
            12: "Classind_A12.svg_30x30.png",
            14: "Classind_A14.svg_30x30.png",
            16: "Classind_A16.svg_30x30.png",
            18: "Classind_A18.svg_30x30.png"
        };

        let selecoesHtml = selecoes.map(selecao => {
            return `<li class="${classificacoesClasses[selecao.valor]}">
                        <img src="imgs/${classificacoesImagensPequenas[selecao.valor]}" alt="${selecao.texto} (${selecao.topico})" style="width: 30px; height: 30px; margin-right: 5px;">
                        ${selecao.texto} (${selecao.topico})
                    </li>`;
        }).join('');

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

    checkboxes.on('change', updateResults);

    classificarBtn.on('click', function(event) {
        event.preventDefault();
        updateResults();
        $('html, body').animate({
            scrollTop: $('#results-column').offset().top
        }, 'slow');
    });

    limparBtn.on('click', function(event) {
        event.preventDefault();
        checkboxes.prop('checked', false);
        results.html('');
        $('html, body').animate({
            scrollTop: 0
        }, 'slow');
    });

    updateResults();
});
