# Sistema de Classificação Indicativa de HQs

Este projeto é um sistema de **classificação indicativa de histórias em quadrinhos (HQs)**, desenvolvido para ajudar autores, editores e leitores a identificar a faixa etária recomendada para uma obra com base em seus conteúdos. A classificação é feita por analogia ao audiovisual, já que não existe tal classificação para livros ou HQs no Brasil.

## Funcionalidades

- **Classificação de HQs**: Com base nas diretrizes estabelecidas pelo Ministério da Justiça nos documentos CLASSIFICAÇÃO INDICATIVA: GUIA PRÁTICO DE AUDIOVISUAL. 4ª ed. Brasília: Secretaria Nacional de Justiça, 2021. Disponível em: https://www.gov.br/mj/pt-br/assuntos/seus-direitos/classificacao-1/paginas-classificacao-indicativa/CLASSINDAUDIOVISUAL_Guia_27042022versaofinal.pdf e CLASSIFICAÇÃO INDICATIVA: GUIA PRÁTICO DE ARTES VISUAIS. 1ª ed. Brasília: Secretaria Nacional de Justiça, 2021. Disponível em: https://www.gov.br/mj/pt-br/assuntos/seus-direitos/classificacao-1/paginas-classificacao-indicativa/CLASSINDARTESVISUAIS_Guia_27042022_versaofinal.pdf
- **Interface interativa**: Usuários podem selecionar características da obra e obter uma classificação indicativa instantânea.

## Tecnologias Utilizadas

- **HTML5**: Semântico e acessível (eu espero).
- **CSS3**: Layout responsivo com Bootstrap 5.3.3.
- **JavaScript**: Implementação da lógica de classificação e interação com o usuário.
- **PHP**: Usado para seccionar as páginas e reaproveitar cabeçalhos e rodapés.

## Estrutura do Projeto

- `index.php`: Página principal do sistema de classificação.
- `classificador.js`: Script JavaScript que contém a lógica para a classificação das HQs.
- `estilo.css`: Arquivo de estilo personalizado.
- `bibliografia.php`, `classificacoes.php`, `footer.php`, `head.php`, `header.php`, `sobre.php`: Componentes modulares usados para montar as páginas do sistema.

## Como Usar

1. **Clone o repositório**:
   ```bash
   git clone https://github.com/git-hubens/ClassificaHQ.git
