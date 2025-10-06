# 🧮 Desafio ParcelaJá — Symfony MVC

Projeto desenvolvido em **Symfony 4.4 (PHP 7.1+)** como parte do desafio técnico da ParcelaJá.  
A aplicação implementa um modelo MVC simples com entidades geométricas (`Rectangle` e `Circle`), controladores, templates Twig e testes automatizados.

---

## ⚙️ Requisitos

Antes de começar, assegure-se de ter instalado:

- **PHP 7.4 ou superior**
- **Composer**
- **SQLite**, **MySQL** ou outro banco de dados compatível
- **Extensões PHP obrigatórias**:
  - `pdo`
  - `pdo_sqlite` (ou `pdo_mysql`, conforme o banco)
  - `ctype`
  - `iconv`
- (Opcional) **Symfony CLI** – para rodar o servidor local facilmente

---

## 📦 Instalação

Clone o repositório e instale as dependências:

```bash
git clone https://github.com/SEU_USUARIO/Desafio_ParcelaJa_Symfony-MVC.git
cd Desafio_ParcelaJa_Symfony-MVC
composer install
```

Durante a instalação, o Symfony pode pedir para instalar receitas (`recipes`) — aceite-as.

---

## 🧩 Configuração do Ambiente

Crie um arquivo `.env.local` para a configuração de desenvolvimento:

```bash
cp .env .env.local
```

Edite o `.env.local` e defina a conexão com o banco de dados:

```env
DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"
```

> 💡 Pode também usar MySQL, por exemplo:
> ```
> DATABASE_URL="mysql://user:password@127.0.0.1:3306/nome_banco"
> ```

---

## 🧪 Ambiente de Testes

Crie um arquivo `.env.test` (caso ainda não exista):

```bash
KERNEL_CLASS='App\Kernel'
APP_SECRET='$ecretf0rt3st'
SYMFONY_DEPRECATIONS_HELPER=999999
PANTHER_APP_ENV=panther
PANTHER_ERROR_SCREENSHOT_DIR=./var/error-screenshots
APP_ENV=test
APP_DEBUG=1
DATABASE_URL=sqlite:///%kernel.project_dir%/var/data_test.db
```

Esse banco será criado automaticamente durante os testes.

---

## 🧱 Criando o Banco de Dados

Após configurar o `.env.local`, execute os seguintes comandos:

```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

Opcionalmente, pode popular o banco com dados iniciais (fixtures):

```bash
php bin/console doctrine:fixtures:load
```

ou se não quiser fazer purge da database,

```bash
php bin/console doctrine:fixtures:load --append
```

---

## 🚀 Executando o Servidor Local

### Usando Symfony CLI (recomendado):

```bash
symfony serve
```

A aplicação estará disponível em:  
👉 http://localhost:8000

### Ou usando PHP nativo:

```bash
php -S localhost:8000 -t public
```

---

## 🧭 Rotas Principais

| Rota | Método | Descrição |
|------|---------|-----------|
| `/shape/list` | GET | Lista todos os objetos `Rectangle` e `Circle` armazenados no banco de dados. |

---

## 🧪 Executando Testes

O projeto inclui testes unitários e de integração.

Para executar todos os testes:

```bash
composer run test
```

---

## 🧹 Limpeza de Cache

Se precisar limpar o cache (por exemplo, após alterar o `.env`):

```bash
php bin/console cache:clear
```

Para o ambiente de teste:

```bash
php bin/console cache:clear --env=test
```

---

## 🧰 Estrutura do Projeto

```
.
├── src/
│   ├── Controller/       # Controladores (ex: ShapeController)
│   ├── DataFixtures/     # Seeders (ex: ShapeFixtures)    
│   ├── Entity/           # Entidades (Rectangle, Circle)
│   ├── Repository/       # Repositórios do Doctrine
│   └── Service/          # Serviços (ex: ShapeService)
│
├── templates/
│   └── shape/
│       └── list.html.twig  # Template Twig da listagem
│
├── tests/                  # Testes unitários das entidades
│
├── config/                 # Configurações do Symfony (YAML/XML)
├── public/                 # Raiz pública (index.php)
├── var/                    # Cache e logs
└── vendor/                 # Dependências Composer
```

---

## 🧑‍💻 Comandos Úteis

| Comando | Descrição |
|----------|------------|
| `php bin/console list` | Lista todos os comandos disponíveis |
| `php bin/console doctrine:schema:validate` | Valida o schema do banco |
| `php bin/console debug:router` | Mostra todas as rotas registradas |
| `composer run test` | Executa todos os testes PHPUnit |

---
