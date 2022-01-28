<?php

namespace ppadevs\SoapCommon\Type\KeyValue;

use ppadevs\SoapBundle\ServiceDefinition\Annotation as Soap;
use ppadevs\SoapCommon\Type\AbstractKeyValue;

class Float extends AbstractKeyValue
{
    /**
     * @Soap\ComplexType("float")
     */
    protected $value;
}
