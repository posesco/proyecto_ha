Highly Available


Creacion de Certificado autofirmado
openssl req -newkey rsa:2048 -nodes -keyout wiediilocal.key -x509 -sha512 -days 365 -out wiediilocal.crt
    X509: Firma y verifica certificados
    days: Tiempo de validaz del certificado 
    req, in: Solicitud de creacion de un certificado a partir del archivo indicado en -in 
    signkey: La clave con la que sera firmado
Permitir certificado en Chrome 
    chrome://flags/#allow-insecure-localhost

Ejecutar Keepalived

/usr/sbin/keepalived -P -C -d -D -S 7 -f /etc/keepalived/keepalived.conf --dont-fork --log-console


Redis

en php.ini se modificaron las lineas:
session.save_handler = redis
session.save_path = "tcp://192.168.20.7:6379"


SFTP 
Creacion de llaves SSH
mkdir key
chmod 700 key
ssh-keygen -f remote-key -t dsa
chmod 644 remote-key.pub

PubkeyAuthentication yes
AuthorizedKeysFile .ssh/authorized_keys
PasswordAuthentication yes
PermitRootLogin yes
IdentityFile ~/.ssh/id_rsa


ssh-keygen -t dsa -f "/home/remote_user/.ssh/id_dsa" -N "" 