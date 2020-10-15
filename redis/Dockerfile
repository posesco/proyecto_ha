FROM redis:latest
# Instalacion de paquetes necesarios
RUN apt-get update \
    && apt-get upgrade -y \
    && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \ 
    openssh-client \
    openssh-server \
    rsyslog \
    keepalived
RUN sed -i 's/^\(module.*imklog.*\)/# \1/g' /etc/rsyslog.conf \
    && apt-get autoremove -y  
# Rutina que activa procesos para ip flotante
COPY ./entrypoint.sh /entrypoint.sh
ENTRYPOINT [ "/entrypoint.sh" ]
CMD ["redis-server"]