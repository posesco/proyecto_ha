FROM haproxy:latest
RUN apt-get update \
    && apt-get upgrade -y \
    && apt-get install -y \
    openssh-client \
    openssh-server \
    rsyslog \
    keepalived \
    && sed -i 's/^\(module.*imklog.*\)/# \1/g' /etc/rsyslog.conf
# Creacion de usuario para monitoreo
RUN useradd remote_user \
    && echo "remote_user:kv5OmlgW7@J4" | chpasswd \
    && mkdir -p /home/remote_user/.ssh \
    && chmod -R 700 /home/remote_user \
    && chown -Rf remote_user:remote_user /home/remote_user \
    && service ssh start
COPY ./ssl /etc/ssl
EXPOSE 80 443
COPY ./entrypoint.sh /entrypoint.sh
COPY ./estado_sistema.sh /estado_sistema.sh
ENTRYPOINT [ "/entrypoint.sh" ]
CMD tail -f /entrypoint.sh