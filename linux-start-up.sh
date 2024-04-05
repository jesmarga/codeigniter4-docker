#!/bin/sh
echo "Iniciando Ambiente..."
echo "Fecha y hora actual: $(date)"
DOCKER=$(which docker)

$DOCKER compose up -d

if [ -d "src/vendor" ]; then
    echo "Ambiente iniciado"
else
    echo "Instalando dependencias del proyecto"
    $DOCKER exec -u root -ti app composer require --ignore-platform-reqs codeigniter4/framework:4.4.7
    $DOCKER exec -u root -ti app chmod -R 777 /var/www/html/writable/
    echo "Ambiente iniciado"
fi


echo "El Ambiente se inicio correctamente"