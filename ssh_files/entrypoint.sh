#!/bin/bash
# Activador de procesos en segundo plano
set -e

ipflotante=`ps aux | grep -c keepalived`
espejo=`ps aux | grep -c lsyncd`
remoto=`ps aux | grep -c ssh`

if [[ "$remoto" -eq 1 ]]
then
echo "Activando SSH..."
service ssh start
else
echo "SSH activo!!"
fi

if [[ "$ipflotante" -eq 1 ]]
then
echo "Activando Ip Flotante..."
service keepalived start
else
echo "Ip flotante activa!!"
fi

if [[ "$espejo" -eq 1 ]]
then
echo "Activando Ip replicacion automatica..."
service lsyncd start
else
echo "Replicacion activa!!"
fi

exec "$@"