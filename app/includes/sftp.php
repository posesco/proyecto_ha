<?php
$servidorssh = '192.168.20.19';
$usuario = 'remote_user';
$pass = 'kv5OmlgW7@J4';
$enlace = ssh2_connect($servidorssh, 22);
$login_result = ssh2_auth_password($enlace, $usuario, $pass);
$sftp = ssh2_sftp($enlace);
// $sftp = (int)$sftp;
$dir = 'ssh2.sftp://'.$sftp.'/home/remote_user/almacen/';
$fingerprint = ssh2_fingerprint($enlace, SSH2_FINGERPRINT_MD5 | SSH2_FINGERPRINT_HEX);
