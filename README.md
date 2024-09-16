# ReactJS Blog Application with Laravel Sanctum API
Github Repository Link: [ https://github.com/anudip-2014/my-blog-application.git](https://github.com/anudip-2014/my-blog-application.git)

## Getting Started

### Installation
Requires Laravel 11.x, PHP 8.1+ to run.

Clone the repository

```sh
git clone https://github.com/anudip-2014/my-blog-application.git
cd project-directory
```
Make sure you have composer installed in your system and install dependencies.
```sh
composer install
```
Install MongoDB driver for Windows from the [PECL webiste](https://pecl.php.net/package/mongodb) and follow the instructions to install it.

### Configuring
Copying the .env.example to .env and modifying according to the environment:
```sh
cp .env.example .env
```
Generate application key:
```sh
php artisan key:generate
```
Setting up the database and other environment variables in .env:
```sh
DB_CONNECTION=mongodb
DB_HOST=127.0.0.1
DB_PORT=27016
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

## Usage
```sh
php artisan migrate  # To create the database schema
php artisan db:seed  # To seed the database with initial data
```

### Running the project
```
php artisan serve
```
Access the application via
```sh
http://localhost:8000 or 127.0.0.1:8000
```







