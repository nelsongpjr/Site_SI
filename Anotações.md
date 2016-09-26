# Anotações
<p>
criar projeto: composer create-project --prefer-dist laravel/laravel blog


configurar a base de dados no arquivo .env

		DB_CONNECTION=mysql
		DB_HOST=localhost
		DB_PORT=3306
		DB_DATABASE=dbname//nome da base de dados
		DB_USERNAME=root
		DB_PASSWORD=""


Criar model e migration: php artisan make:model nomedatabela -m


		Configurar e executar as migrations:
			https://laravel.com/docs/5.3/migrations


		Comando para executar as migrations: php artisan migrate
		

		Querys para configurar o CRUD:
			https://laravel.com/docs/5.3/database#running-queries



iniciar servidor: php artisan serve


Anotações interessantes http://www.danielrodrigues.net.br/laravel-anotacoes/
