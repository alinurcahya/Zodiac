# Zodiac App - Technical Test Kwadran Lima Indonesia

### Requirements and Specifications

- PHP >= 7.4.26
- Laravel ^8.0

### Installation

- Install packages
    ```bash
    $ composer install
    ```
- create .env file by copying .env.example
    ```bash
    $ cp .env.example .env
    ```
- Setup database connection then migrate sample data
    ```bash
    $ php artisan migrate

- Setup database seeders sample data
    ```bash
    $ php artisan db:seed --class=ZodiacTableSeeder
