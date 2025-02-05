# Agenda

Este é um projeto de uma aplicação simples de gerenciamento de contatos, desenvolvido com PHP e MySQL. A aplicação permite criar, visualizar, editar e excluir contatos em uma agenda.

## Funcionalidades

- **Criar Contato**: Adicione um novo contato com nome, telefone e observações.
- **Listar Contatos**: Visualize uma lista de todos os contatos cadastrados.
- **Editar Contato**: Edite os dados de um contato existente.
- **Excluir Contato**: Remova um contato da lista.
- **Detalhes do Contato**: Visualize informações detalhadas de um contato específico.

## Tecnologias Utilizadas

- **PHP**: Linguagem principal do projeto.
- **MySQL**: Banco de dados utilizado para armazenar os contatos.
- **HTML/CSS**: Interface de usuário simples e responsiva.
- **Bootstrap**: Framework CSS utilizado para estilização.
- **Font Awesome**: Ícones utilizados nas ações (visualizar, editar, excluir).

## Requisitos

- **PHP 7.4+**
- **MySQL 5.7+**
- **Servidor Apache (ou qualquer outro servidor compatível com PHP)**
- **Composer** (para gerenciamento de dependências)
- **XAMPP** (ou outro servidor de ambiente local de desenvolvimento)

## Instalação

1. Clone o repositório:
   ```bash
   https://github.com/joaoGuilhermeOliveira/agenda.git
   ```

2. **Configure o banco de dados**:
   
   - Crie um banco de dados chamado `agenda` no seu MySQL.
   - Importe o arquivo SQL incluído na pasta `/data` para criar as tabelas necessárias.

3. **Configure o ambiente**:

   - Altere as configurações de conexão com o banco de dados no arquivo `connection.php`, conforme necessário para seu ambiente local (usuário, senha, etc.).

4. **Inicie o servidor**:

   - Execute o XAMPP ou outro servidor local que suporte PHP.
   - Acesse o projeto via navegador: `http://localhost/agenda`.

