<?php
header("Access-Control-Allow-Origin:*");
$jsonArray = json_decode($_REQUEST['json'],true);
echo file_get_contents('http://api.htmajiang.cn/v2/?service=User.AddUser&pid='.$jsonArray['name'].'&game_id='.$jsonArray['gameid']);