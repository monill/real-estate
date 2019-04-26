# Imobiliária


[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)]()
[![Build Status](https://poser.pugx.org/laravel/framework/v/stable.svg)]()


Anhanguera - 1º Semestre 2019

Trabalho solicitado pelo docente Vanderlei Ienne, da disciplina de Governança de Tecnologias da Informação, para fins de avaliação, do curso de Análise e Desenvolvimento de Sistemas.

Usuários já cadastrado para teste e login:
 - eduardo.silva@imob.com.br : q1q2q3
 - guilherme.paula@imob.com.br : u1u2u3
 - pedro.almeida@imob.com.br : g1g2g3

### Requisitos: *
- Web server (Apache2 ou Nginx)
- PHP >= 7.2
- Dependências para PHP:
  - php-openssl
  - php-pdo
  - php-mbstring
  - php-tokenizer
  - php-xml
  - php-ctype
  - php-json
  - php=bcmath
  - php-curl
  - php-intl
  - php-zip

- MySQL >= 5.7 ou MariaDB >= 10.2
- Um servidor dedicado decente. Não tente executar isso em algum servidor de baixa qualidade!


### Como instalar:

Usando [Laragon](https://laragon.org/download/ "Laragon"), já possúi todos os pacotes necessários, com Composer, MySQL ou MariaDB, PHP 7.2, entre outros.

Windows, MacOS ou Linux:

Abra o Terminal na pasta do projeto e digite:
```sh
$ composer install
$ cp .env.example .env
$ php artisan key:generate
```

Edite o arquivo .env
- DB_CONNECTION=`mysql nesse caso o usado é mysql mesmo`
- DB_HOST=`127.0.0.1 servidor`
- DB_PORT=`3306 porta`
- DB_DATABASE=`database que está usando`
- DB_USERNAME=`seu usuario`
- DB_PASSWORD=`sua senha ou deixe em branco caso não use`

No Terminal novamente digite:
```sh
$ php artisan migrate "para migrar as tabelas"
$ php artisan db:seed "para inserir os primeiros dados nas tabelas"
```
Para rodar em máquina local, no Terminal digite:
```sh
$ php artisan serve "para rodar como localhost:8000"
```

### Pacotes usados

Fórum está atualmente estendido com os seguintes pacotes. Instruções sobre como usá-las em sua própria aplicação estão vinculadas abaixo.

| Pacote | Link |
| ------ | ------ |
| Laravel-Toastr | [https://github.com/brian2694/laravel-toastr] |
| Eloquent-Sluggable | [https://github.com/cviebrock/eloquent-sluggable] |
| Agent | [https://github.com/jenssegers/agent] |
| Laravel Collective | [https://laravelcollective.com/docs/master/html] |
| Laravel Debugbar | [https://github.com/barryvdh/laravel-debugbar] |
| Reliese Laravel | [https://github.com/reliese/laravel] |
| Intervention Image | [https://github.com/Intervention/image] |

Licença
----

Desenvolvimento particular/proprietário, venda ou modificação não autorizado.
