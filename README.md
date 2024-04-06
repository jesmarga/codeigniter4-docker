# App Backend con CodeIgniter 4.4.7

## Descripción
Este proyecto consiste en una aplicación backend con contenedores Docker para facilitar su despliegue y gestión. Utiliza Docker Compose para orquestar los servicios necesarios para el funcionamiento del backend, incluyendo una base de datos MySQL, una aplicación backend basada en el framework CodeIgniter 4.4.7, y un servidor web Nginx.

## Requisitos
- Docker
- Docker Compose

## Instalación y Uso
1. Clona este repositorio en tu máquina local.
2. Asegúrate de tener Docker y Docker Compose instalados en tu sistema.
3. Navega hasta el directorio del proyecto en tu terminal.
4. Ejecuta `docker-compose up -d` para construir y levantar los contenedores en modo detached.
5. La aplicación estará disponible en [http://localhost](http://localhost).

## Scripts de Inicio del Entorno
El proyecto proporciona scripts para iniciar el entorno en diferentes sistemas operativos. Los scripts automatizan tareas comunes como instalar dependencias, iniciar y detener los contenedores Docker.

### Linux
- **linux-build.sh:** Instala las dependencias del proyecto.
- **linux-start-console-app.sh:** Ingresa a la línea de comandos del contenedor de la aplicación.
- **linux-start-down.sh:** Detiene el ambiente destruyendo los contenedores.
- **linux-start-up.sh:** Despliega el ambiente y, si las dependencias no están instaladas, las instala.

### Windows
- **wn-build.bat:** Instala las dependencias del proyecto.
- **wn-console-app.bat:** Ingresa a la línea de comandos del contenedor de la aplicación.
- **wn-start-down.bat:** Detiene el ambiente destruyendo los contenedores.
- **wn-start-up.bat:** Despliega el ambiente y, si las dependencias no están instaladas, las instala.

## Servicios
El proyecto consta de los siguientes servicios:

### 1. db (MySQL 5.7)
- **Puerto expuesto:** 3306
- **Variables de entorno:**
  - MYSQL_DATABASE: "app_db"
  - MYSQL_ROOT_PASSWORD: "password_root"
  - MYSQL_USER: "admin"
  - MYSQL_PASSWORD: "password_admin"
- **Volúmenes:**
  - ./data:/var/lib/mysql

### 2. app (Aplicación Backend - CodeIgniter 4.4.7)
- **Volúmenes:**
  - ./src:/var/www/html
  - ./log/codeigniter:/var/www/html/writable/logs

### 3. nginx (Servidor Web Nginx stable-alpine3.17)
- **Puertos expuestos:** 80
- **Volúmenes:**
  - ./src:/var/www/html
  - ./conf/nginx.conf:/etc/nginx/conf.d/default.conf
  - ./log/nginx:/var/log/nginx

### 4. periodic-backup (Respaldos Periódicos)
- **Variables de entorno:**
  - MYSQL_CONTAINER_NAME: db
  - MYSQL_DATABASE: app_db
  - MYSQL_ROOT_PASSWORD: "password_root"
- **Volúmenes:**
  - ./backup/data-base:/opt/mysql/backup
  - ./backup/files:/home/backup/files
  - ./backup/config:/home/backup/config
  - ./backup/src:/home/backup/src
  - .:/home/app-backend

### 5. cron-jobs (Tareas Programadas)
- **Volúmenes:**
  - ./src/files/temp:/home/app-backend/pdfsTemp

## Notas Adicionales
- Se recomienda revisar y personalizar los archivos de configuración según las necesidades del proyecto.
- Asegúrate de mantener las credenciales de la base de datos y otras configuraciones sensibles de manera segura.
