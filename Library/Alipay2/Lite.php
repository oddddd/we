<?php
/**
 * Lite.php
 *
 * @author: aosm <zysafe@live.cn> 2017-04-05
 */
require_once ("aop/AopClient.php");
require_once ("aop/request/AlipayTradeAppPayRequest.php");
require_once ("aop/request/AlipayTradeRefundRequest.php");

class Alipay2_Lite
{

    /**
     * 支付宝签名参数
     *
     * @param array $order_list            
     */
    public function sign($order_list)
    {
        $c = new AopClient();
        $c->appId = DI()->config->get('app.aliwap.appid');
        $c->gatewayUrl = $this->gateway; // 网关
        $c->format = DI()->config->get('app.aliwap.format');
        $c->charset = "utf-8";
        $c->signType = DI()->config->get('app.aliwap.sign_type');
        $c->rsaPrivateKey = DI()->config->get('app.aliwap.rsaPrivateKey');
        $c->rsaPrivateKeyFilePath = DI()->config->get('app.aliwap.rsaPrivateKeyFilePath');
        $c->alipayrsaPublicKey = DI()->config->get('app.aliwap.alipayrsaPublicKey');
        
        $data = [
            'service' => "mobile.securitypay.pay",
            'partner' => DI()->config->get('app.aliwap.partner'),
            '_input_charset' => "utf-8",
            'notify_url' => "http://server.chongmi.com/notify.php",
            'out_trade_no' => $order_list[0]['cm_order_id'],
            'subject' => $order_list[0]['title'],
            'payment_type' => 1, // 默认值是1 ：商品购买
            'seller_id' => DI()->config->get('app.aliwap.email'), // 卖家支付宝账号
            'total_fee' => "0.01"
        ]; // 支付金额
        
        $res = array(
            'app_id' => $c->appId,
            'method' => 'alipay.trade.app.pay',
            'charset' => 'utf-8',
            'sign_type' => 'RSA',
            'timestamp' => date("Y-m-d H:i:s", time()), // 发送请求的时间
            'version' => '1.0',
            'notify_url' => 'http://server.chongmi.com/notify.php', // 交易成功回调接口
            'biz_content' => array(
                'subject' => $order_list[0]['title'], // 商品标题
                'out_trade_no' => $order_list[0]['cm_order_id'], // 商品订单号
                                                                 // 'timeout_express'=> '90m', //交易过期时间
                'total_amount' => '0.01', // 交易金额
                'product_code' => 'QUICK_MSECURITY_PAY', // 销售产品码
                'goods_type' => '1'
            )
        ); // 商品主类 0：虚拟商品 1：实物商品

        
        $res['sign'] = $c->rsaSign($data, $signType = "RSA");
        return $res;
    }

    public function validateSign($order_list)
    {
        $aop = new AopClient();
        $aop->gatewayUrl = "https://openapi.alipay.com/gateway.do";
        $aop->appId = DI()->config->get('app.aliwap.appid');
        
        $aop->rsaPrivateKey = DI()->config->get('app.aliwap.rsaPrivateKeyUrl');
        $aop->format = "json";
        $aop->charset = "UTF-8";
        $aop->signType = "RSA";
        
        $aop->alipayrsaPublicKey = DI()->config->get('app.aliwap.rsaPublicKey');
        // 实例化具体API对应的request类,类名称和接口名称对应,当前调用接口名称：alipay.trade.app.pay
        $request = new AlipayTradeAppPayRequest();
        // SDK已经封装掉了公共参数，这里只需要传入业务参数
        $bizcontent = "{\"body\":\"我是测试数据\"," . "\"subject\": \"App支付测试\"," . "\"out_trade_no\": \"20170125test01\"," . "\"timeout_express\": \"30m\"," . "\"total_amount\": \"0.01\"," . "\"product_code\":\"QUICK_MSECURITY_PAY\"" . "}";
        $request->setNotifyUrl("http://server.chongmi.com/notify.php");
        $request->setBizContent($bizcontent);
        // 这里和普通的接口调用不同，使用的是sdkExecute
        $response = $aop->sdkExecute($request);
        // htmlspecialchars是为了输出到页面时防止被浏览器将关键参数html转义，实际打印到日志以及http传输不会有这个问题
        $aa = htmlspecialchars($response);
        
        return $aa;
    }

