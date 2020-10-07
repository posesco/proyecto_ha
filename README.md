Highly Available

Creacion de llaves SSH
ssh-keygen -f remote-key -m PEM

Creacion de Certificado autofirmado
openssl req -newkey rsa:2048 -nodes -keyout wiediilocal.key -x509 -sha512 -days 365 -out wiediilocal.crt
    X509: Firma y verifica certificados
    days: Tiempo de validaz del certificado 
    req, in: Solicitud de creacion de un certificado a partir del archivo indicado en -in 
    signkey: La clave con la que sera firmado
Permitir certificado en Chrome 
    chrome://flags/#allow-insecure-localhost

