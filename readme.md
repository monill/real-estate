# Tads Imobiliária

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/d0326e1051a342739c13de788884e972)](https://www.codacy.com/app/monil/imobiliaria?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=monill/imobiliaria&amp;utm_campaign=Badge_Grade)
[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)]()
[![Build Status](https://poser.pugx.org/laravel/framework/v/stable.svg)]()
[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)]()
[![Website](https://img.shields.io/website-up-down-green-red/http/shields.io.svg)]()
[![GPLv3 license](https://img.shields.io/badge/License-GPLv3-blue.svg)](/LICENSE)
[![GitHub version](https://badge.fury.io/gh/Naereen%2FStrapDown.js.svg)]()

## Resumo

 1. [Introducao](#introducao)
 2. [Requisitos](#requisitos)
 3. [Instalacao](#instalacao)
 4. [Pacotes](#pacotes)
 5. [Licenca](#licenca)
 6. [Telas: Site](/telas/Site.md)
 7. [Telas: Dashboard](/telas/Dashboard.md)

## Introducao

Anhanguera - 1º Semestre de 2019

Trabalho solicitado pelo docente Vanderlei Ienne, da disciplina de Governança de Tecnologias da Informação, para fins de avaliação, do curso de Análise e Desenvolvimento de Sistemas.

Usuários já cadastrados para testes e login:

 - eduardo.silva@imob.com.br : e1e2e3
 - guilherme.paula@imob.com.br : g1g2g3
 - pedro.almeida@imob.com.br : p1p2p3
 - roberto.santos@imob.com.br : r1r2r3

## Requisitos

 - Web Server: Apache2 ou Nginx
 - PHP: 7.2 ou superior
 - Dependências para PHP:
	- php-openssl, php-pdo, php-mbstring, php-tokenizer, php-xml, php-ctype, php-json, php=bcmath, php-curl, php-intl, php-zip
 - MySQL >= 5.7 ou MariaDB >= 10.2
 - Um servidor dedicado decente. Não tente executar isso em algum servidor de baixa qualidade!

## Instalacao
Recomendo [Laragon](https://laragon.org/download/).
Já possúi todos os pacotes necessários, com Composer, MySQL ou MariaDB, PHP 7.2, entre outros. 

Windows, MacOS ou Linux:
Abra o Terminal na pasta do projeto e digite:

    $ composer install "para instalar os pacotes do composer utlizados nesse projeto"
    $ cp .env.example .env "crie uma cópia do arquivo .env.example para .env"
    $ php artisan key:generate "para gerar a chave de segurança"

Edite o arquivo **.env**
 - DB_CONNECTION=`mysql nesse caso o usado é mysql mesmo`
 - DB_HOST=`127.0.0.1 servidor`
 - DB_PORT=`3306 porta`
 - DB_DATABASE=`database que está usando`
 - DB_USERNAME=`seu usuario`
 - DB_PASSWORD=`sua senha ou deixe em branco caso não use`

Novamente no **Terminal**, digite:

    $ php artisan migrate "para migrar as tabelas"
    $ php artisan db:seed "para inserir os primeiros dados nas tabelas"

Para rodar em máquina local, no **Terminal** digite:

    $ php artisan serve "para rodar como localhost:8000"

## Pacotes

TADS Imobiliária está atualmente estendido com os seguintes pacotes. Instruções sobre como usá-las em sua própria aplicação estão vinculadas abaixo:

|Pacote | Descrição |
|--|---|
| [Agent](https://github.com/jenssegers/agent) |User-Agent|
| [Eloquent-Sluggable](https://github.com/cviebrock/eloquent-sluggable) | Sluggable |
| [Intervention Image](https://github.com/Intervention/image) | Intervention Image |
| [Laravel Collective](https://laravelcollective.com/docs/master/html) | Laravel Collective |
| [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar) | Laravel Debugbar |
| [Reliese Laravel](https://github.com/reliese/laravel)| Reliese Laravel |

## Licenca

TADS Imobiliária é um software de código aberto licenciado sob a [GNU GPL-3.0](/LICENSE).

## Página Inicial
![Index](/telas/site/home.png)