    /**
     * 签名支付宝2.0
     */
    public function sign2($order_list)
    {
        $aop = new AopClient();
        $aop->gatewayUrl = DI()->config->get('app.aliwap.gatewayUrl');
        $aop->appId = DI()->config->get('app.aliwap.appid');
        $aop->rsaPrivateKey = DI()->config->get('app.aliwap.rsaPrivateKey');
        // 下面是支付宝的公钥使用默认请勿修改！！！
        $aop->alipayrsaPublicKey = DI()->config->get('app.aliwap.rsaPublicKey');
        $aop->apiVersion = '1.0';
        $aop->postCharset = 'utf-8';
        $aop->format = DI()->config->get('app.aliwap.format');
        
        $request = new AlipayTradeAppPayRequest();
        $request->setNotifyUrl(DI()->config->get('app.aliwap.notifyUrl'));
        
        $request->setBizContent("{\"out_trade_no\":\"{$order_list[0]['cm_order_id']}\",\"timeout_express\":\"30d\",\"total_amount\":0.01,\"product_code\":\"QUICK_MSECURITY_PAY\",\"subject\":\"{$order_list[0]['title']}\"}");
        // app支付签名方法
        $result = $aop->sdkExecute($request);
        // 生成签名的字符串，直接返回给客户端，请求到支付宝
        
        $arr = htmlspecialchars($result);
        
        return htmlspecialchars($result);
    }

    /**
     * RSA验签方法
     * 
     * @param $arr 验签支付宝返回的信息，使用默认支付宝公钥。            
     * @return boolean
     */
    function RSAcheck($arr)
    {
        $aop = new AopClient();
        
        $aop->gateway_url = DI()->config->get('app.aliwap.gatewayUrl');
        $aop->appid = DI()->config->get('app.aliwap.appid');
        $aop->private_key = DI()->config->get('app.aliwap.rsaPrivateKey');
        $aop->alipay_public_key = DI()->config->get('app.aliwap.rsaPublicKey');
        $aop->charset = "utf-8";
        
        if (empty($aop->appid) || trim($aop->appid) == "") {
            throw new Exception("appid should not be NULL!");
        }
        if (empty($aop->private_key) || trim($aop->private_key) == "") {
            throw new Exception("private_key should not be NULL!");
        }
        if (empty($aop->alipay_public_key) || trim($aop->alipay_public_key) == "") {
            throw new Exception("alipay_public_key should not be NULL!");
        }
        if (empty($aop->charset) || trim($aop->charset) == "") {
            throw new Exception("charset should not be NULL!");
        }
        if (empty($aop->gateway_url) || trim($aop->gateway_url) == "") {
            throw new Exception("gateway_url should not be NULL!");
        }
        
        $aop->alipayrsaPublicKey = $aop->alipay_public_key;
        $result = $aop->rsaCheckV1($arr, $aop->alipay_public_key);
        return $result;
    }

    public function refund_sign($order_info)
    {
        $aop = new AopClient();
        $aop->gatewayUrl = 'https://openapi.alipay.com/gateway.do';
        $aop->appId = DI()->config->get('app.aliwap.appid');
        $aop->rsaPrivateKey = DI()->config->get('app.aliwap.rsaPrivateKey');
        $aop->alipayrsaPublicKey = DI()->config->get('app.aliwap.rsaPublicKey');
        $aop->apiVersion = '1.0';
        $aop->signType = 'RSA';
        $aop->postCharset = 'UTF-8';
        $aop->format = 'json';
        $request = new AlipayTradeRefundRequest();
        $request->setBizContent("{" . "    \"out_trade_no\":\"{$order_info[0]['cm_order_id']}\"," . "    \"refund_amount\":0.01," . "    \"refund_reason\":\"正常退款\"," . "    \"out_request_no\":\"HZ01RF001\"," . "    \"operator_id\":\"OP001\"," . "    \"store_id\":\"NJ_S_001\"," . "    \"terminal_id\":\"NJ_T_001\"" . "  }");
        $result = $aop->execute($request);
        
        $responseNode = str_replace(".", "_", $request->getApiMethodName()) . "_response";
        $resultCode = $result->$responseNode->code;
        if (! empty($resultCode) && $resultCode == 10000) {
            return $result->$responseNode;
        } else {
            return true;
        }
    }
}

