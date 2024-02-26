
# API Laravel

Esta é uma API em Laravel simples que permite o gerenciamento de usuários e seus endereços. Ela suporta as operações CRUD (Criar, Ler, Atualizar, Deletar) para usuários e endereços, além de permitir a consulta de cidades e estados relacionados aos endereços


## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/aeusteixeira/api-laravel.git
```

Entre no diretório do projeto

```bash
  cd api-laravel
```

Instale as dependências

```bash
  composer install
```

Inicie o servidor

```bash
  php artisan serve
```

Rode as migrations e ajuste as variáveis globais no `env`

```php
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
```
# Documentação da API

## Endpoints de Usuários

### Listar todos os usuários
```http
GET /api/users
```

### Obter detalhes de um usuário específico
```http
GET /api/users/{id}
```

### Criar um novo usuário
```http
POST /api/users/create
```
Envie um JSON no corpo da requisição com os seguintes dados:

```json
{
    "name": "Nome do Usuário",
    "email": "email@dominio.com",
    "password": "senha"
}
```

| Parâmetro | Tipo | Descrição |
| :--- | :--- | :--- |
| `name` | `string` | **Obrigatório**. Nome do usuário |
| `email` | `string` | **Obrigatório**. Email do usuário |
| `password` | `string` | **Obrigatório**. Senha do usuário |

### Atualizar um usuário existente
```http
PUT /api/users/{id}/update
```
Envie um JSON no corpo da requisição com os seguintes dados:

```json
{
    "name": "Novo Nome do Usuário",
    "email": "novoemail@dominio.com",
    "password": "novasenha"
}
```

| Parâmetro | Tipo | Descrição |
| :--- | :--- | :--- |
| `name` | `string` | **Obrigatório**. Nome do usuário |
| `email` | `string` | **Obrigatório**. Email do usuário |
| `password` | `string` | **Obrigatório**. Senha do usuário |

### Excluir um usuário
```http
DELETE /api/users/{id}
```

## Endpoints de Endereços

### Listar todos os endereços
```http
GET api/addresses
```

### Obter detalhes de um endereço específico
```http
GET api/addresses/{id}
```

### Criar um novo endereço
```http
POST api/addresses/create
```
Envie um JSON no corpo da requisição com os seguintes dados:

```json
{
    "user_id": 1,
    "city_id": 2,
    "street": "Rua dos Bobos, 123",
    "zip_code": "01106000"
}
```

| Parâmetro | Tipo | Descrição |
| :--- | :--- | :--- |
| `user_id` | `integer` | **Obrigatório**. ID do usuário associado |
| `city_id` | `integer` | **Obrigatório**. ID da cidade |
| `street` | `string` | **Obrigatório**. Nome da rua |
| `zip_code` | `string` | **Obrigatório**. Código postal |

### Atualizar um endereço existente
```http
PUT api/addresses/{id}/update
```
Envie um JSON no corpo da requisição com os seguintes dados:

```json
{
    "user_id": 1,
    "city_id": 2,
    "street": "Rua dos Bobos, 123",
    "zip_code": "01106000"
}
```

| Parâmetro | Tipo | Descrição |
| :--- | :--- | :--- |
| `user_id` | `integer` | **Obrigatório**. ID do usuário associado |
| `city_id` | `integer` | **Obrigatório**. ID da cidade |
| `street` | `string` | **Obrigatório**. Nome da rua |
| `zip_code` | `string` | **Obrigatório**. Código postal |

### Excluir um endereço
```http
DELETE api/addresses/{id}
```

## Endpoints de Cidades e Estados

### Listar todas as cidades
```http
GET /api/cities
```

### Obter detalhes de uma cidade específica
```http
GET /api/cities/{id}
```

### Listar todos os estados
```http
GET /api/states
```

### Obter detalhes de um estado específico
```http
GET /api/states/{id}
```

## Formato dos Dados
Os exemplos de solicitações e respostas em JSON para cada endpoint estão incluídos acima, bem como tabelas descrevendo os parâmetros e tipos de dados esperados. 
