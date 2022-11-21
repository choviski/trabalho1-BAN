# trabalho1-BAN
Trabalho 01 da Disciplina de Banco de Dados || da Universidade do Estado de Santa Catarina

# Pré Requisitos
1. PostgreSQL
2. PHP >= 7.2
3. Composer >= 1.10.1

# Instalando as tecnologias necessárias:

PostgreSQL : https://www.hostinger.com.br/tutoriais/instalar-postgresql-ubuntu

PHP 7.2: sudo apt install php-fpm
         systemctl status php7.2-fpm

Composer: sudo apt install composer

# Configurando projeto:

1. Após clonar o repositório em sua máquina rode o comando composer install, ele irá baixar todas as dependencias do projeto na sua maquina local
2. Crie um novo database no postgres e execute nele os comandos ques estão no arquivo database.sql
3. copie e cola o arquivo .env.example no seu projeto e renomei-o para .env após isso configure o mesmo para suas configurações locais, por exemplo:

DB_CONNECTION=pgsql

DB_HOST=localhost

DB_PORT=5432

DB_DATABASE= <nome_do_seu_data_base>

DB_USERNAME= <nome_do_seu_user>

DB_PASSWORD= <sua_senha>

4. rode o comando php artisan key:generate
5. rode o comando php artisan config:cache
e finalmente, para servir o projeto, rode php artisan serve
