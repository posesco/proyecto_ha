FROM redis:6
# Instalacion de paquetes necesarios
RUN apt-get update \
    && apt-get install -y \ 
    openssh-server \
    keepalived
RUN service ssh start     
COPY ./entrypoint.sh /entrypoint.sh
ENTRYPOINT [ "/entrypoint.sh" ]
CMD ["redis-server"]