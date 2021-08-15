<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## APLICAÇÃO DESENVOLVIDA EM VUE2 - LARAVEL 

REGRA DE NEGOCIO

- cadastro de usuario (MEDICO)
	- ID
	- nome
	- email
	- senha

- modulo de paciente (CRUD) - ACESSO GERAL A TODOS OS USUARIOS
	-id
	-nome
	-cpf

-modulo de Prontuario (CRUD) - SÓ TEM ACESSO A DADOS REALIZADOS PELO O USUARIO
	-vinculo com medico
	-vinculo com um paciente
	-titulo
	-descricao

- app/Paciente.php - model classes, agenda.php - model classes, user.php - model classes
- app/http/controller - controllers da aplicação
- routes/web -rotas criadas para a aplicação com middleware de autenticação do laravel Auth
- resource - view (componentes da aplicação usando vue - e gerenciador de template do laravel - blade)
- database/migration - classes geradores de banco de dados (gera tabelas)
- database/database.sqllite - banco de dados da aplicação
- vendor - dependencias do larave
- node_modules - dependencias do front 


## BAIXAR APLICAÇÃO INSTALAR O XAMP QUE ESTA DENTRO DA RAIZ 

PRECISA DA VERSÃO 7,3 DO PHP

ENTRA NO DIRETORIO RAIZ EXECUTA PELO TERMINAL - php artisan serve

- vai gerar um acesso na porta http://127.0.0.1:8000
    já podendo cadastrar usuarios pelo menu registrar















