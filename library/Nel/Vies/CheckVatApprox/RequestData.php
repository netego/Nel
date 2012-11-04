<?php
namespace Nel\Vies;

class CheckVatApprox_RequestData
{
    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $vatNumber;

    /**
     * @var string
     */
    public $traderName;

    /**
     * @var string
     */
    public $traderCompanyType;

    /**
     * @var string
     */
    public $traderStreet;

    /**
     * @var string
     */
    public $traderPostcode;

    /**
     * @var string
     */
    public $traderCity;

    /**
     * @var string
     */
    public $requesterCountryCode;

    /**
     * @var string
     */
    public $requesterVatNumber;
}