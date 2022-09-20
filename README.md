# Configurando o projeto

## Diretórios

A hierarquia de pastas é a seguinte:

```plaintext
* cubic/
*   cubic/
*   laradock/
```

Onde:

- `cubic/cubic` é o projeto disponível em: <https://github.com/roneicarlos/cubic>

- `cubic/laradock` é o projeto disponível em: <https://github.com/Laradock/laradock>

## Configurando o ambiente cubic/laradock/ para executar o projeto

Entre na pasta `cubic/laradock/` para seguir com as configurações.

### laradock/nginx

Dentro de `cubic/laradock/nginx/sites/` crie um arquivo com o nome `cubif.conf` e cole as seguintes configurações:

```properties
server {
    listen 8000;
    server_name cubic.test;
    root /var/www/cubic/public;
    index index.php index.html index.htm;

    location / {
         try_files $uri $uri/ /index.php$is_args$args;
    }

    location ~ \.php$ {
        try_files $uri /index.php =404;
        fastcgi_pass php-upstream;
        fastcgi_index index.php;
        fastcgi_buffers 16 16k;
        fastcgi_buffer_size 32k;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_read_timeout 600;
        include fastcgi_params;
    }

    location ~ /\.ht {
        deny all;
    }

    location /.well-known/acme-challenge/ {
        root /var/www/letsencrypt/;
        log_not_found off;
    }

    error_log /var/log/nginx/cubic_error.log;
    access_log /var/log/nginx/cubic_access.log;
}
```

### laradock/.env

Dentro de `laradock/` copie o arquivo `.env.example` e renomeie para apenas `.env`.

Após, modifique os valores definidos abaixo para as seguintes chaves:

```properties
APP_CODE_PATH_HOST=../cubic
```

```properties
COMPOSE_PROJECT_NAME=cubic
```

```properties
PHP_VERSION=8.0
```

```properties
WORKSPACE_INSTALL_FFMPEG=true
```

```properties
MYSQL_VERSION=8.0
```

```properties
MYSQL_DATABASE=cubic
```

```properties
MYSQL_USER=cubic
```

```properties
MYSQL_PASSWORD=toor
```

```properties
MYSQL_ROOT_PASSWORD=toor
```

## Configurando o ambiente cubic/cubic/ para executar o projeto

Entre na pasta `cubic/cubic/` e rode o comando:

```bash
composer install
```

Após, abra o arquivo `.env` e modifique os valores definidos abaixo para as seguintes chaves:

```properties
APP_NAME=Cubic
```

```properties
APP_URL=http://cubic.test
```

```properties
DB_CONNECTION=mysql
```

```properties
DB_HOST=0.0.0.0
```

```properties
DB_DATABASE=cubic
```

```properties
DB_USERNAME=cubic
```

```properties
DB_PASSWORD=toor
```

## Iniciando e parando os containers do projeto

Volte para `cubic/laradock/`.

Para iniciar execute:

```bash
docker-compose up nginx mysql php-fpm workspace docker-in-docker
```

Para parar execute:

```bash
docker-compose stop nginx mysql php-fpm workspace docker-in-docker
```

## Acessando o projeto

Uma vez feitas todas as configurações anteriores, o projeto encontra-se disponível na url: <http://cubic.test/>
