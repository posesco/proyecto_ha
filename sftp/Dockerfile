FROM debian:latest
RUN apt-get update && \
    apt-get install --no-install-recommends --no-install-suggests -y \
    rsyslog \
    keepalived \
    openssh-server
RUN rm -rf /var/lib/apt/lists/* && \
    sed -i 's/^\(module.*imklog.*\)/# \1/g' /etc/rsyslog.conf



    systemctl status ssh