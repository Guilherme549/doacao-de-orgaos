Alunos

Guilherme Francisco Alves Ribeiro - 2210748
Kevin Fonseca- 2212151
Arthur Augustinho dos Anjos-2210974
Antonio Martins da Costa Filho-2212231



# 📘 Documentação das Rotas da API

Esta API segue o padrão RESTful e utiliza os métodos HTTP **GET**, **POST**, **PUT** e **DELETE** para realizar operações de CRUD (Criar, Ler, Atualizar e Excluir). A URL base para as rotas é:

http://127.0.0.1:8000/api

yaml
Copiar código

---

## 🔥 1. Rotas de Usuários

| **Método** | **Rota**         | **Descrição**             | **Parâmetros**                   |
|------------|------------------|---------------------------|-----------------------------------|
| GET        | `/users`          | Listar todos os usuários  | -                                 |
| POST       | `/users`          | Criar um novo usuário     | `name`, `email`, `password`      |
| GET        | `/users/{id}`     | Ver detalhes de um usuário| `id` (ID do usuário)              |
| PUT        | `/users/{id}`     | Atualizar um usuário      | `name`, `email`, `password`      |
| DELETE     | `/users/{id}`     | Excluir um usuário        | `id` (ID do usuário)              |

---

## 🔥 2. Rotas de Perfis

| **Método** | **Rota**         | **Descrição**             | **Parâmetros**                  |
|------------|------------------|---------------------------|----------------------------------|
| GET        | `/profiles`       | Listar todos os perfis    | -                                |
| POST       | `/profiles`       | Criar um novo perfil      | `name`                           |

---

## 🔥 3. Rotas de Endereços

| **Método** | **Rota**         | **Descrição**             | **Parâmetros**                  |
|------------|------------------|---------------------------|----------------------------------|
| GET        | `/addresses`      | Listar todos os endereços | -                                |
| POST       | `/addresses`      | Criar um novo endereço    | `street`, `city`, `state`, `zip_code` |

---

## 🔥 4. Rotas de Órgãos

| **Método** | **Rota**         | **Descrição**             | **Parâmetros**                  |
|------------|------------------|---------------------------|----------------------------------|
| GET        | `/organs`         | Listar todos os órgãos    | -                                |
| POST       | `/organs`         | Criar um novo órgão       | `name`, `description`            |

---

## 🔥 5. Rotas de Hospitais

| **Método** | **Rota**         | **Descrição**             | **Parâmetros**                  |
|------------|------------------|---------------------------|----------------------------------|
| GET        | `/hospitals`      | Listar todos os hospitais | -                                |
| POST       | `/hospitals`      | Criar um novo hospital    | `name`, `city`, `state`          |
| DELETE     | `/hospitals/{id}` | Excluir um hospital       | `id` (ID do hospital)            |

---

## 🔥 6. Rotas de Relação Usuário-Órgão

| **Método** | **Rota**         | **Descrição**                         | **Parâmetros**                    |
|------------|------------------|---------------------------------------|-----------------------------------|
| POST       | `/user-organ`     | Relacionar usuário a um órgão        | `user_id`, `organ_id`             |

---

## 🔥 7. Rotas de Relação Hospital-Usuário

| **Método** | **Rota**         | **Descrição**                         | **Parâmetros**                    |
|------------|------------------|---------------------------------------|-----------------------------------|
| POST       | `/hospital-user`  | Relacionar usuário a um hospital     | `user_id`, `hospital_id`          |

---

## 📍 Exemplos de uso da API

### 1️⃣ - Listar todos os usuários

**URL:**
GET http://127.0.0.1:8000/api/users

css
Copiar código

**Exemplo de resposta de sucesso:**
```json
[
    {
        "id": 1,
        "name": "João da Silva",
        "email": "joao@email.com",
        "created_at": "2024-12-08T18:00:00.000000Z",
        "updated_at": "2024-12-08T18:00:00.000000Z"
    }
]
2️⃣ - Criar um novo usuário
URL:

arduino
Copiar código
POST http://127.0.0.1:8000/api/users
Corpo da requisição (JSON):

json
Copiar código
{
    "name": "Maria",
    "email": "maria@email.com",
    "password": "12345678"
}
Exemplo de resposta de sucesso:

json
Copiar código
{
    "id": 2,
    "name": "Maria",
    "email": "maria@email.com",
    "created_at": "2024-12-08T18:00:00.000000Z",
    "updated_at": "2024-12-08T18:00:00.000000Z"
}
3️⃣ - Atualizar um usuário
URL:

ruby
Copiar código
PUT http://127.0.0.1:8000/api/users/1
Corpo da requisição (JSON):

json
Copiar código
{
    "name": "João Atualizado"
}
Exemplo de resposta de sucesso:

json
Copiar código
{
    "id": 1,
    "name": "João Atualizado",
    "email": "joao@email.com",
    "created_at": "2024-12-08T18:00:00.000000Z",
    "updated_at": "2024-12-08T18:05:00.000000Z"
}
4️⃣ - Excluir um usuário
URL:

ruby
Copiar código
DELETE http://127.0.0.1:8000/api/users/1
Exemplo de resposta de sucesso:

json
Copiar código
{
    "message": "User deleted successfully"
}
📢 Instruções Gerais para Testar a API
1️⃣ - Ferramentas de Teste
Postman (recomendado)
Insomnia
Navegador (para requisições GET)
cURL (via terminal)
2️⃣ - Testar a API no Postman
URL Base:

arduino
Copiar código
http://127.0.0.1:8000/api
Passos:

Abra o Postman.
Escolha o método HTTP (GET, POST, PUT, DELETE).
Cole a URL completa (ex: http://127.0.0.1:8000/api/users).
Adicione o corpo da requisição (para POST e PUT).
Clique em Send e visualize a resposta da API.
3️⃣ - Autenticação de Usuário
Se a API utilizar Laravel Sanctum ou JWT, você precisará seguir estes passos:

Fazer login e obter o token de autenticação.
Enviar o token no Authorization Header em todas as requisições.
Exemplo de Header:

css
Copiar código
Authorization: Bearer {seu_token}
📄 Contribuição
Se você quiser contribuir para este projeto, siga as etapas abaixo:

Faça um fork deste repositório.
Crie uma branch com a sua feature (git checkout -b feature/sua-feature).
Faça commit das suas alterações (git commit -m 'Adiciona nova feature').
Faça o push para a branch (git push origin feature/sua-feature).
Abra um Pull Request.
