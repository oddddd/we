<?php
/**
 * PhalApi_Filter_ParameterSign 参数验证
 *
 * @author: wjp 2016-05-16
 *
 * 注意：无任何参数时，不作验签
 */

class PhalApi_Filter_ParameterSign implements PhalApi_Filter {

    public function check() {
        $allParams = DI()->request->getAll();
        if (empty($allParams)) {
            return;
        }
    }
}
