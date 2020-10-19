settings {
    logfile        = "/var/log/lsyncd/lsyncd.log",
    statusFile     = "/var/log/lsyncd/lsyncd.status",
    statusInterval = 20,
    nodaemon       = false
}

sync {
    default.rsyncssh,
    source    = "/home/remote_user/almacen",
    host      = "192.168.20.18",
    targetdir = "/home/remote_user/almacen",
    delay     = 2 
}