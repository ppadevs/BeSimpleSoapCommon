<?php

namespace ppadevs\SoapCommon\Type\KeyValue;

use ppadevs\SoapBundle\ServiceDefinition\Annotation as Soap;
use ppadevs\SoapCommon\Type\AbstractKeyValue;

class Int extends AbstractKeyValue
{
    /**
     * @Soap\ComplexType("int")
     */
    protected $value;
}
