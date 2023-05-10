#   AVALIAÇÃO 2 

Este projeto consiste em um sistema de cadastro de candidatos para um vestibular utilizando as tecnologias PHP OO e SGBD MySQL.
Pré-requisitos
Servidor Web (ex
SGBD MySQL
Conexão à internet para carregar as bibliotecas externas
Instalação
Clone o repositório ou faça o download do código fonte
Crie um banco de dados no MySQL e execute o script SQL presente na pasta "database" para criar a tabela necessária
Configure a conexão com o banco de dados no arquivo "conexao.php" presente na pasta "database". Insira as credenciais de acesso ao banco de dados (host, usuário, senha e nome do banco)
Execute o servidor web (ex: Apache) e acesse o projeto pelo navegador
Características
O projeto conta com as seguintes funcionalidades:
Cadastrar candidato: permite cadastrar um novo candidato ao vestibular, com nome, RG ou CPF, telefone e informação sobre ser oriundo de escola pública.
Listar candidatos: exibe a lista de candidatos cadastrados no sistema, com seus respectivos dados.
Editar candidato: possibilita a atualização dos dados de um candidato já cadastrado, com exceção do ID.
Excluir candidato: remove o cadastro de um candidato do sistema.
