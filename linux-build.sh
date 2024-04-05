#!/bin/sh
DOCKER=$(which docker)
$DOCKER exec -u root -ti app composer require --ignore-platform-reqs codeigniter4/framework:4.4.7

