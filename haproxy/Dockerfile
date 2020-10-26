FROM haproxy:2.3-dev
RUN apt-get update \
    && apt-get install -y \
    openssh-server \
    keepalived
# Creacion de usuario para monitoreo
RUN service ssh start
COPY ./ssl /etc/ssl
COPY ./entrypoint.sh /entrypoint.sh
ENTRYPOINT [ "/entrypoint.sh" ]
CMD /usr/sbin/sshd -D -e