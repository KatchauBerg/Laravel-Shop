# Projeto Laravel-Shop:

## Recursos utilizados

### Back-End

- Linguagem de programação -> PHP 8.2
- Framework -> Laravel 11
- Database -> MySQL

### Front-End

-  Linguagem de programacao -> Java Script
-  Framework -> Bootstrap 5.2
## Funcionalidades

- Adicionar Vendas
- Lista Vendas
- Adicionar Vendedores
- Deletar Vendedores
- Atualizar Vendedores
- Lista Vendedores
- Rotina de envio de relatórios de vendas via e-mail

## Sobre o projeto

Projeto contem quatro telas, uma de visualização de vendas definida como index ao acessar o site.

### Tela de vendas

Nesta página, é possível visualizar as vendas de todos os vendedores cadastrados no sistema, com informações como título do produto, nome do vendedor, e-mail do vendedor, valor do produto, valor da venda, comissão sobre o produto, data de criação da venda e data da última atualização da venda. A tela também oferece opções para realizar um novo cadastro de vendas e para visualizar os vendedores cadastrados na aplicação.

### Tela de criar vendas

Nesta página, é possível criar vendas que serão exibidas na tela de vendas. Os dados inseridos pelo usuário são salvos no banco de dados. Foi implementada uma validação simples no front-end, que exige o preenchimento de todos os campos necessários para evitar erros ao salvar os dados. Os campos de preenchimento obrigatório são "Nome do Produto", "E-mail do vendedor" e "Valor do Produto". A tela exibe a informação da porcentagem de comissão que incidirá sobre o valor do produto e, ao cadastrar a venda, o usuário é redirecionado para a tela de vendas, onde a nova venda é exibida na tabela.

### Tela de Vendedores

A tela de vendedores é semelhante à tela de vendas, porém exibe apenas as informações dos vendedores cadastrados no sistema, oferecendo as opções de editar, excluir e criar um novo vendedor diretamente nesta tela. É possível retornar à tela de vendas utilizando o botão "Ver Vendas" ou criar um novo vendedor com o botão "Criar Vendedor".

### Tela de Cadastro de vendedor

É possível realizar o cadastro do vendedor a partir desta tela, que contém uma validação no front-end para garantir o preenchimento obrigatório dos campos, além de um recurso que salva os dados inseridos. Após acionar o botão "Cadastrar", o usuário é redirecionado para a tela de vendedores, onde pode verificar se o cadastro foi realizado com sucesso.

### Tela de Edição

Esta tela é muito semelhante à tela de cadastro de vendedor, porém, ao acessá-la, os campos são preenchidos automaticamente, permitindo ao usuário escolher o que precisa editar no cadastro. Ao salvar, é realizada uma atualização no banco de dados.
### Envio de e-mail

Ao final do dia, o sistema executa uma rotina de envio de relatórios para os vendedores. O funcionamento é o seguinte:

Caso o vendedor tenha efetuado vendas durante o dia, o sistema busca os dados dessas vendas no banco de dados e calcula o total de vendas realizadas pelo cliente em um único dia. Em seguida, o sistema envia um e-mail com esse relatório para cada vendedor cadastrado que tenha registrado alguma venda no dia em questão. Quando a rotina é iniciada, os e-mails são enviados aos vendedores com o valor total recebido no dia.

## Considerações finais

O sistema, em sua essência, é bastante simples. Não há validação quanto ao cadastro de usuários, seguindo rigorosamente o proposto no desafio, desde a criação de vendas até a criação de vendedores. O resultado é um sistema funcional, ao meu ver, não muito complexo e de fácil visualização, o que me permitiu entender melhor o funcionamento do framework e utilizar o Eloquent ORM como ferramenta para busca de dados no banco de dados. No sistema de envio de e-mails, busquei implementar uma forma simples e performática, utilizando o conceito de filas de mensagens. Ou seja, ao solicitar o envio de um e-mail, essa solicitação é enfileirada como uma notificação que será processada posteriormente. No caso deste sistema, uma rotina executada diariamente às 23:59 realiza os envios de forma rápida para os vendedores.
