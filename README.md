# ------- Configurando Backend -------

## Inicialização do projeto
$ composer install

## Inicialização do backend
$ php artisan serve --host=127.0.0.1 --port=8000

## DUMP
Para configurar o ambiente pelo dump basta acessar a pasta \script_sql
onde estão os arquivos .sql e executá-los no mySQL.

## PHP ARTISAN MIGRATE

É possível criar as tabela por meio do comando "php artisan migrate", porem, 
é necessário antes criar a base "nerus_db".
Obs: O comando deve ser executado na pasta raiz do backend.

###Obs: 

O arquivo .env foi alterado e retirado do gitignore para que a base esteja configurada.