<?php namespace PHPFHIRGenerated\FHIRResource\FHIRNutritionOrder;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A request to supply a diet, formula feeding (enteral) or oral nutritional supplement to a patient/resident.
 */
class FHIRNutritionOrderSupplement extends FHIRBackboneElement
{
    /**
     * The kind of nutritional supplement product required such as a high protein or pediatric clear liquid supplement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The product or brand name of the nutritional supplement such as "Acme Protein Shake".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $productName = null;

    /**
     * The time period and frequency at which the supplement(s) should be given.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming[]
     */
    public $schedule = array();

    /**
     * The amount of the nutritional supplement to be given.
     * @var \PHPFHIRGenerated\FHIRSimpleQuantity
     */
    public $quantity = null;

    /**
     * Free text or additional instructions or information pertaining to the oral supplement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $instruction = null;

    /**
     * The kind of nutritional supplement product required such as a high protein or pediatric clear liquid supplement.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The kind of nutritional supplement product required such as a high protein or pediatric clear liquid supplement.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The product or brand name of the nutritional supplement such as "Acme Protein Shake".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * The product or brand name of the nutritional supplement such as "Acme Protein Shake".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    /**
     * The time period and frequency at which the supplement(s) should be given.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming[]
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * The time period and frequency at which the supplement(s) should be given.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming[] $schedule
     */
    public function addSchedule($schedule)
    {
        $this->schedule[] = $schedule;
    }

    /**
     * The amount of the nutritional supplement to be given.
     * @return \PHPFHIRGenerated\FHIRSimpleQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * The amount of the nutritional supplement to be given.
     * @param \PHPFHIRGenerated\FHIRSimpleQuantity $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * Free text or additional instructions or information pertaining to the oral supplement.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getInstruction()
    {
        return $this->instruction;
    }

    /**
     * Free text or additional instructions or information pertaining to the oral supplement.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $instruction
     */
    public function setInstruction($instruction)
    {
        $this->instruction = $instruction;
    }


}