#!/bin/bash
# Activador de procesos en segundo plano
set -e

ipflotante=`ps aux | grep -c keepalived`
remoto=`ps aux | grep -c ssh`
logs=`ps aux | grep -c rsyslog`
haproxy=`ps aux | grep -c haproxy`

if [[ "$ipflotante" -eq 1 ]]
then
echo "Activando Ip Flotante..."
service keepalived start
else
echo "Ip flotante activa!!"
fi

if [[ "$remoto" -eq 1 ]]
then
echo "Activando SSH..."
service ssh start
else
echo "SSH activo!!"
fi

if [[ "$haproxy" -eq 1 ]]
then
echo "Activando Haproxy..."
haproxy -f /usr/local/etc/haproxy/haproxy.cfg
else
echo "Haproxy activo!!"
fi


exec "$@"