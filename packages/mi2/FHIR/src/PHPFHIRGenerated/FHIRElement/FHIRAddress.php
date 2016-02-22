<?php namespace PHPFHIRGenerated\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 22nd, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement;

/**
 * There is a variety of postal address formats defined around the world. This format defines a superset that is the basis for all addresses around the world.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRAddress extends FHIRElement
{
    /**
     * The purpose of this address.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddressUse
     */
    public $use = null;

    /**
     * Distinguishes between physical addresses (those you can visit) and mailing addresses (e.g. PO Boxes and care-of addresses). Most addresses are both.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddressType
     */
    public $type = null;

    /**
     * A full text representation of the address.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * This component contains the house number, apartment number, street name, street direction,  P.O. Box number, delivery hints, and similar address information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $line = array();

    /**
     * The name of the city, town, village or other community or delivery center.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $city = null;

    /**
     * The name of the administrative area (county).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $district = null;

    /**
     * Sub-unit of a country with limited sovereignty in a federally organized country. A code may be used if codes are in common use (i.e. US 2 letter state codes).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $state = null;

    /**
     * A postal code designating a region defined by the postal service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $postalCode = null;

    /**
     * Country - a nation as commonly understood or generally accepted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $country = null;

    /**
     * Time period when address was/is in use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The purpose of this address.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddressUse
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * The purpose of this address.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddressUse $use
     */
    public function setUse($use)
    {
        $this->use = $use;
    }

    /**
     * Distinguishes between physical addresses (those you can visit) and mailing addresses (e.g. PO Boxes and care-of addresses). Most addresses are both.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddressType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Distinguishes between physical addresses (those you can visit) and mailing addresses (e.g. PO Boxes and care-of addresses). Most addresses are both.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddressType $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * A full text representation of the address.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A full text representation of the address.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * This component contains the house number, apartment number, street name, street direction,  P.O. Box number, delivery hints, and similar address information.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * This component contains the house number, apartment number, street name, street direction,  P.O. Box number, delivery hints, and similar address information.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString[] $line
     */
    public function addLine($line)
    {
        $this->line[] = $line;
    }

    /**
     * The name of the city, town, village or other community or delivery center.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * The name of the city, town, village or other community or delivery center.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * The name of the administrative area (county).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * The name of the administrative area (county).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $district
     */
    public function setDistrict($district)
    {
        $this->district = $district;
    }

    /**
     * Sub-unit of a country with limited sovereignty in a federally organized country. A code may be used if codes are in common use (i.e. US 2 letter state codes).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sub-unit of a country with limited sovereignty in a federally organized country. A code may be used if codes are in common use (i.e. US 2 letter state codes).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * A postal code designating a region defined by the postal service.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * A postal code designating a region defined by the postal service.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * Country - a nation as commonly understood or generally accepted.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Country - a nation as commonly understood or generally accepted.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * Time period when address was/is in use.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Time period when address was/is in use.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     */
    public function setPeriod($period)
    {
        $this->period = $period;
    }


}