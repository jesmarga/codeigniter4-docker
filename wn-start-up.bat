@echo off
rem Obteniendo la ubicación del script .bat actual
set "SCRIPT_DIR=%~dp0"
rem Construyendo la ruta completa de la carpeta vendor
set "VENDOR_DIR=%SCRIPT_DIR%src\vendor"

docker compose up -d

if exist "%VENDOR_DIR%" (
    echo Ambiente iniciado
) else (
   docker exec -u root -ti app composer require --ignore-platform-reqs codeigniter4/framework:4.4.7
)
