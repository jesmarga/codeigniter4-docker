FROM alpine:3.18.4

## Descomentar las carpetas segun la programacion para las tareas 

## Tareas que se ejecutan cada 15 minutos
COPY scripts/15min/* /etc/periodic/15min

## Tareas que se ejecutan diariamente
## COPY scripts/daily/* /etc/periodic/daily

## Tareas que se ejecutan semanalmente
#COPY scripts/weekly/* /etc/periodic/weekly

RUN apk update && \
    apk upgrade && \
    chmod a+x /etc/periodic/15min/*