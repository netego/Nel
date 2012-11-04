<?php
namespace Nel\Vies;

class CheckVat_ResponseData
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
     * @var \Datetime
     */
    public $requestDate;

    /**
     * @var bool
     */
    public $valid;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $address;
}