# TADS Imobiliária


[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)]()
[![Build Status](https://poser.pugx.org/laravel/framework/v/stable.svg)]()


Anhanguera - 1º Semestre de 2019

Trabalho solicitado pelo docente Vanderlei Ienne, da disciplina de Governança de Tecnologias da Informação, para fins de avaliação, do curso de Análise e Desenvolvimento de Sistemas.

Usuários já cadastrado para testes e login:
 - eduardo.silva@imob.com.br : q1q2q3
 - guilherme.paula@imob.com.br : u1u2u3
 - pedro.almeida@imob.com.br : g1g2g3
 - roberto.santos@imob.com.br : m1m2m3

### Requisitos: *
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

### Como instalar:

Usando [Laragon](https://laragon.org/download/ "Laragon"), já possúi todos os pacotes necessários, com Composer, MySQL ou MariaDB, PHP 7.2, entre outros.

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

# Telas
## ---- Site ----
### Home
![Home](../master/telas/site/home.png)
### Sobre
![Sobre](../master/telas/site/sobre.png)
### Propriedades
![Propriedades](../master/telas/site/propriedades.png)
### Propriedade seleciona
![Propriedade](../master/telas/site/propriedade.png)
### Corretores
![Corretores](../master/telas/site/corretores.png)
### Galeria
![Galeria](../master/telas/site/galeria.png)
### Blogs
![Blogs](../master/telas/site/blogs.png)
### Blog seleciona
![Blog](../master/telas/site/blog.png)
### Contato
![Contato](../master/telas/site/contato.png)
### Login
![Login](../master/telas/site/login.png)

## ---- Dashboard ----
### Dashboard
![Dashboard](../master/telas/admin/dashboard.png)
### Mensagens
![Mensagens](../master/telas/admin/mensagens.png)
### Blogs
![Blogs](../master/telas/admin/blogs.png)
### Blog add/edit
![Blog-Add-Edit](../master/telas/admin/blog-add-edit.png)
### Tags
![Tags](../master/telas/admin/tags.png)
### Comentários
![Comentarios](../master/telas/admin/comentarios.png)
### Propriedades
![Propriedades](../master/telas/admin/propriedades.png)
### Propriedade-Add-Edit
![Propriedade-Add-Edit](../master/telas/admin/propriedade-add-edit.png)
### Propriedade-Add-Remove-Images
![Propriedade-Add-Remove-Images](../master/telas/admin/propriedade-add-remove-images.png)
### Categorias
![Categorias](../master/telas/admin/categorias.png)
### Características
![Caracteristicas](../master/telas/admin/caracteristicas.png)
### Dúvidas
![Duvidas](../master/telas/admin/duvidas.png)
### Dúvida
![Duvida](../master/telas/admin/duvida.png)
### Corretores
![Corretores](../master/telas/admin/corretores.png)
### Corretores-Add-Edit
![Corretores-Add-Edit](../master/telas/admin/corretores-add-edit.png)
### Serviços
![Servicos](../master/telas/admin/servicos.png)
### Serviço-Add-Edit
![Servico-Add-Edit](../master/telas/admin/servico-add-edit.png)
### Newsletters
![Newsletters](../master/telas/admin/newsletters.png)
### Config. Geral
![Config. Geral](../master/telas/admin/config-geral.png)
### Config. Social
![Config. Social](../master/telas/admin/config-social.png)
### Config. Analytics
![Config. Analytics](../master/telas/admin/config-analytics.png)
### Config. Empresa
![Config. Empresa](../master/telas/admin/config-empresa.png)
### Config. Maps
![Config. Maps](../master/telas/admin/config-maps.png)
### Config. Termos
![Config. Termos](../master/telas/admin/config-termos.png)
### Visitantes
![Visitantes](../master/telas/admin/visitantes.png)
### Logs
![Logs](../master/telas/admin/logs.png)
