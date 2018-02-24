<?php
/**
 * PhalApi_Exception_BadRequest 客户端非法请求
 *
 * @author: wjp 2016-05-16
 *
 */

class PhalApi_Exception_BadRequest extends PhalApi_Exception{

    public function __construct($message, $code = 0) {
        parent::__construct(
            T('{message}', array('message' => $message)), 400 + $code
        );
    }
}
