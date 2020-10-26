FROM debian:latest
# Actualizacion e instalacion de paquetes
RUN apt-get update \
    && apt-get install -y \
    openssh-server \
    lsyncd \
    keepalived
RUN service ssh start
# Habilita logs de lsyncd
RUN mkdir -p /var/log/lsyncd
# Copia y ejecucion de scrip para activar procesos
COPY ./entrypoint.sh /entrypoint.sh
ENTRYPOINT [ "/entrypoint.sh" ]
CMD /usr/sbin/sshd -D -e