## Estudo de caso

<details>
O aluno deverá implementar um conjunto de APIs e interface gráfica para realizar o CRUD referente a duas tabelas que se relacionam do tipo 1:N cuja escolha do módulo ficará a cargo do
grupo. O grupo poderá escolher qualquer tema que deseje implementar.
Não poderá ser utilizada a tabela do módulo financeiro feita no trabalho anterior.
Todas as tabelas deverão ter pelo menos os campos ID, Removido, um campo do tipo texto,
um campo do tipo data e um campo do tipo decimal.
Uma das tabelas obrigatoriamente deverá ter uma chave estrangeira referenciando a outra tabela.

</details>
  
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
• Para cada API do back-end deve ser criada uma respectiva função no front-end que usará a
API

• Deverá haver controle de sessão de usuário logado.

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
