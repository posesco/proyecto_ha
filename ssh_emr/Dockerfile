FROM debian:latest
# Actualizacion e instalacion de paquetes
RUN apt-get update \
    && apt-get install -y \
    openssh-server \
    lsyncd \
    keepalived 
# Creacion de usuario para monitoreo
RUN useradd remote_user \
    && echo "remote_user:kv5OmlgW7@J4" | chpasswd \
    && mkdir -p /home/remote_user/.ssh \
    && chmod -R 700 /home/remote_user \
    && chown -Rf remote_user:remote_user /home/remote_user \
    && service ssh start
# Habilita logs de lsyncd
RUN mkdir -p /var/log/lsyncd
# Copia y ejecucion de scrip para activar procesos
COPY ./entrypoint.sh /entrypoint.sh
ENTRYPOINT [ "/entrypoint.sh" ]
CMD /usr/sbin/sshd -D -e