FROM haproxy:2.3-dev
RUN apt-get update \
    && apt-get install -y \
    openssh-server \
    keepalived
# Creacion de usuario para monitoreo
RUN useradd remote_user \
    && echo "remote_user:kv5OmlgW7@J4" | chpasswd \
    && mkdir -p /home/remote_user/.ssh \
    && chmod -R 700 /home/remote_user \
    && chown -Rf remote_user:remote_user /home/remote_user \
    && service ssh start
COPY ./ssl /etc/ssl
COPY ./entrypoint.sh /entrypoint.sh
ENTRYPOINT [ "/entrypoint.sh" ]
CMD tail -f entrypoint.sh