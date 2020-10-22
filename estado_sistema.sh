#!/bin/bash
echo '<<<<<<<>>>>>>> IMFORMACION DEL HOSTNAME <<<<<<<>>>>>>>'
    echo ${BLANK_SPACE}
    hostname
    echo ${BLANK_SPACE}
echo '<<<<<<<>>>>>>> USO DE ALMACENAMIENTO <<<<<<<>>>>>>>'
    echo ${BLANK_SPACE}
    df -h
    echo ${BLANK_SPACE}
echo "<<<<<<<>>>>>>> USO DE LA MEMORIA <<<<<<<>>>>>>>"
    echo ${BLANK_SPACE}
    free -h
    echo ${BLANK_SPACE}
echo '<<<<<<<>>>>>>> TIEMPO DE VIDA <<<<<<<>>>>>>>'
    echo ${BLANK_SPACE}
    uptime -p
    echo ${BLANK_SPACE}
echo '<<<<<<<>>>>>>> PROCESOS ACTIVOS <<<<<<<>>>>>>>'
    echo ${BLANK_SPACE}
    ps aux
    echo ${BLANK_SPACE}
exec "$@"