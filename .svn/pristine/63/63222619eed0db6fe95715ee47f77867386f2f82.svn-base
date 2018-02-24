<?php

class JHDX_Lite
{
    public $HOST = "sdk.open.api.igexin.com/apiex.htm";
    public $APPKEY;
    public $tpl_id;


    public function __construct()
    {
        $this->HOST = DI()->config->get("app.JHDX.HOST");
        $this->APPKEY = DI()->config->get("app.JHDX.APPKEY");
        $this->tpl_id = DI()->config->get("app.JHDX.tpl_id");
    }
    public function sendMsg ($mobile,$tpl_value){
//        $headers[] = 'Content-Type:application/json;charset=utf-8';
        $url = $this->HOST."?mobile=".$mobile."&tpl_id=".$this->tpl_id."&tpl_value=";
        $url .= urlencode($tpl_value);
        $url .= "&key=".$this->APPKEY;
//        echo $url;exit;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//        curl_setopt($ch, CURLOPT_POST, false);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;

    }
}