FROM alpine:3.18.4

RUN apk update && \
    apk upgrade && \
    apk add --no-cache mariadb-client
    
## Descomentar las carpetas segun la programacion para los respaldos

## Tareas que se ejecutan cada 15 minutos
## COPY scripts/15min/* /etc/periodic/15min

## Tareas que se ejecutan diariamente
COPY scripts/daily/* /etc/periodic/daily
## Tareas que se ejecutan semanalmente
COPY scripts/weekly/* /etc/periodic/weekly

RUN chmod a+x /etc/periodic/daily/* && \
    chmod a+x /etc/periodic/weekly/*