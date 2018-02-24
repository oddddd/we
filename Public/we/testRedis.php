
     //测试
      <?php
         $auth     = '123456';
         $source   = '172.18.32.106';
         $host     = '6379';
         $redis    = new Redis();
         echo $redis->connect($host) ? "$host connect" : "$host fail";
         if($auth){
             echo $redis->auth($auth) ? " auth success" : " auth fail";
         }
