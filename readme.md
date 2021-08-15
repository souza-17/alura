<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## APLICAÇÃO DESENVOLVIDA EM VUE2 - LARAVEL 

REGRA DE NEGOCIO

- cadastro de usuario (MEDICO)
	- ID
	- nome
	- email
	- senha

- modulo de paciente (CRUD) - ACESSO GERAL A TODOS OS USUARIOS
	- id
	- nome
	- cpf

- modulo de Prontuario (CRUD) - SÓ TEM ACESSO A DADOS REALIZADOS PELO O USUARIO
	- vinculo com medico
	- vinculo com um paciente
	- titulo
	- descricao

- Estrutura MVC do projeto (uma breve explicação para avaliação da escrita do codigo)
    - app/Paciente.php - model classes, agenda.php - model classes, user.php - model classes
    - app/http/controller - controllers da aplicação
    - routes/web -rotas criadas para a aplicação com middleware de autenticação do laravel Auth
    - resource - view (componentes da aplicação usando vue - e gerenciador de template do laravel - blade)
    - database/migration - classes geradores de banco de dados (gera tabelas)
    - database/database.sqllite - banco de dados da aplicação
    - vendor - dependencias do larave
    - node_modules - dependencias do front 


## INSTALAÇÃO E EXECUÇÃO DO SOFTWARE
- REQUISITO DO SISTEMA PHP 7.3 APACHE
- INSTALAR XAMPP <a>https://www.apachefriends.org/xampp-files/7.3.29/xampp-windows-x64-7.3.29-2-VC15-installer.exe</a>
- PHP NA VERSÃO 7.3 - EXECUTAR O APACHE PELO PAINEL DO XAMPP
- O PROJETO PODE FICAR EM QUALQUER DIRETORIO - BASTA O APACHE ESTA RODANDO
- NAVEGAR PELO TERMINAL ATE A RAIZ DO PROJETO EXECUTAR O COMANDO - php artisan serve
- VAI UM ACESSO NA PORTA - http://127.0.0.1:8000
- ABRE NA PAGINA DE LOGIN DO SISTEMA - MENU TEM DUAS OPÇÕES ENTRAR - CADASTRAR 
- CADASTRA UM USUARIO (MEDICO)
- JÁ TEM ACESSO AO ADMIN DO SISTEMA COM OS MODULOS SOLICITADOS
  






























