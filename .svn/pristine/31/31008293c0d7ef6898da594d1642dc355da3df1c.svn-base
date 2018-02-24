<?php
class Ruler_Lite
{

    public function Roler($text){
        //防止sql js注入
//        $text = addslashes($text);
        if (self::inject_check($text)==1){
            return -100;
        }
        //脏话过滤

        return $text;
    }
    public function inject_check($sql_str) {
        return preg_match('/select|insert|update|delete|\'|\/\*|\*|\.\.\/|\.\/|union|into|load_file|outfile/i', $sql_str);
    }

}
