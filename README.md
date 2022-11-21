# cubic

## Requirements

- docker version: 20.10.18

- docker-compose version: v2.12.2

## Run

Open new terminal into this repo folder then:

1. Copy the .env.example to .env:

    `cp .env.example .env`

2. Generate key for you app:

    `php artisan key:generate`

3. Install dependencies with composer:

   `composer install`

4. Config to make git ignore filemode:

    `git config core.fileMode false`

5. Apply write permissions to files and folders:

    `sudo chmod 777 -R .`

6. Generate app key:

    `php artisan key:generate`

7. Run the following command to set up the app services:

    `docker-compose up`

8. In other new terminal into repo folder run the following command to migrate last database version:

    `docker exec -i cubic-app php artisan migrate`
