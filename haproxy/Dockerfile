FROM haproxy:latest
RUN apt-get update && \
    apt-get install --no-install-recommends --no-install-suggests -y rsyslog keepalived && \
    rm -rf /var/lib/apt/lists/* && \
    sed -i 's/^\(module.*imklog.*\)/# \1/g' /etc/rsyslog.conf
COPY ./conf/haproxy.cfg /usr/local/etc/haproxy/haproxy.cfg
COPY ./keepalived /etc/keepalived
COPY ./ssl /etc/ssl
EXPOSE 80 443