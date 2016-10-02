# Anotações

criar projeto: composer create-project --prefer-dist laravel/laravel blog

PARA ABRIR E EXECUTAR O PROJETO
	- CLONAR O PROJETO DENTRO DA PASTA htdocs DO XAMPP
	- RENOMEAR O AQUIVO .env.example PARA .env
	- DAR INÍCIO NOS SERVIDORES APACHE E MYSQL
	- CRIAR A BASE DE DADOS LOCAL NO localhost/phpmyadmin com o nomde: site_si TUDO MINUSCULO
	- NO TERMINAL IR ATÉ O DIRETORIO DO SITE: cd C:\xampp\htdocs\Prototipo_Pagina_SI_UFSMFW\Site_SI
	- EXECUTAR O COMPOSER PARA A CRIAÇÃO DO PROJETO: composer update
	- EXECUTAR AS MIGRATIONS: php artisan migrate

PARA EXECUTAR
	- DAR INÍCIO NO SERVIDOR: php artisan serve
	- ACESSAR NO NAVEGADOR: localhost:8000



Criar model e migration: php artisan make:model nomedatabela -m


	Configurar e executar as migrations:
		https://laravel.com/docs/5.3/migrations

	Comando para executar as migrations: php artisan migrate
	
	Querys para configurar o CRUD:
		https://laravel.com/docs/5.3/database#running-queries



iniciar servidor: php artisan serve


Iniciar o projeto no seu computador:
	
	Assim que baixar o progeto do git dar um: composer update

Anotações interessantes http://www.danielrodrigues.net.br/laravel-anotacoes/
Documentações em português: http://laravel.artesaos.org/docs/