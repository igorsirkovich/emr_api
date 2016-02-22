<?php namespace PHPFHIRGenerated\FHIRResource\FHIRAllergyIntolerance;

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
 * Risk of harmful or undesirable, physiological response which is unique to an individual and associated with exposure to a substance.
 */
class FHIRAllergyIntoleranceReaction extends FHIRBackboneElement
{
    /**
     * Identification of the specific substance considered to be responsible for the Adverse Reaction event. Note: the substance for a specific reaction may be different to the substance identified as the cause of the risk, but must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite substance that includes the identified substance. It must be clinically safe to only process the AllergyIntolerance.substance and ignore the AllergyIntolerance.event.substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $substance = null;

    /**
     * Statement about the degree of clinical certainty that the specific substance was the cause of the manifestation in this reaction event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCertainty
     */
    public $certainty = null;

    /**
     * Clinical symptoms and/or signs that are observed or associated with the adverse reaction event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $manifestation = array();

    /**
     * Text description about the reaction as a whole, including details of the manifestation if required.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Record of the date and/or time of the onset of the Reaction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $onset = null;

    /**
     * Clinical assessment of the severity of the reaction event as a whole, potentially considering multiple different manifestations.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceSeverity
     */
    public $severity = null;

    /**
     * Identification of the route by which the subject was exposed to the substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $exposureRoute = null;

    /**
     * Additional text about the adverse reaction event not captured in other fields.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * Identification of the specific substance considered to be responsible for the Adverse Reaction event. Note: the substance for a specific reaction may be different to the substance identified as the cause of the risk, but must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite substance that includes the identified substance. It must be clinically safe to only process the AllergyIntolerance.substance and ignore the AllergyIntolerance.event.substance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * Identification of the specific substance considered to be responsible for the Adverse Reaction event. Note: the substance for a specific reaction may be different to the substance identified as the cause of the risk, but must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite substance that includes the identified substance. It must be clinically safe to only process the AllergyIntolerance.substance and ignore the AllergyIntolerance.event.substance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $substance
     */
    public function setSubstance($substance)
    {
        $this->substance = $substance;
    }

    /**
     * Statement about the degree of clinical certainty that the specific substance was the cause of the manifestation in this reaction event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCertainty
     */
    public function getCertainty()
    {
        return $this->certainty;
    }

    /**
     * Statement about the degree of clinical certainty that the specific substance was the cause of the manifestation in this reaction event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCertainty $certainty
     */
    public function setCertainty($certainty)
    {
        $this->certainty = $certainty;
    }

    /**
     * Clinical symptoms and/or signs that are observed or associated with the adverse reaction event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getManifestation()
    {
        return $this->manifestation;
    }

    /**
     * Clinical symptoms and/or signs that are observed or associated with the adverse reaction event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $manifestation
     */
    public function addManifestation($manifestation)
    {
        $this->manifestation[] = $manifestation;
    }

    /**
     * Text description about the reaction as a whole, including details of the manifestation if required.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Text description about the reaction as a whole, including details of the manifestation if required.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Record of the date and/or time of the onset of the Reaction.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOnset()
    {
        return $this->onset;
    }

    /**
     * Record of the date and/or time of the onset of the Reaction.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $onset
     */
    public function setOnset($onset)
    {
        $this->onset = $onset;
    }

    /**
     * Clinical assessment of the severity of the reaction event as a whole, potentially considering multiple different manifestations.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceSeverity
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Clinical assessment of the severity of the reaction event as a whole, potentially considering multiple different manifestations.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceSeverity $severity
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
    }

    /**
     * Identification of the route by which the subject was exposed to the substance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getExposureRoute()
    {
        return $this->exposureRoute;
    }

    /**
     * Identification of the route by which the subject was exposed to the substance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $exposureRoute
     */
    public function setExposureRoute($exposureRoute)
    {
        $this->exposureRoute = $exposureRoute;
    }

    /**
     * Additional text about the adverse reaction event not captured in other fields.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Additional text about the adverse reaction event not captured in other fields.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }


}