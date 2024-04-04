FROM alpine:3.18.4

COPY scripts/15min/* /etc/periodic/15min
#COPY scripts/weekly/* /etc/periodic/weekly

RUN apk update && \
    apk upgrade && \
    chmod a+x /etc/periodic/15min/*