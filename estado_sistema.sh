#!/bin/bash
echo *** IMFORMACION DEL HOSTNAME ***
    hostname
    echo ${BLANK_SPACE}

echo *** ESPACIO UTILIZADO EN EL DISCO ***
    df -h
    echo ${BLANK_SPACE}

echo *** USO DE LA MEMORIA ***
    free

echo *** ACTIVIDAD Y CARGA DEL SISTEMA ***
    uptime
    echo ${BLANK_SPACE}

echo *** USUARIOS ACTIVOS ***
    who
    echo ${BLANK_SPACE}

exit 0