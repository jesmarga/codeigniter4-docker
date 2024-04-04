FROM alpine:3.18.4

RUN apk update && \
    apk upgrade && \
    apk add --no-cache mariadb-client

COPY scripts/daily/* /etc/periodic/daily
COPY scripts/weekly/* /etc/periodic/weekly

RUN chmod a+x /etc/periodic/daily/* && \
    chmod a+x /etc/periodic/weekly/*