# TADS Imobiliária

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)]()
[![Build Status](https://poser.pugx.org/laravel/framework/v/stable.svg)]()
[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)]()
[![Website tadsimobiliaria.tk](https://img.shields.io/website-up-down-green-red/http/shields.io.svg)](http://tadsimobiliaria.tk/)
[![GPLv3 license](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://github.com/joaorik/imobiliaria/blob/master/LICENSE)
[![GitHub version](https://badge.fury.io/gh/Naereen%2FStrapDown.js.svg)]()

## Resumo

1. [Introdução](#introdução)
2. [Requisitos](#requisitos)
3. [Instalação](#instalação)
4. [Pacotes](#pacotes)
6. [Licença](#licença)
7. [SITE: Telas](https://github.com/joaorik/imobiliaria/blob/master/telas/SITE.md)
7. [DASHBOARD: Telas](https://github.com/joaorik/imobiliaria/blob/master/telas/DASHBOARD.md)

## Introdução

Anhanguera - 1º Semestre de 2019

Trabalho solicitado pelo docente Vanderlei Ienne, da disciplina de Governança de Tecnologias da Informação, para fins de avaliação, do curso de Análise e Desenvolvimento de Sistemas.

Usuários já cadastrado para testes e login:
 - eduardo.silva@imob.com.br : q1q2q3
 - guilherme.paula@imob.com.br : u1u2u3
 - pedro.almeida@imob.com.br : g1g2g3
 - roberto.santos@imob.com.br : m1m2m3

## Requisitos
- Web server: Apache2 ou Nginx
- PHP: 7.2 ou superior
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

## Instalação

Usando [Laragon](https://laragon.org/download/), já possúi todos os pacotes necessários, com Composer, MySQL ou MariaDB, PHP 7.2, entre outros.

Windows, MacOS ou Linux:

Abra o Terminal na pasta do projeto e digite:
```sh
$ composer install "para instalar os pacotes do composer utlizados nesse projeto"
$ cp .env.example .env "crie uma cópia do arquivo .env.example para .env"
$ php artisan key:generate "crie a chave de segurança"
```

Edite o arquivo .env
- DB_CONNECTION=`mysql nesse caso o usado é mysql mesmo`
- DB_HOST=`127.0.0.1 servidor`
- DB_PORT=`3306 porta`
- DB_DATABASE=`database que está usando`
- DB_USERNAME=`seu usuario`
- DB_PASSWORD=`sua senha ou deixe em branco caso não use`

Novamente no Terminal, digite:
```sh
$ php artisan migrate "para migrar as tabelas"
$ php artisan db:seed "para inserir os primeiros dados nas tabelas"
```

Para rodar em máquina local, no Terminal digite:
```sh
$ php artisan serve "para rodar como localhost:8000"
```

## Pacotes

Fórum está atualmente estendido com os seguintes pacotes. Instruções sobre como usá-las em sua própria aplicação estão vinculadas abaixo.

| Pacote | Link |
| ------ | ------ |
| Agent | [https://github.com/jenssegers/agent] |
| Eloquent-Sluggable | [https://github.com/cviebrock/eloquent-sluggable] |
| Intervention Image | [https://github.com/Intervention/image] |
| Laravel Collective | [https://laravelcollective.com/docs/master/html] |
| Laravel Debugbar | [https://github.com/barryvdh/laravel-debugbar] |
| Reliese Laravel | [https://github.com/reliese/laravel] |

## Licença

TADS Imobiliária é um software de código aberto licenciado sob a [GNU General Public License v3.0](https://github.com/joaorik/tracker/blob/master/LICENSE).

## Página inicial
![Index](../master/telas/site/home.png)
