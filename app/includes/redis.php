<?php
   $redis = new Redis();
   $redis->connect('192.168.20.6', 6379);
   $v_redis = $redis->info();
?>