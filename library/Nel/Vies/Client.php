<?php
namespace Nel\Vies;

class Client
{
    /**
     * Check VAT service WSDL
     *
     * @var string
     */
    private $wsdl = "http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl";

    /**
     * Soap Client
     *
     * @var \Zend\Soap\Client
     */
    private $soapClient;

    public function __construct()
    {
        $this->initSoapClient();
    }

    private function initSoapClient()
    {
        $options = array();
        $options['soap_version'] = SOAP_1_1;
        $this->soapClient = new \Zend\Soap\Client($this->wsdl, $options);
    }

    /**
     * @return \Zend\Soap\Client
     */
    private function getSoapClient()
    {
        return $this->soapClient;
    }

    /**
     * @param CheckVat_RequestData $requestData
     * @return CheckVat_ResponseData
     * @throw ApiException
     */
    public function checkVat(CheckVat_RequestData $requestData)
    {
        try {
            $response = $this->getSoapClient()->checkVat($requestData);
        } catch (\SoapFault $e) {
            throw new ApiException($e->getMessage(), $e->getCode());
        }

        $responseData = new CheckVat_ResponseData();
        $responseData->countryCode = $response->countryCode;
        $responseData->vatNumber = $response->vatNumber;
        $responseData->requestDate = new \DateTime($response->requestDate);
        $responseData->valid = (bool)$response->valid;
        $responseData->name = isset($response->name)?$response->name:NULL;
        $responseData->address = isset($response->address)?$response->address:NULL;

        return $responseData;
    }

    /**
     * @param CheckVatApprox_RequestData $requestData
     * @return CheckVatApprox_ResponseData
     * @throws ApiException
     */
    public function checkVatApprox(CheckVatApprox_RequestData $requestData)
    {
        try {
            $response = $this->getSoapClient()->checkVatApprox($requestData);
        } catch (\SoapFault $e) {
            throw new ApiException($e->getMessage(), $e->getCode());
        }

        $responseData = new CheckVatApprox_ResponseData();
        $responseData->countryCode = $response->countryCode;
        $responseData->vatNumber = $response->vatNumber;
        $responseData->requestDate = new \DateTime($response->requestDate);
        $responseData->valid = (bool)$response->valid;
        $responseData->traderName = isset($response->traderName)?$response->traderName:NULL;
        $responseData->traderCompanyType = isset($response->traderCompanyType)?$response->traderCompanyType:NULL;
        $responseData->traderAddress = isset($response->traderAddress)?$response->traderAddress:NULL;
        $responseData->traderStreet = isset($response->traderStreet)?$response->traderStreet:NULL;
        $responseData->traderPostcode = isset($response->traderPostcode)?$response->traderPostcode:NULL;
        $responseData->traderCity = isset($response->traderCity)?$response->traderCity:NULL;
        $responseData->traderNameMatch = isset($response->traderNameMatch)?$response->traderNameMatch:NULL;
        $responseData->traderCompanyTypeMatch = isset($response->traderCompanyTypeMatch)?$response->traderCompanyTypeMatch:NULL;
        $responseData->traderStreetMatch = isset($response->traderStreetMatch)?$response->traderStreetMatch:NULL;
        $responseData->traderPostcodeMatch = isset($response->traderPostcodeMatch)?$response->traderPostcodeMatch:NULL;
        $responseData->traderCityMatch = isset($response->traderCityMatch)?$response->traderCityMatch:NULL;
        $responseData->requestIdentifier = isset($response->requestIdentifier)?$response->requestIdentifier:NULL;

        return $responseData;
    }
}
