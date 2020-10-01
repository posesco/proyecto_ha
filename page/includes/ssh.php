<?php
$servidor = 'archivos';
$usuario = '';
$pass = '';
$enlace = ssh2_connect($servidor, 22);
ssh2_auth_password($enlace, $usuario, $pass);

$sftp = ssh2_sftp($enlace);

$stream = fopen("ssh2.sftp://$sftp/path/to/file", 'r');
?>