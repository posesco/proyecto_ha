<?php
$servidorssh = '192.168.20.17';
$usuario = 'remote_user';
$pass = 'kv5OmlgW7@J4';
$enlace = ssh2_connect($servidorssh, 22);
ssh2_auth_password($enlace, $usuario, $pass);
$sftp = ssh2_sftp($enlace);
$fingerprint = ssh2_fingerprint($enlace, SSH2_FINGERPRINT_MD5 | SSH2_FINGERPRINT_HEX);
?>
