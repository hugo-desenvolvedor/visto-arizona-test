#!/bin/bash

VENDOR="../vendor"
DB="../db"

echo "Excluding directories..."
if [ -d "$VENDOR" ]; then rm -Rf $VENDOR; fi
if [ -d "$DB" ]; then rm -Rf $DB; fi

echo "Building docker composer..."
docker-compose build app

$SHELL
