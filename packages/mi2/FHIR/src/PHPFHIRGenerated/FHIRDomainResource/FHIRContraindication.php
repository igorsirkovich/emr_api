<?php namespace PHPFHIRGenerated\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient.  E.g. Drug-drug interaction, Ineffective treatment frequency, Procedure-condition conflict, etc.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRContraindication extends FHIRDomainResource
{
    /**
     * Indicates the patient whose record the contraindication is associated with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Identifies the general type of issue identified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * Indicates the degree of importance associated with the identified issue based on the potential impact on the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContraindicationSeverity
     */
    public $severity = null;

    /**
     * Indicates the resource representing the current activity or proposed activity that.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $implicated = array();

    /**
     * A textual explanation of the contraindication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $detail = null;

    /**
     * The date or date-time when the contraindication was initially identified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Individual or device responsible for the issue being raised.  For example, a decision support application or a pharmacist conducting a medication review.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $author = null;

    /**
     * Business identifier associated with the contraindication record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The literature, knowledge-base or similar reference that describes the propensity for the contraindication identified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $reference = null;

    /**
     * Indicates an action that has been taken or is committed to to reduce or eliminate the likelihood of the risk identified by the contraindication from manifesting.  Can also reflect an observation of known mitigating factors that may reduce/eliminate the need for any action.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContraindication\FHIRContraindicationMitigation[]
     */
    public $mitigation = array();

    /**
     * Indicates the patient whose record the contraindication is associated with.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Indicates the patient whose record the contraindication is associated with.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
    }

    /**
     * Identifies the general type of issue identified.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Identifies the general type of issue identified.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * Indicates the degree of importance associated with the identified issue based on the potential impact on the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContraindicationSeverity
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Indicates the degree of importance associated with the identified issue based on the potential impact on the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContraindicationSeverity $severity
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
    }

    /**
     * Indicates the resource representing the current activity or proposed activity that.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getImplicated()
    {
        return $this->implicated;
    }

    /**
     * Indicates the resource representing the current activity or proposed activity that.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $implicated
     */
    public function addImplicated($implicated)
    {
        $this->implicated[] = $implicated;
    }

    /**
     * A textual explanation of the contraindication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * A textual explanation of the contraindication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $detail
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
    }

    /**
     * The date or date-time when the contraindication was initially identified.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date or date-time when the contraindication was initially identified.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Individual or device responsible for the issue being raised.  For example, a decision support application or a pharmacist conducting a medication review.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Individual or device responsible for the issue being raised.  For example, a decision support application or a pharmacist conducting a medication review.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Business identifier associated with the contraindication record.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Business identifier associated with the contraindication record.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * The literature, knowledge-base or similar reference that describes the propensity for the contraindication identified.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * The literature, knowledge-base or similar reference that describes the propensity for the contraindication identified.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * Indicates an action that has been taken or is committed to to reduce or eliminate the likelihood of the risk identified by the contraindication from manifesting.  Can also reflect an observation of known mitigating factors that may reduce/eliminate the need for any action.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContraindication\FHIRContraindicationMitigation[]
     */
    public function getMitigation()
    {
        return $this->mitigation;
    }

    /**
     * Indicates an action that has been taken or is committed to to reduce or eliminate the likelihood of the risk identified by the contraindication from manifesting.  Can also reflect an observation of known mitigating factors that may reduce/eliminate the need for any action.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContraindication\FHIRContraindicationMitigation[] $mitigation
     */
    public function addMitigation($mitigation)
    {
        $this->mitigation[] = $mitigation;
    }


}