<?php
   $redis = new Redis();
   $redis->connect('redis', 6379);
   $v_redis = $redis->info();
?>