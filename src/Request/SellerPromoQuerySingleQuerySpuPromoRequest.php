<?php
namespace Pw\JdSdk\Request;

class SellerPromoQuerySingleQuerySpuPromoRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.promo.engine.sdk.service.QueryPromoService.singleQuerySkuPromo";
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
    private $paramJson;

    public function setParamJson($paramJson)
    {
        $this->paramJson = $paramJson;
        $this->apiParas["param_json"] = $paramJson;
    }

    public function getParamJson()
    {
        return $this->paramJson;
    }

}
