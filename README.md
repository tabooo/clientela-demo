# clientela-demo
This project is for Clientela.

Requirments:
<br>Used language: PHP >= 7.2.5
<br>Used Framework: <a href="https://laravel.com/docs/6.x/installation">Laravel 6.*</a>
<br>Used Datebase: mysql 5.6 or MariaDB 10.1.26

Installation:
<br>download and install composer (<a href='https://getcomposer.org/download/'>download composer</a>)
<br>run command in project root directory: composer install.

Import Database:
<br>run command in project root directory: php artisan migrate
<br>or
<br>import clientela.sql file from project root folder.

Database config:
<br>copy or rename .env.example file to .env
<br>find and set values:
<br>DB_CONNECTION=mysql
<br>DB_HOST=127.0.0.1
<br>DB_PORT=3306
<br>DB_DATABASE=
<br>DB_USERNAME=
<br>DB_PASSWORD=

Api methods:
<br>GET: /api/customers // returns all customers
<br>GET: /api/customers/{id} //returns customer by id
<br>DELETE: /api/customers/{id} // deletes customer from database
<br>POST: /api/customers // add customer
<br>PUT: /api/customers/{id} // update customer

All requests must be set header: Accept: application/json

All requests must to set api_token as url params or in Authorization: Bearer api_token.

For demo usage api_token is: "clientela".

For POST and PUT methods in headers must be set:
<br>Accept: application/json
<br>Content-Type: application/x-www-form-urlencoded

<a href="https://app.theneo.io/pixl/clientela" target="blank">Documentation on theneo.io</a>
