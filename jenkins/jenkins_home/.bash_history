ssh root@192.168.20.18
ls
pwd
ping 192.168.20.19
ssh remote_user@192.168.20.19
clear
cd var/
ls
cd jenkins_home/
ssh -i id_rsa root@192.168.20.19
clear
ls
clear
cd ~/.ssh/
ping 192.168.20.19
ping --help
ping -c 5 192.168.20.19
exit
find . -type f -mtime -1 -exec ls -gGh --full-time '{}' \; | cut -d ' ' -f 4,5,7
    echo -e "${FOREGROUND_COLOR}${BACKGROUND_COLOR}*** IMFORMACION DEL HOSTNAME ***${DEFAULT_COLOR}"
    echo -e "${FOREGROUND_COLOR}${BACKGROUND_COLOR}*** IMFORMACION DEL HOSTNAME ***${DEFAULT_COLOR}"
hostnamectl
    echo ${BLANK_SPACE}
hostname
    df -h
free
uptime
who
du -h
du
du -f
lsblk
pwd
cd home/
ls
ls -ahl
cd /
cd var/jenkins_home/
du -h
cd /var/
du -h jenkins_home/
du --help
du -x jenkins_home/
du --help
ps
exit
