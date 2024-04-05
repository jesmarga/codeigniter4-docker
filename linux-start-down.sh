#!/bin/sh
echo "Deshabilitando Ambiente ..."
echo "Fecha y hora actual: $(date)"
DOCKER=$(which docker)

$DOCKER compose down

echo "El Ambiente se deshabilito exitosamente."
