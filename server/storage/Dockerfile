FROM alpine:latest
WORKDIR /home
RUN apk add openssh-server openssh-client
CMD mkdir .ssh almacen  
COPY ./key/remote-key.pub .ssh/authorized_keys
CMD ["echo runner"]
ENTRYPOINT ["/bin/sh", "-c"]