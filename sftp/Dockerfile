FROM debian:latest
# Actualizacion e instalacion de paquetes
RUN apt-get update &&\
    apt-get upgrade -y &&\
    apt-get install -y \
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
    keepalived 
# Creacion de usuario ssh y habilitacion del servicio
RUN useradd remote_user && \
    echo "remote_user:kv5OmlgW7@J4" | chpasswd && \
    mkdir -p /home/remote_user/.ssh &&\
    chmod -R 700 /home/remote_user &&\
    chown -Rf remote_user:remote_user /home/remote_user &&\
    service ssh start
# Habilita logs de lsyncd
RUN mkdir -p /var/log/lsyncd &&\
    service lsyncd start
# Activacion de servicios SSH en segundo plano
CMD ["lsyncd", "-nodaemon", "-delay", "0"]
CMD /usr/sbin/keepalived -D
CMD /usr/sbin/sshd -D -e
