<?php
namespace Nel;

class Vies
{
    /**
     * @var string
     */
    private $wsdl = "http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl";

    /**
     * @var \Zend\Soap\Client
     */
    private $soapClient;

    public function __construct()
    {
        $this->initSoapClient();
    }

    private function initSoapClient(){
        $this->soapClient = new \Zend\Soap\Client($this->wsdl);
    }

    public function getSoapClient(){
        return $this->soapClient;
    }
}
