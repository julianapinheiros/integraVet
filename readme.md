
![Logo](https://github.com/julianapinheiros/integraVet/blob/main/app/views/imagens/IntegraVET.png)
# IntegraVet 

Uma breve descrição sobre o que esse projeto faz e para quem ele é


## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/julianapinheiros/integraVet
```

É necessário ter instalado o software [XAMPP](https://www.apachefriends.org/pt_br/download.html), e adicionar o projeto integravet na pasta htdocs, como a seguir:

```bash
  C:\xampp\htdocs\integravet
```

Configurar o banco de dados (iniciar MySql no XAMPP control).

```bash
  CREATE DATABASE integravet

  CREATE TABLE cadastroveterinario (
    crmv 	      varchar(11),
    nome_vet 	  varchar(64) not null,
    email_vet 	varchar(64) not null,
    senha_vet 	varchar(32) not null,

    primary key(crmv)
  );

  CREATE TABLE instituicao_cadastro (
    instituicao_cnpj 	  varchar(64),
    instituicao_nome 	  varchar(64) not null,
    instituicao_email 	varchar(64) not null,
    instituicao_senha 	varchar(64) not null,
    cep                 varchar(64) not null,
    logradouro          varchar(64) not null,
    numero              varchar(64) not null,
    bairro              varchar(64) not null,
    localidade          varchar(64) not null,
    uf                  varchar(64) not null,
    telefone            varchar(64) not null,
    trabalhamos_com     varchar(64) not null,

    primary key(instituicao_cnpj)
  );

  CREATE TABLE cad_bolsa (
    id 	                int(14) AUTO_INCREMENT,
    instituicao_cnpj 	  varchar(64) not null,
    bolsa_componente 	  varchar(64) not null,
    bolsa_quantidade 	  int(14) not null,
    bolsa_animal 	      varchar(64) not null,

    primary key(id)
  );
```

A aplicação estará disponível localmente.

```bash
  http://localhost/integraVet/app/views/tutores/Default.html
```
