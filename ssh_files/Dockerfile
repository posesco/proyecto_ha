FROM debian:latest
# Actualizacion e instalacion de paquetes
RUN apt-get update \
    && apt-get upgrade -y \
    && apt-get install -y \
    curl \
    liblua5.3-0 \
    libpopt0 \
    libreadline7 \
    lsb-base \
    lua5.3 \
    readline-common \
    readline-doc \
    openssh-client \
    openssh-server \
    rsync \
    lsyncd \
    rsyslog \
    keepalived 
# Creacion de usuario para monitoreo
RUN useradd remote_user \
    && echo "remote_user:kv5OmlgW7@J4" | chpasswd \
    && mkdir -p /home/remote_user/.ssh \
    && chmod -R 700 /home/remote_user \
    && chown -Rf remote_user:remote_user /home/remote_user \
    && service ssh start
# Habilita logs de lsyncd
RUN mkdir -p /var/log/lsyncd \
    && sed -i 's/^\(module.*imklog.*\)/# \1/g' /etc/rsyslog.conf \
    && apt-get autoremove -y   
# Copia y ejecucion de scrip para activar procesos
COPY ./entrypoint.sh /entrypoint.sh
COPY ./estado_sistema.sh /estado_sistema.sh
ENTRYPOINT [ "/entrypoint.sh" ]
CMD tail -f /entrypoint.sh
