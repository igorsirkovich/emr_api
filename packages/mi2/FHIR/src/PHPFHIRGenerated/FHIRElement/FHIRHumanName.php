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
 * A human's name with the ability to identify parts and usage.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRHumanName extends FHIRElement
{
    /**
     * Identifies the purpose for this name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRNameUse
     */
    public $use = null;

    /**
     * A full text representation of the name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea) the family name of a son is the first name of his father.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $family = array();

    /**
     * Given name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $given = array();

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the start of the name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $prefix = array();

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the end of the name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $suffix = array();

    /**
     * Indicates the period of time when this name was valid for the named person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Identifies the purpose for this name.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRNameUse
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Identifies the purpose for this name.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRNameUse $use
     */
    public function setUse($use)
    {
        $this->use = $use;
    }

    /**
     * A full text representation of the name.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A full text representation of the name.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea) the family name of a son is the first name of his father.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea) the family name of a son is the first name of his father.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString[] $family
     */
    public function addFamily($family)
    {
        $this->family[] = $family;
    }

    /**
     * Given name.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getGiven()
    {
        return $this->given;
    }

    /**
     * Given name.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString[] $given
     */
    public function addGiven($given)
    {
        $this->given[] = $given;
    }

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the start of the name.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the start of the name.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString[] $prefix
     */
    public function addPrefix($prefix)
    {
        $this->prefix[] = $prefix;
    }

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the end of the name.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the end of the name.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString[] $suffix
     */
    public function addSuffix($suffix)
    {
        $this->suffix[] = $suffix;
    }

    /**
     * Indicates the period of time when this name was valid for the named person.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Indicates the period of time when this name was valid for the named person.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     */
    public function setPeriod($period)
    {
        $this->period = $period;
    }


}