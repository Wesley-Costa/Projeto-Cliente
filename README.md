# Projeto de estágio feito com o Framework Laravel.

## Motivação
Este projeto tem como motivação o aprendizado sobre as ferramentas utilizadas na Fabrica de Software na UESB de Jequié. Dessa forma, o projeto tem como finalidade aplicar conhecimentos adquirido no treinamento fornecido pela Fabrica de Software atraves da utilização de HTML, CSS, JavaScript, PHP e o Framework Laravel para a criação de uma aplicação de cadastro de clientes, com as funções de criação, listagem, edição, remoção de dados, fazendo um CRUD básico para fins educativos.

## Para utilizar o projeto
Para que o projeto possa ser instalado e funcionar corretamente devesse seguir os seguintes passos:

- **$ git clone https://github.com/Wesley-Costa/Projeto-Estagio**
- **$ cd projeto**
- **$ composer install**
- **$ php artisan key:generate** - Mas antes de rodar este comando verifique a configuracao com o banco no arquivo .env. 
- **Para visualizar e utilizar o projeto no navegador, utilize a url: http://projeto.local/clientes**

## Importante

### Banco de Dados
O banco de dados utilizado foi o Postgres. Já a estrutura das tabelas foi feita utilizando migrations.

### Estrutura de pastas para acesso aos arquivos
- As Models do projeto ficam na pasta /app
- Os controladores da aplicação ficam na pasta Controllers (sites/projeto/app/Http/Controllers)
- As rotas da aplicação ficam no arquivo routes.php (app/Http/routes.php)
- As views e outros arquivos da aplicação ficam na pasta resources, onde podem ser encontrados arquivos JS, CSS e as blades PHP.
- A estrutura base do projeto segue o mesmo padrão aplicado na Fábrica de Software e em projetos que utilizam o framework Laravel.

### Ferramentas e Plugins
A ferramentas e plugins que complementam a parte da interface do usuario foram: AdminLTE, DataTables e MaskedInput, onde elas foram utilizadas para interação com a tabela de listagem de clientes, aplicação de mascars nos campos HTML para cadastro e edição, além do template administrativo fornecido pelo AdminLTE.
