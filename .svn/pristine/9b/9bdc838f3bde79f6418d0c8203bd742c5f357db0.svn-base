<?php
/**
 * log.php
 *
 * @author: cnx7 <zysafe@live.cn> 2016-04-12
 */

defined('API_ROOT') || define('API_ROOT', dirname(__FILE__) . '/..');

$file = API_ROOT . '/../Runtime/v2/log/' . date("Ym", time()) . '/' . date('Ymd', time()) . '.log';

echo '<meta http-equiv="refresh" content="5">';

$html = tail($file, 20);
arsort($html);

foreach ($html as $ht) {
    echo $ht . '<br/><br/>';
}


function tail($filename, $n = 10)
{
    $file = fopen($filename, 'r');

    fseek($file, $n * 1024 * -1, SEEK_END);

    while ($line = fgets($file)) {
        $lines[] = trim($line);
    }

    return array_slice($lines, -$n);
}
