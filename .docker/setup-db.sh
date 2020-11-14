#!/bin/bash

CONTAINER_ID=`docker ps -aqf "name=visto-arizona-db"`
MYSQL_COMMAND="docker exec -i $CONTAINER_ID mysql -u root"

echo "Creating database..."
$MYSQL_COMMAND -e "DROP DATABASE IF EXISTS visto; CREATE DATABASE visto;"
$MYSQL_COMMAND -e "GRANT ALL PRIVILEGES ON visto.* TO root@'%'";
$MYSQL_COMMAND -e "GRANT ALL PRIVILEGES ON visto.* TO root@localhost";

$SHELL