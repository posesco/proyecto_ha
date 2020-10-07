Highly Available

Creacion de llaves SSH
ssh-keygen -f remote-key -m PEM

Creacion de Certificado autofirmado

X509: Firma y verifica certificados
days: Tiempo de validaz del certificado 
req, in: Solicitud de creacion de un certificado a partir del archivo indicado en -in 
signkey: La clave con la que sera firmado
    Creacion:
    openssl req -new -nodes -keyout wiediilocal.key -out wiediilocal.csr -days 365
    chmod 400 wiediilocal.key
    Firma:
    openssl x509 -req -days 365 -in wiediilocal.csr -signkey wiediilocal.key -out wiediilocal.crt