<?php

namespace ppadevs\SoapCommon\Type\KeyValue;

use ppadevs\SoapBundle\ServiceDefinition\Annotation as Soap;
use ppadevs\SoapCommon\Type\AbstractKeyValue;

class DateTime extends AbstractKeyValue
{
    /**
     * @Soap\ComplexType("dateTime")
     */
    protected $value;
}
