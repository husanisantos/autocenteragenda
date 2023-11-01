<p align="center"><img src="https://raw.githubusercontent.com/husanisantos/autocenteragenda/main/images/logo.png" alt="Imagem Logo" style="width: 40%;"></p>

## Estudo de caso

O aluno deverá implementar um conjunto de APIs e interface gráfica para realizar o CRUD referente a duas tabelas que se relacionam do tipo 1:N cuja escolha do módulo ficará a cargo do
grupo. O grupo poderá escolher qualquer tema que deseje implementar.

  **Não poderá ser utilizada a tabela do módulo financeiro feita no trabalho anterior.**

  Todas as tabelas deverão ter pelo menos os campos ID, Removido, um campo do tipo texto, um campo do tipo data e um campo do tipo decimal.

Uma das tabelas obrigatoriamente deverá ter uma chave estrangeira referenciando a outra tabela.
  
# Regras de negócio
Um programador está implementando um determinado módulo para o sistema ERP. Para cada uma
das tabelas, deverá implementar 5 operações de CRUD de acordo com as realizadas em atividades
anteriores e vistas em sala de aula.

As operações deverão ser realizadas no formato de APIs e são:

• **GetAllXXX**: retorna todos os campos da tabela. Vai trazer somente os registros que não
foram apagados, isto é, aqueles cujo campo removido seja igual a false;

• **GetXXXByID**: retorna todos os campos da tabela de acordo com o ID informado. Vai trazer
somente o registro que não foi apagado, isto é, aquele cujo campo removido seja igual a
false;

• **InsertXXX**: insere um novo registro na tabela;

• **UpdateXXX**: atualiza um registro na tabela de acordo com o ID informado;

• **DeleteXXX**: efetua um soft delete e um registro na tabela de acordo com o ID informado. O registro não é apagado fisicamente, apenas o campo removido é passado para true.


# Front-end:
<details>
• Para cada API do back-end deve ser criada uma respectiva função no front-end que usará a
API
 
• Deverá haver controle de sessão de usuário logado.
</details>

# Back-end:
<details>
 Este repositório contém o servidor backend para um aplicativo web. Certifique-se de atender aos requisitos do servidor backend antes de prosseguir com a configuração.

## Requisitos do Servidor Backend

Certifique-se de que seu servidor atenda aos seguintes requisitos:

- [Composer](https://getcomposer.org/)
- [PHP 8.2](https://www.php.net/)
- Sistema de Gerenciamento de Banco de Dados (SGBD):
  - MySQL
  - Postgres
  - Ou outro semelhante

## Pré-configuração

Antes de executar o servidor, você precisará fazer algumas configurações iniciais.

1. Renomeie o arquivo `.env-example` para `.env`.

2. Abra o arquivo `.env` e adicione as informações de configuração do banco de dados, garantindo que ele esteja corretamente configurado para o SGBD escolhido.

3. Acesse o diretório "database/seeders" e renomeie o arquivo "UsersTableSeeder.example.php" para "UsersTableSeeder.php".

## Instalação

Agora, você pode prosseguir com a instalação do servidor backend:

Execute o comando abaixo para instalar as dependências do projeto:
  
1. Gere uma chave de aplicativo executando o seguinte comando:
   
        php artisan key:generate

2. Gere a chave secreta JWT (Json Web Token) usando o seguinte comando:

        php artisan jwt:secret
  
## TESTE LOCAL

Para iniciar o servidor localmente, execute o seguinte comando:

    php -S 127.0.0.1:8000 -t public

Isso iniciará o servidor e permitirá que você teste a aplicação localmente no endereço http://127.0.0.1:8000.
</details>

# Avaliação do Trabalho

O grupo perderá a pontuação normaliza indicada na questão.

- (5,0 pontos) Não postar o link do repositório remoto no Moodle.

### Sobre o Software

| Aspecto                               | Pontuação |
| ------------------------------------ | --------- |
| Criar as 05 APIs para cada tabela no back-end de acordo com as orientações
definidas na seção regras de negócio.         | 10,0      |
| Criar as 05 funções para cada tabela no front-end referentes as APIs.      | 06,0      |
| Criar a tela de login                 | 04,0      |
| Criar controle de sessão              | 02,0      |
| Implementar mecanismo de segurança JWT | 04,0      |
| Criar repositório no GitHub           | 07,0      |

### Sobre o Seminário

- Apresentação até 15 minutos.
- Forma de avaliação: Serão descontados pontos por tempo excedido e vestimenta inadequada.

| Aspecto                                      | Pontuação |
| -------------------------------------------- | --------- |
| Tempo de Apresentação (até 15 minutos)      |           |
| Tempo Excedido (por minuto extra)           | -0,2      |
| Vestimenta Inapropriada (chinelo, bermuda, camiseta cavada) | -3,0 |
