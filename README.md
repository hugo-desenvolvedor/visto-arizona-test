# Country list project
Simple project using using Laravel 8 and Docker to list country codes.

## First run
* Open a linux terminal
* Run `docker-compose up -d` command.
* Run `docker ps` command to get the container ID.

### Running Laravel environment
* Open a linux terminal
* Run `docker exec -it <laravel_container_id> bash` command to get the docker terminal.
* Run `composer install` command to install the Laravel's project dependencies.
* Run `php artisan key:generate` command to generate an encrypted configuration key.
* Run `exit` to finish the shell docker instance

### Running Mysql environment
* Open a linux terminal
* Run `docker exec -it <mysql_container_id>  mysql -u root` to access the mysql
* Run `create database visto;` to create the `visto` database
* Run `exit` to finish the shell docker instance 

### Running migrations
* Open a linux terminal
* Run `docker exec -it <laravel_container_id> bash` command to get the docker terminal.
* Run `php artisan migrate` to migrate the database

## Getting the countries
* Access http://localhost:8080/countries

## Getting the countries sorted by name
* Access http://localhost:8080/countries?sort=name

## Getting the countries sorted by code
* Access http://localhost:8080/countries?sort=code

## References
* [Jogesh Sharma](https://webomnizz.com/author/jogpi06/), [Containerize your Laravel Application with Docker Compose](https://webomnizz.com/containerize-your-laravel-application-with-docker-compose/)
* [Saf Venture](https://dev.to/jsafe00),  [Implement CRUD with Laravel Service-Repository Pattern](https://dev.to/jsafe00/implement-crud-with-laravel-service-repository-pattern-1dkl)
