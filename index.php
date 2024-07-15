<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'head.php'; ?>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h1 class="display-4">Classificador Indicativo de HQs <i>(beta)</i></h1>
        <div class="text-center mt-4 mb-4">
            <button id="limparBtn" class="btn btn-secondary">Limpar tudo</button>
        </div>

        <form id="classificador" method="post">

            <!-- Conteúdo das Categorias começa aqui -->
            <div class="container">
                <div class="row">
                    <!-- Primeira Coluna -->
                    <div class="col-md-4 form-column">
                        <div class="category">
                            <h2>A. Violência</h2>
                            <!-- Aqui inicia A. Violência -->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.1.1"
                                    data-topico="item A.1.1" value="0" />
                                <legend id="violence-heading">Arma sem violência</legend>
                                <label class="form-check-label" for="A.1.1">
                                    - Presença de armas de qualquer natureza, sem que o contexto violento esteja
                                    presente, desde que o objeto seja o cerne das imagens, performances, exposição ou
                                    mostra em questão.<br>
                                    - Para este critério, amolda-se a utilização de armas em estandes de tiro,
                                    treinamentos em que não há agressão direta entre os indivíduos e a utilização em
                                    qualquer outro local apropriado, em que o uso não seja apresentado de forma
                                    violenta.<br>
                                    - Não há a consolidação da tendência quando no caso em que a caracterização
                                    indumentária esteja associada às armas, tais como representações de cowboys,
                                    policiais, samurais, guerreiros, entre outros, à exceção dos casos em que o
                                    armamento for o cerne das imagens apresentadas.<br>
                                    - <i>(fonte: Classificação Indicativa Áudio Visual)</i>
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.1.2"
                                    data-topico="item A.1.2" value="0" />
                                <legend id="violence-heading">Morte sem violência</legend>
                                <label class="form-check-label" for="A.1.2">
                                    - Representações de mortes sem violência sem que haja o envolvimento de dor ou
                                    lesões.<br>
                                    - Podem estar relacionadas a enfermidades ou velhice, sem que o padecimento físico
                                    seja evidenciado.<br>
                                    - Não se confunde com “morte natural ou acidental com dor ou violência”, visto que o
                                    contexto violento não está presente, e o padecimento pode ser entendido como uma
                                    consequência esperada.<br>
                                    - Não se confunde com “exposição de cadáver”, uma vez que remonta ao exato momento
                                    ou aquele iminentemente posterior ao padecimento, enquanto que na tendência não
                                    recomendada para menores de 12 anos é possível inferir uma passagem de tempo maior
                                    em relação à causa mortis, implicando em elementos que se associam à violência ou
                                    que impliquem na apresentação de características visuais, tais como cianose,
                                    putrefação, etc.<br>
                                    - <i>(fonte: Classificação Indicativa Áudio Visual)</i>
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.1.3"
                                    data-topico="item A.1.3" value="0" />
                                <legend id="violence-heading">Ossada ou esqueleto sem violência</legend>
                                <label class="form-check-label" for="A.1.3">
                                    - Exibição de ossadas e esqueletos humanos ou de animais que não apresentem relação
                                    com quaisquer tipos de violência.<br>
                                    - <i>(fonte: Classificação Indicativa Áudio Visual)</i>
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.1.4"
                                    data-topico="item A.1.4" value="0" />
                                <legend id="violence-heading">Violência fantasiosa</legend>
                                <label class="form-check-label" for="A.1.4">
                                    - Apresentação de níveis elementares e fantasiosos de violência, a exemplo dos atos
                                    agressivos vistos em tiras cartunescas destinadas ao público infantil, que não
                                    apresentem correspondência com a realidade.<br>
                                    - Apresentação de brigas não impactantes de tramas infanto-juvenis maniqueístas, de
                                    luta do bem contra o mal, sem que se coadunem com a realidade.<br>
                                    - Apresentação da violência de forma caricata inserida no gênero comédia-pastelão
                                    (guerra de comida, pancadas que não resultem em danos físicos importantes), ou seja,
                                    que são feitas para provocar o riso e não como incentivadores da violência.<br>
                                    - Vale mencionar que a caracterização do critério absorve a apresentação de armas e
                                    artefatos usados na consecução fantasiosa da violência, de forma que tais objetos
                                    não devem ser identificados como critério gravoso de análise. Nestes casos, a
                                    depender da apresentação, não existe a tendência de “arma com violência”, que fica
                                    absorvida pelo critério técnico da violência fantasiosa.<br>
                                    - <i>(fonte: Classificação Indicativa Áudio Visual)</i>
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.2.1"
                                    data-topico="A.2.1" value="10" />
                                <legend id="violence-heading">Angústia</legend>
                                <label class="form-check-label" for="A.2.1">
                                    - Conteúdos que possam provocar desconforto no público, tais como a apresentação de
                                    discussões ríspidas, escatologia, personagens em depressão ou tristeza intensa,
                                    acidentes e destruições, morte de pais ou de pessoas ou animais com vínculos fortes
                                    com o personagem.<br>
                                    - Incluem-se os procedimentos ou intervenções cirúrgicas, em hospitais ou não, em
                                    que um médico (ou alguém com conhecimentos de socorrismo) performa qualquer ação
                                    invasiva, com visualização de lesões, incisões, suturas, entre outras, com o intuito
                                    de salvar ou restituir a saúde de um paciente.<br>
                                    - Em tais procedimentos, quando existir a apresentação de sangue, esta deve ser
                                    citada como a tendência de indicação “presença de sangue (12 anos)”.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.2.2"
                                    data-topico="A.2.2" value="10" />
                                <legend id="violence-heading">Arma com violência</legend>
                                <label class="form-check-label" for="A.2.2">
                                    - Representações em que as armas são usadas no intuito de praticar violência,
                                    havendo ou não a consumação do ato violento.<br>
                                    - A tendência deve ser utilizada desde que haja, no mínimo, a retratação de uma
                                    ameaça real.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.2.3"
                                    data-topico="A.2.3" value="10" />
                                <legend id="violence-heading">Ato criminoso sem violência</legend>
                                <label class="form-check-label" for="A.2.3">
                                    - Representação de ações que resultem em crime, contravenção ou infração, conforme a
                                    legislação brasileira, que não resulte ou se relacione diretamente à violência.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.2.4"
                                    data-topico="A.2.4" value="10" />
                                <legend id="violence-heading">Linguagem depreciativa</legend>
                                <label class="form-check-label" for="A.2.4">
                                    - Representações em que os personagens tecem comentários maldosos ou depreciativos a
                                    respeito de alguém que não esteja presente, amoldando-se a xingamentos e a
                                    inferiorizações aferidas ao personagem que é vítima indireta da ação.<br>
                                    - Não há a presença da tendência quando forem utilizados termos infantilizados, que
                                    não comprometam a dignidade e a honestidade dos envolvidos, com baixo ou nenhum
                                    poder ofensivo, tais como bobo, chato, feio, etc.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.2.5"
                                    data-topico="A.2.5" value="10" />
                                <legend id="violence-heading">Medo ou tensão</legend>
                                <label class="form-check-label" for="A.2.5">
                                    - Representações em que os elementos de composição criem uma ambientação que possa
                                    causar medo, susto ou tensão no público.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.2.6"
                                    data-topico="A.2.6" value="10" />
                                <legend id="violence-heading">Ossada ou esqueleto com resquício de ato de violência
                                </legend>
                                <label class="form-check-label" for="A.2.6">
                                    - Exibição de ossadas ou esqueletos humanos ou de animais resultantes de qualquer
                                    tipo de violência. Incluem-se aqueles encontrados durante as investigações
                                    policiais, perícias médicas e outras situações típicas em que a consumação da
                                    violência é evidente.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.3.1"
                                    data-topico="A.3.1" value="12" />
                                <legend id="violence-heading">Agressão verbal</legend>
                                <label class="form-check-label" for="A.3.1">
                                    - Representações em que ocorram xingamentos ou troca de ofensas entre personagens.<br>
                                    - Não há a presença da tendência quando forem utilizados termos infantilizados ou
                                    lúdicos, que não comprometam a dignidade e honestidade dos envolvidos, com baixo ou
                                    nenhum poder ofensivo, tais como bobo, chato, feio, entre outros.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.3.2"
                                    data-topico="A.3.2" value="12" />
                                <legend id="violence-heading">Assédio sexual</legend>
                                <label class="form-check-label" for="A.3.2">
                                    - Representações em que uma pessoa constrange outra, com o intuito de obter vantagem
                                    ou favor sexual, prevalecendo-se da sua condição de superior hierárquico no
                                    exercício de emprego, cargo ou função.<br>
                                    - A tendência também é identificada quando o agressor pratica o ato valendo-se de
                                    qualquer outra forma de poder.<br>
                                    - Neste caso, não é retratada a consumação do ato sexual, estando presente apenas o
                                    constrangimento.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.3.3"
                                    data-topico="A.3.3" value="12" />
                                <legend id="violence-heading">Ato violento</legend>
                                <label class="form-check-label" for="A.3.3">
                                    - Representações de ameaça ou ação intencional de violência, que atente contra a
                                    integridade corporal, liberdade ou a saúde, própria ou de outrem. Incluem-se nesta
                                    tendência as retratações do tráfico de pessoas.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.3.4"
                                    data-topico="A.3.4" value="12" />
                                <legend id="violence-heading">Ato violento contra animal</legend>
                                <label class="form-check-label" for="A.3.4">
                                    - Representações de maus-tratos, com a presença, ou não, de ferimentos contra
                                    animais.<br>
                                    - A retratação de animais em eventos como rinhas ou touradas, também se amolda à
                                    tendência.<br>
                                    - Não há a configuração do critério nos casos em que o abate seja feito com o
                                    intuito de sobrevivência ou consumo. Porém, podem ser utilizados outros critérios,
                                    tais como angústia e presença de sangue, caso sejam determinantes nas cenas.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.3.5"
                                    data-topico="A.3.5" value="12" />
                                <legend id="violence-heading">Bullying</legend>
                                <label class="form-check-label" for="A.3.5">
                                    - É o ato de violência psicológica, intencional e repetitiva, cometido contra
                                    pessoas indefesas ou que apresentem alguma característica que possa ser
                                    estigmatizada. A tendência é identificada, geralmente, nas representações ou
                                    simulações de ambientes estudantis, tais como colégios e universidades.<br>
                                    - Frequentemente, o agressor (ou agressores) comete tal tipo de violência, devido a
                                    sua superioridade física ou por meio da intimidação, derivada de sua influência
                                    sobre o meio social em que estão inseridos.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.3.6"
                                    data-topico="A.3.6" value="12" />
                                <legend id="violence-heading">Descrição de violência</legend>
                                <label class="form-check-label" for="A.3.6">
                                    - Narrações, cartelas gráficas ou diálogos que narrem, de forma detalhada, qualquer
                                    tipo de violência, tais como as descrições de abortos, de penas de morte, de
                                    eutanásia, de assassinatos, de suicídios, de agressões, de torturas, entre outros.<br>
                                    - As descrições de acidentes, com padecimento físico ou mortes, também representam
                                    esta tendência.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.3.7"
                                    data-topico="A.3.7" value="12" />
                                <legend id="violence-heading">Exposição ao perigo</legend>
                                <label class="form-check-label" for="A.3.7">
                                    - Representação de ato volitivo ou omissivo que coloque em risco a vida ou a saúde
                                    de si mesmo ou de outrem. O ato depende da consciência sobre a omissão ou o risco da
                                    ação realizada. O perigo deve ser palpável e previsível.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.3.8"
                                    data-topico="A.3.8" value="12" />
                                <legend id="violence-heading">Exposição de cadáver</legend>
                                <label class="form-check-label" for="A.3.8">
                                    - Exibição de corpos sem vida, com o óbito sendo resultante de violência ou não.
                                    - Vale mencionar que os cadáveres devem ser apresentados de forma descontextualizada
                                    com a causa mortis.<br>
                                    - É importante verificar o especificado no item <i>Morte sem violência (A.1.2.)</i>, que diferencia das
                                    tendências “morte sem violência”, “exposição de cadáver” e “morte natural ou
                                    acidental com dor ou violência”.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.3.9"
                                    data-topico="A.3.9" value="12" />
                                <legend id="violence-heading">Exposição de pessoa em situação constrangedora ou
                                    degradante</legend>
                                <label class="form-check-label" for="A.3.9">
                                    - Assédio moral, constrangimento, degradação ou humilhação que pode ser expressa de
                                    várias formas, seja verbalmente ou por meio de imagens ou contextos.<br>
                                    - A predisposição da(s) pessoa(s) em se envolver em uma situação não é um atenuante
                                    da tendência, mesmo que o faça por inocência ou em troca de qualquer tipo de
                                    retribuição.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.3.10"
                                    data-topico="A.3.10" value="12" />
                                <legend id="violence-heading">Lesão corporal</legend>
                                <label class="form-check-label" for="A.3.10">
                                    - Exibição de lesões corporais, cortes, fraturas ou órgãos internos, sejam eles
                                    produzidos por quaisquer tipos de violência ou acidentes.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.3.11"
                                    data-topico="A.3.11" value="12" />
                                <legend id="violence-heading">Morte derivada de ato heróico</legend>
                                <label class="form-check-label" for="A.3.11">
                                    - Representação de ato altruísta de qualquer personagem, que resulte em sua morte,
                                    quando feito com o intuito de salvar a vida de outrem, em prol da maioria ou para o
                                    bem da humanidade.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.3.12"
                                    data-topico="A.3.12" value="12" />
                                <legend id="violence-heading">Morte natural ou acidental com dor ou violência</legend>
                                <label class="form-check-label" for="A.3.12">
                                    - Representação de mortes acidentais ou naturais nas quais se evidencia sofrimento,
                                    padecimento ou lesões.<br>
                                    - A tendência deve ser pontuada tanto no momento da morte, quanto na exposição do
                                    cadáver.<br>
                                    - É importante verificar o especificado no item <i>Morte sem violência (A.1.2.)</i>, que diferencia das
                                    tendências “morte sem violência”, “exposição de cadáver” e “morte natural ou
                                    acidental com dor ou violência”.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.3.13"
                                    data-topico="A.3.13" value="12" />
                                <legend id="violence-heading">Obscenidade</legend>
                                <label class="form-check-label" for="A.3.13">
                                    - Ato ou palavra, expressos de forma escrita ou gestual, com o intuito de ofender,
                                    ridicularizar ou constranger alguém.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.3.14"
                                    data-topico="A.3.14" value="12" />
                                <legend id="violence-heading">Presença de sangue</legend>
                                <label class="form-check-label" for="A.3.14">
                                    - Exibição de sangue oriundo de alguma lesão corporal, seja ela exibida ou não; de
                                    agressões físicas (como socos, cortes e tiros), acidentes (como os automobilísticos
                                    e domésticos), procedimentos médicos e lesões internas (como cirurgias, vômitos com
                                    sangue) e cenários ou objetos ensanguentados.<br>
                                    - Vale ressaltar que retratações de pequenos cortes, retirada de sangue para exames
                                    laboratoriais, menstruação e sangramentos nasais não são considerados (salvo quando
                                    o enquadramento e as composições de cena valorizem a presença de sangue).<br>
                                    - O abate de animais, mesmo que para consumo, pode apresentar tal tendência, desde
                                    que o enquadramento imagético valorize a visualização do sangue.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.3.15"
                                    data-topico="A.3.15" value="12" />
                                <legend id="violence-heading">Sofrimento da vítima</legend>
                                <label class="form-check-label" for="A.3.15">
                                    - Exibição de sofrimento ou padecimento, em razão de fato violento, acidente,
                                    enfermidade ou procedimento médico/cirúrgico.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.3.16"
                                    data-topico="A.3.16" value="12" />
                                <legend id="violence-heading">Supervalorização da beleza física</legend>
                                <label class="form-check-label" for="A.3.16">
                                    - Valorização excessiva da beleza física, apresentada como condição imprescindível
                                    para uma vida mais feliz ou para a aceitação social.<br>
                                    - A valorização tem que ser expressa de maneira clara.<br>
                                    - Não se amoldam à tendência os concursos de beleza ou desfiles de moda, desde que
                                    não haja o discurso ou afirmações que definam de maneira fútil ou restrita os
                                    padrões de beleza ou de estética corporal.<br>
                                    - A retratação dos riscos inerentes a este comportamento, tais como anorexia ou
                                    bulimia, além dos outros riscos e possíveis falhas nos procedimentos cirúrgicos,
                                    dentre outros, atenuam a tendência.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.3.17"
                                    data-topico="A.3.17" value="12" />
                                <legend id="violence-heading">Supervalorização do consumo</legend>
                                <label class="form-check-label" for="A.3.17">
                                    - Representações enfáticas em que o consumo é condição imprescindível para uma vida
                                    mais feliz ou para a aceitação social.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.3.18"
                                    data-topico="A.3.18" value="12" />
                                <legend id="violence-heading">Violência psicológica</legend>
                                <label class="form-check-label" for="A.3.18">
                                    - Representações nas quais a violência acontece em uma relação desigual, cujos
                                    agentes exercem qualquer tipo de poder sobre as vítimas, sujeitando-as de forma
                                    intencional a maus tratos psíquicos.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.4.1"
                                    data-topico="A.4.1" value="14" />
                                <legend id="violence-heading">Aborto</legend>
                                <label class="form-check-label" for="A.4.1">
                                    - Representações da descontinuação dolosa da gravidez, com ou sem expulsão do feto,
                                    da qual resulta a morte do nascituro. Para a contemplação desta tendência é
                                    necessário que o ato seja iniciado ou que o indivíduo se dirija ao local do
                                    procedimento, deixando clara a intenção de concretizá-lo.<br>
                                    - Não se amolda à tendência o aborto espontâneo.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="violencia" id="A.4.2"
                                    data-topico="A.4.2" value="14" />
                                <legend id="violence-heading">Estigma ou preconceito</legend>
                                <label class="form-check-label" for="A.4.2">
                                    - Diálogos, imagens ou contextos que estereotipam as chamadas minorias ou grupos
                                    vulneráveis, apresentados em forma de chacota ou que depreciem um indivíduo ou
                                    grupo. Tal violência pede levar em conta as particularidades, reiterando sua
                                    valoração histórica como algo negativo, de modo a ridicularizar suas características
                                    ou crenças próprias (a identidade social). Este comportamento resulta na diminuição
                                    do indivíduo ou grupo, atribuindo-lhe condição defeituosa.<br>
                                    - Considera-se estigma quando uma característica depreciativa é atribuída a uma
                                    pessoa ou a um grupo de pessoas. O preconceito, por sua vez, quando existe ofensa
                                    direta ou limitação ao acesso aos direitos garantidos a todos.
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Segunda Coluna -->
                    <div class="col-md-4 form-column">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="violencia" id="A.4.3"
                                data-topico="item A.4.3" value="14" />
                            <legend id="violence-heading">Eutanásia</legend>
                            <label class="form-check-label" for="A.4.3">
                                - É o ato intencional de proporcionar a alguém uma morte indolor para aliviar o
                                sofrimento causado por uma doença incurável ou dolorosa. Geralmente é realizada por um
                                profissional de saúde ou pessoa próxima, mediante pedido expresso da pessoa doente.<br>
                                - Retratações do suicídio assistido, em condições humanitárias, também se amoldam à
                                tendência.
                            </label>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="violencia" id="A.4.4"
                                data-topico="item A.4.4" value="14" />
                            <legend id="violence-heading">Exploração sexual</legend>
                            <label class="form-check-label" for="A.4.4">
                                - Representação de situações em que pessoas se beneficiam da prostituição de outras.
                                Corresponde, também, à indução ou à atração de alguém à prostituição ou outra forma de
                                exploração sexual, como facilitá-la, impedir ou dificultar que alguém a abandone.
                            </label>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="violencia" id="A.4.5"
                                data-topico="item A.4.5" value="14" />
                            <legend id="violence-heading">Morte intencional</legend>
                            <label class="form-check-label" for="A.4.5">
                                - Representações de homicídios dolosos.<br>
                                - Esta tendência também é observada quando seres mitológicos, fantasiosos,
                                extraterrestres (antropomorfizados ou não) e animais cometem a violência, assumindo o
                                papel central do ato.<br>
                                - Não há a incidência da tendência em retratações da vida animal, em que possam ser
                                mostrados ataques de animais a seres humanos. Neste caso, vislumbra-se a tendência de
                                morte acidental com violência.
                            </label>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="violencia" id="A.4.6"
                                data-topico="item A.4.6" value="14" />
                            <legend id="violence-heading">Pena de morte</legend>
                            <label class="form-check-label" for="A.4.6">
                                - Retratações nas quais pessoas são mortas pela ação do Estado, como punição por um
                                crime cometido.<br>
                                - Os juízos de exceção (realizados sem o devido processo legal) não são contemplados
                                nesta tendência.
                            </label>
                        </div>
                        <!-- Aqui termina  A. Violência  -->

                        <div class="category">
                            <h2>B. Sexo e Nudez</h2>
                            <!-- Aqui inicia B. Sexo e Nudez -->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sexo_nudez" id="B.1.1"
                                    data-topico="B.1.1" value="0" />
                                <legend id="sex-nudity-heading">Nudez não erótica</legend>
                                <label class="form-check-label" for="B.1.1">
                                    - A tendência é aplicada taxativamente aos seguintes casos: retratação de
                                    comunidades indígenas ou tradicionais silvícolas; amamentação; nudez infantil (sem a
                                    associação com pedofilia); autópsias; obras de arte sem teor erótico explícito;
                                    exames médicos; casos em que um indivíduo necessita de auxílio ou cuidados para
                                    trocar de roupa e/ou banhar-se.<br>
                                    - Não se amoldam à tendência as imagens ou retratações em que há uma valorização das
                                    partes íntimas dos indivíduos. Neste caso, deve ser usada a tendência de nudez.<br>
                                    - <i>(fonte: Classificação Indicativa Áudio Visual)</i>
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sexo_nudez" id="B.2.1"
                                    data-topico="B.2.1" value="10" />
                                <legend id="sex-nudity-heading">Conteúdo educativo sobre sexo</legend>
                                <label class="form-check-label" for="B.2.1">
                                    - Diálogos e imagens não estimulantes sobre sexo e que estejam dentro de contexto
                                    educativo ou informativo.<br>
                                    - <i>(fonte: Classificação Indicativa Áudio Visual)</i>
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sexo_nudez" id="B.3.1"
                                    data-topico="B.3.1" value="12" />
                                <legend id="sex-nudity-heading">Apelo sexual</legend>
                                <label class="form-check-label" for="B.3.1">
                                    - Representações em que há a objetivação sexual, seja pela valorização imagética de
                                    alguma característica física ou de alguma qualidade sexual do indivíduo.<br>
                                    - Nestes casos, o contexto erótico não é estimulado ativamente pela personagem
                                    enfocada.<br>
                                    - <i>(fonte: Classificação Indicativa Áudio Visual)</i>
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sexo_nudez" id="B.3.2"
                                    data-topico="B.3.2" value="12" />
                                <legend id="sex-nudity-heading">Carícia sexual</legend>
                                <label class="form-check-label" for="B.3.2">
                                    - Representações em que personagens se acariciam e a sexualização está presente, mas
                                    a ação não resulta em relação sexual. A tendência, portanto, ocorre quando há
                                    carícias mais contundentes, em que fique clara a não consecução do ato ou da
                                    insinuação sexual.<br>
                                    - <i>(fonte: Classificação Indicativa Áudio Visual)</i>
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sexo_nudez" id="B.3.3"
                                    data-topico="B.3.3" value="12" />
                                <legend id="sex-nudity-heading">Insinuação sexual</legend>
                                <label class="form-check-label" for="B.3.3">
                                    - A tendência é aplicada quando é possível deduzir por diálogos, imagens e/ou
                                    contextos, que a relação ocorreu, ocorrerá ou está ocorrendo, sem que seja possível
                                    visualizar o ato sexual.<br>
                                    - <i>(fonte: Classificação Indicativa Áudio Visual)</i>
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sexo_nudez" id="B.3.4"
                                    data-topico="B.3.4" value="12" />
                                <legend id="sex-nudity-heading">Linguagem chula</legend>
                                <label class="form-check-label" for="B.3.4">
                                    - Diálogos, narrações ou imagens que apresentem palavras chulas ou de baixo calão.
                                    São expressões ofensivas geralmente relacionadas ao sexo, excrementos e órgãos
                                    sexuais.<br>
                                    - Não entram no rol termos como nádegas, pênis e vagina.<br>
                                    - <i>(fonte: Classificação Indicativa Áudio Visual)</i>
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sexo_nudez" id="B.3.5"
                                    data-topico="B.3.5" value="12" />
                                <legend id="sex-nudity-heading">Linguagem de conteúdo sexual</legend>
                                <label class="form-check-label" for="B.3.5">
                                    - Diálogos, narrações, representações, sinalizações ou cartelas gráficas sobre sexo,
                                    sem que haja apresentação de vulgaridades. As representações descrevem a prática do
                                    ato sexual ou do comportamento sexual, sem que a sua descrição seja detalhista e/ou
                                    banalizada.<br>
                                    - (origem: Classificação Indicativa Áudio Visual)
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sexo_nudez" id="B.3.6"
                                    data-topico="B.3.6" value="12" />
                                <legend id="sex-nudity-heading">Masturbação</legend>
                                <label class="form-check-label" for="B.3.6">
                                    - Representação não explícita de masturbação individual. Não há de se falar na
                                    tendência quando o indivíduo recebe a ajuda de outra pessoa na realização do ato
                                    (sexo manual).<br>
                                    - (origem: Classificação Indicativa Áudio Visual)
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sexo_nudez" id="B.3.7"
                                    data-topico="B.3.7" value="12" />
                                <legend id="sex-nudity-heading">Nudez velada</legend>
                                <label class="form-check-label" for="B.3.7">
                                    - Nudez sem a apresentação de nus frontais (pênis, vagina), seios ou nádegas, ou
                                    seja, em que as partes íntimas dos indivíduos não são apresentadas, desde que haja
                                    um contexto sexual.<br>
                                    - (origem: Classificação Indicativa Áudio Visual)
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sexo_nudez" id="B.3.8"
                                    data-topico="B.3.8" value="12" />
                                <legend id="sex-nudity-heading">Simulação de sexo</legend>
                                <label class="form-check-label" for="B.3.8">
                                    - A tendência é aplicada quando, em obras - especialmente utilizando-se de recursos
                                    de áudio, vídeo e performance -, sejam apresentados quaisquer tipos de relação
                                    sexual, de forma farsesca, sem que seja contemplado o ato sexual em si. Tratam-se,
                                    em outras palavras, de situações em que os personagens encenam o ato sexual.<br>
                                    - (origem: Classificação Indicativa Áudio Visual)
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sexo_nudez" id="B.4.1"
                                    data-topico="B.4.1" value="14" />
                                <legend id="sex-nudity-heading">Erotização</legend>
                                <label class="form-check-label" for="B.4.1">
                                    - Apresentação de imagens, performances, diálogos e contextos eróticos ou
                                    sexualmente estimulantes, tais como: strip-teases e danças eróticas. Existe a
                                    valorização imagética do contexto sexual.<br>
                                    - Nestes casos, o contexto erótico é estimulado ativamente pelo protagonista da
                                    ação.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sexo_nudez" id="B.4.2"
                                    data-topico="B.4.2" value="14" />
                                <legend id="sex-nudity-heading">Nudez</legend>
                                <label class="form-check-label" for="B.4.2">
                                    - A tendência é aplicada quando, em obras de áudio, vídeo, performance, fotografias,
                                    pinturas ou esculturas são exibidos seios, nádegas e/ou órgãos genitais, sempre que
                                    esteja presente o conteúdo sexual, com a valorização das partes íntimas.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sexo_nudez" id="B.4.3"
                                    data-topico="B.4.3" value="14" />
                                <legend id="sex-nudity-heading">Prostituição</legend>
                                <label class="form-check-label" for="B.4.3">
                                    - Retratação de qualquer etapa do ato da prostituição como sedução/conquista,
                                    oferecimento, contratação, prática sexual ou pagamento.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sexo_nudez" id="B.4.4"
                                    data-topico="B.4.4" value="14" />
                                <legend id="sex-nudity-heading">Relação sexual</legend>
                                <label class="form-check-label" for="B.4.4">
                                    - Representação de qualquer modalidade de sexo (vaginal, anal, oral e/ou manual) não
                                    explícito.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sexo_nudez" id="B.4.5"
                                    data-topico="B.4.5" value="14" />
                                <legend id="sex-nudity-heading">Vulgaridade</legend>
                                <label class="form-check-label" for="B.4.5">
                                    - Imagens, diálogos, representações ou contextos que apresentem a sexualidade de
                                    maneira detalhada ou vulgar. Existe a valorização imagética do conteúdo sexual ou a
                                    banalização da linguagem imprópria, de forma que o impacto para o espectador é mais
                                    intenso.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sexo_nudez" id="B.5.1"
                                    data-topico="B.5.1" value="16" />
                                <legend id="sex-nudity-heading">Relação sexual intensa</legend>
                                <label class="form-check-label" for="B.5.1">
                                    - A tendência é aplicada quando são exibidas representações, áudio, vídeo ou
                                    performance com conteúdos hiper-realistas e/ou de longa duração, em que seja
                                    retratada qualquer modalidade de sexo (vaginal, anal, oral, manual) não explícita.
                                    Nesta modalidade, o ato sexual é mostrado de forma verossímil e contundente.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sexo_nudez" id="B.6.1"
                                    data-topico="B.6.1" value="18" />
                                <legend id="sex-nudity-heading">Sexo explícito</legend>
                                <label class="form-check-label" for="B.6.1">
                                    - Retratação de relação sexual explícita, de qualquer natureza, inclusive da
                                    masturbação, incluindo as reações realistas dos participantes do ato sexual e/ou
                                    visualização dos órgãos sexuais. Não ocorre exclusivamente em obras pornográficas.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sexo_nudez" id="B.6.2"
                                    data-topico="B.6.2" value="18" />
                                <legend id="sex-nudity-heading">Situação sexual complexa ou de forte impacto</legend>
                                <label class="form-check-label" for="B.6.2">
                                    - Representação de atos ou situações sexuais, tais como incesto (apresentação de
                                    cenas de sexo ou relações erótico-afetivas entre parentes de primeiro grau ou
                                    correlatos, como pai, mãe, irmão, padrasto, enteado, etc.), sexo grupal, fetiches
                                    violentos, zoofilia, necrofilia, coprofilia.
                                </label>
                            </div>
                            <!-- Aqui termina B. Sexo e Nudez -->

                            <h2>C. Drogas</h2>
                            <!-- Aqui inicia C. Drogas -->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="drogas" id="C.1.1"
                                    data-topico="item C.1.1" value="0" />
                                <legend id="drugs-heading">Consumo moderado ou insinuado de droga lícita</legend>
                                <label class="form-check-label" for="C.1.1">
                                    - Representações em que são apresentados os consumos: de drogas lícitas, em
                                    situações sociais, sem que sejam apresentados os efeitos relacionados à sua
                                    ingestão, como é o caso da embriaguez. Inclui-se, nesta tendência, o consumo regular
                                    de medicamentos.<br>
                                    - Retratações fantasiosas e caricatas de consumo de drogas lícitas.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="drogas" id="C.2.1"
                                    data-topico="item C.2.1" value="10" />
                                <legend id="drugs-heading">Descrição do consumo de droga lícita</legend>
                                <label class="form-check-label" for="C.2.1">
                                    - A tendência é aplicada quando em obras - especialmente utilizando-se de recursos
                                    de áudio, vídeo e performance -, apresentam diálogos ou narrações com a descrição do
                                    consumo de drogas lícitas.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="drogas" id="C.2.2"
                                    data-topico="item C.2.2" value="10" />
                                <legend id="drugs-heading">Discussão sobre o tema drogas</legend>
                                <label class="form-check-label" for="C.2.2">
                                    - Imagens, diálogos ou contextos que apresentem o tema: “drogas”, abordando causa,
                                    consequência ou soluções pertinentes ao caso, descriminalização, com um discurso
                                    equilibrado sobre as questões sociais que o tema engloba, sem que haja apologia à
                                    temática.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="drogas" id="C.2.3"
                                    data-topico="item C.2.3" value="10" />
                                <legend id="drugs-heading">Uso medicinal de droga ilícita</legend>
                                <label class="form-check-label" for="C.2.3">
                                    - Representações do uso de drogas consideradas ilícitas no Brasil, como a maconha,
                                    para fins medicinais, quando for apresentado o contexto adequado.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="drogas" id="C.3.1"
                                    data-topico="item C.3.1" value="12" />
                                <legend id="drugs-heading">Consumo de droga lícita</legend>
                                <label class="form-check-label" for="C.3.1">
                                    - Representações do consumo e também os efeitos do uso de cigarros de nicotina e/ou
                                    bebidas alcoólicas, além de outras substâncias legalizadas para uso recreativo.<br>
                                    - Estão incluídas nesta tendência as retratações do uso ritualístico de substância
                                    alucinógena, tais como ayahuasca, peiote ou Santo-Daime. O consumo destas
                                    substâncias alucinógenas de forma descontextualizada para fins recreativos, não
                                    serão incluídas nesta tendência, mas na tendência “consumo de drogas ilícitas”.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="drogas" id="C.3.2"
                                    data-topico="item C.3.2" value="12" />
                                <legend id="drugs-heading">Consumo irregular de medicamento</legend>
                                <label class="form-check-label" for="C.3.2">
                                    - Representações do consumo de medicamentos, sem prescrição médica ou em desacordo
                                    com esta.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="drogas" id="C.3.3"
                                    data-topico="item C.3.3" value="12" />
                                <legend id="drugs-heading">Discussão sobre legalização de droga ilícita</legend>
                                <label class="form-check-label" for="C.3.3">
                                    - A tendência é aplicada quando, em obras - especialmente utilizando-se de recursos
                                    de áudio, vídeo e performance -, tratam sobre a legalização das drogas (desde a
                                    produção até o consumo), deixando claras as causas, consequências e soluções
                                    pertinentes ao caso, com um discurso equilibrado sobre as questões sociais e de
                                    saúde que o tema engloba, sem que haja apologia e descrição do consumo.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="drogas" id="C.3.4"
                                    data-topico="item C.3.4" value="12" />
                                <legend id="drugs-heading">Indução ao consumo de droga lícita</legend>
                                <label class="form-check-label" for="C.3.4">
                                    - A tendência é aplicada quando em obras - especialmente utilizando-se de recursos
                                    de áudio, vídeo e performance -, são apresentados personagens que estimulam o
                                    consumo de: cigarros de nicotina, bebidas alcoólicas ou medicamentos de forma
                                    irregular.<br>
                                    - É imperativo que haja, no mínimo, a tentativa de convencimento da outra pessoa,
                                    ficando claro que ela não tem o hábito do consumo, que está sendo convencida a
                                    prová-la por primeira vez ou que é compelida a retornar ao uso da droga, depois de
                                    abandoná-la.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="drogas" id="C.3.5"
                                    data-topico="item C.3.5" value="12" />
                                <legend id="drugs-heading">Menção a droga ilícita</legend>
                                <label class="form-check-label" for="C.3.5">
                                    - Menção, descrição ou retratação de drogas ilícitas, sem que se possa presumir o
                                    consumo.<br>
                                    - A tendência não é observada quando se infere o tráfico de entorpecentes.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="drogas" id="C.4.1"
                                    data-topico="item C.4.1" value="14" />
                                <legend id="drugs-heading">Consumo insinuado de droga ilícita</legend>
                                <label class="form-check-label" for="C.4.1">
                                    - A tendência é aplicada quando, em obras - especialmente utilizando-se de recursos
                                    de áudio, vídeo e performance -, entende-se que houve o consumo de drogas ilícitas.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="drogas" id="C.4.1"
                                    data-topico="item C.4.1" value="14" />
                                <legend id="drugs-heading">Descrição do consumo ou tráfico de droga ilícita</legend>
                                <label class="form-check-label" for="C.4.2">
                                    - A tendência é aplicada quando em obras de áudio, vídeo, textos e performance um
                                    personagem revela por linguagem verbal ou gestual, que consumiu ou traficou qualquer
                                    droga ilícita.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="drogas" id="C.5.1"
                                    data-topico="item C.5.1" value="16" />
                                <legend id="drugs-heading">Consumo de droga ilícita</legend>
                                <label class="form-check-label" for="C.5.1">
                                    - Representação do consumo e efeitos do uso de drogas ilícitas, como: cocaína,
                                    merla, crack, maconha, drogas sintéticas, etc.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="drogas" id="C.5.2"
                                    data-topico="item C.5.2" value="16" />
                                <legend id="drugs-heading">Indução ao consumo de droga ilícita</legend>
                                <label class="form-check-label" for="C.5.2">
                                    - A tendência é aplicada quando, em obras - especialmente utilizando-se de recursos
                                    de áudio, vídeo e performance -, são apresentados personagens que estimulam o
                                    consumo de drogas consideradas ilícitas no Brasil.<br>
                                    - É imperativo que haja, no mínimo, a tentativa de convencimento da outra pessoa,
                                    ficando claro que ela não tem o hábito do consumo, que está sendo convencida a
                                    prová-la por primeira vez ou que é compelida a retornar o uso da droga, depois de
                                    abandoná-la.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="drogas" id="C.5.2"
                                    data-topico="item C.5.2" value="16" />
                                <legend id="drugs-heading">Produção ou tráfico de droga ilícita</legend>
                                <label class="form-check-label" for="C.5.3">
                                    - A tendência é aplicada quando em obras - especialmente utilizando-se de recursos
                                    de áudio, vídeo e performance -, o conteúdo se refere a qualquer etapa da produção
                                    (desde o plantio até a coleta), e/ou comercialização de drogas (do embalo até o
                                    recebimento por parte do usuário) consideradas ilícitas no Brasil.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="drogas" id="C.6.1"
                                    data-topico="item C.6.1" value="18" />
                                <legend id="drugs-heading">Apologia ao uso de droga ilícita</legend>
                                <label class="form-check-label" for="C.6.1">
                                    - Imagens, diálogos ou contextos em que se estimule ou enalteça o consumo de
                                    qualquer droga ilícita, disseminando-se a ideia de que as drogas são benéficas ou
                                    inócuas.<br>
                                    - Também se amoldam a esta tendência, quaisquer enaltecimentos ao consumo destas
                                    substâncias, ao relacioná-las, diretamente, como condição sine qua non para se
                                    chegar ao poder, divertimento, sucesso ou felicidade.
                                </label>
                            </div>
                            <!-- Aqui termina C. Drogas -->
                        </div>
        </form>
    </div>
    <!-- Começo da coluna para os resultados -->
    <div class="col-md-4 result-column" id="results-column">
        <h2 class="text-center display-6">RESULTADO</h2>
        <div id="resultado">
            <!-- Os resultados serão exibidos aqui, nesse DIV -->
        </div>
    </div>
    <!-- Final da coluna para os resultados -->

    <!-- Adiciona os botões "CLASSIFICAR" e "LIMPAR" -->
    <div class="col-md-12 text-center mt-4 mb-5">
        <button id="limparBtn" class="btn btn-secondary">LIMPAR</button>
        <button id="classificarBtn" class="btn btn-primary me-2">VER CLASSIFICAÇÃO</button>
    </div>

    </div> <!-- Não lembro mais o que fecha aqui, tomara que continue funcionando -->
    </div> <!-- Idem -->

    </div>
    <?php include 'footer.php'; ?>
    <script src="js/classificador.js"></script>
</body>

</html>