<?php
   $redis = new Redis();
   $redis->connect('redis', 6379);
   $array = $redis->info();
   echo $array ["redis_version"];

?>