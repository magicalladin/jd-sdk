<?php
namespace Pw\JdSdk\Request;

class SellerOrderSendGoodsOpenApiRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.order.sendGoodsOpenApi";
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return "{}";
        }
        return json_encode($this->apiParas);
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
    private $orderId;

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        $this->apiParas["orderId"] = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    private $expressNo;

    public function setExpressNo($expressNo)
    {
        $this->expressNo = $expressNo;
        $this->apiParas["expressNo"] = $expressNo;
    }

    public function getExpressNo()
    {
        return $this->expressNo;
    }

    private $expressCompany;

    public function setExpressCompany($expressCompany)
    {
        $this->expressCompany = $expressCompany;
        $this->apiParas["expressCompany"] = $expressCompany;
    }

    public function getExpressCompany()
    {
        return $this->expressCompany;
    }

}
