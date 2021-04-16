# Code7
Repositório criado para o desenvolvimento da aplicação Front end/Back end.

# Como executar:

1° Passo, fazer um clone da branch master utilizando o link https://github.com/marinaldoj/Project-Code7.git<br>

### Aplicação web:

1. Passo, Entrar na pasta "code7-app"<br>
2. Passo, utilizar o comando npm install ou o yarn para baixar todas as dependencias usadas no projeto <br>
3. Passo, iniciar a aplicação usando o npm start ou yarn start, aguardar pois irá abrir automaticamente no seu browser<br>

### Api:

1. Passo, Entrar na pasta "code7-api"<br>
2. No arquivo .env adaptar o local da database para o diretorio raiz da sua máquina <br>
 - OBS: Tem que ser o diretório full ex: ##### DB_DATABASE=/Projetos/Code7/code7-api/database/database.sqlite <br>
3. Passo, rodar o comando "php artisan migrate:refresh" rodar as migrations
4. Passo, rodar o comando "php artisan serve" vai iniciar um serve local

# Dificuldades

Para desenvolver o projeto não tive dificuldades, devido a algumas outras prioridades tive pouco tempo.

# Minha opinião

No projeto como podemos ver temos um leque de melhorias que podem ser feitas: Responsividade, Validação dos campos,<br>
input mask, autenticação e alguns outros.