# Country list project
Simple project using using Laravel 8 and Docker to list country codes.

## Setup and install
* Open a linux terminal.
* Run `cd .docker`.
* Run `sudo bash build.sh` command to create the app container.
* Run `sudo bash start.sh` command to start the containers.
* Run `sudo bash setup-db.sh` command to create `visto` database.
* Copy the `env.example` file and rename to `.env`.
* Run `sudo bash setup-laravel.sh` command to install dependencies and configurate the laravel.

## Running containers
* Run `sudo bash start.sh` command to run the containers.

## Stoping containers
* Run `sudo bash start.sh` command to run the containers.

## Getting the countries
* Access http://localhost:8080/countries

## Getting the countries sorted by name
* Access http://localhost:8080/countries?sort=name

## Getting the countries sorted by code
* Access http://localhost:8080/countries?sort=code


## Exporting the countries to CSV file
* Access http://localhost:8080/countries/csv

## References
* [Jogesh Sharma](https://webomnizz.com/author/jogpi06/), [Containerize your Laravel Application with Docker Compose](https://webomnizz.com/containerize-your-laravel-application-with-docker-compose/)
* [Saf Venture](https://dev.to/jsafe00),  [Implement CRUD with Laravel Service-Repository Pattern](https://dev.to/jsafe00/implement-crud-with-laravel-service-repository-pattern-1dkl)
* Trilok Singh, [Export CSV File in Laravel Example Tutorial Step By Step](https://codingdriver.com/export-csv-file-in-laravel-example.html)
