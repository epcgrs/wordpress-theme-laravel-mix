# Template Wordpress

Um repositório com um template inicial para iniciar novos projetos em Wordpress usando o pré-processador de estilos e scripts do laravel o Laravel Mix.

## Tecnologias
- Sass
- Bootstrap
- Vue
- Javascript
- HTML
- Laravel-Mix
- PHP
- Wordpress

## Como rodar o tema

1 - Baixe o Wordpress Através do site do [wordpress.org](https://br.wordpress.org/download/)

2 - Extraia a pasta wordpress para seu computador, se houver um ambiente de php instalado extraia a pasta no diretório público do seu servidor.

3 - abra a pasta do wordpress e acesse `wp-content/themes/`

4 - Exclua os temas padrões 

5 - Baixe esse repositório como zip e extraia a pasta em `wp-content/themes/`

6 - acesse a pasta do tema e rode `npm install`

7 - configure o arquivo `/wp-config.php` use o `/wp-config-sample.php` como base;

8 - crie um vhost na sua máquina 

9 - acesse o vhost e instale o WP no banco de dados

10 - configure o arquivo `wp-content/themes/pasta-do-tema/webpack.mix.js` com o vhost

11 - acesse novamente  `wp-content/themes/pasta-do-tema` e rode `npm run watch` 

12 - e desenvolva algo bem legal!
