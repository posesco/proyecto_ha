FROM haproxy:latest
COPY haproxy.cfg /usr/local/etc/haproxy/haproxy.cfg
ENV USER=haproxy
ENV UID=12345
RUN adduser \
    --disabled-password \
    --gecos "" \
    --home "$(pwd)" \
    --no-create-home \
    --uid "$UID" \
    "$USER"
RUN mkdir /var/lib/haproxy /dev/log
CMD ["haproxy", "-f", "/usr/local/etc/haproxy/haproxy.cfg"]