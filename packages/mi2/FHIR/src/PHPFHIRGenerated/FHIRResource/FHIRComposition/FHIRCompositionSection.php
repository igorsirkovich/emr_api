<?php namespace PHPFHIRGenerated\FHIRResource\FHIRComposition;

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
 * A set of healthcare-related information that is assembled together into a single logical document that provides a single coherent statement of meaning, establishes its own context and that has clinical attestation with regard to who is making the statement. While a Composition defines the structure, it does not actually contain the content: rather the full content of a document is contained in a Bundle, of which the Composition is the first resource contained.
 */
class FHIRCompositionSection extends FHIRBackboneElement
{
    /**
     * The label for this particular section.  This will be part of the rendered content for the document, and is often used to build a table of contents.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * A code identifying the kind of content contained within the section. This must be consistent with the section title.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * A human-readable narrative that contains the attested content of the section, used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRNarrative
     */
    public $text = null;

    /**
     * How the entry list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $mode = null;

    /**
     * Specifies the order applied to the items in the section entries.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $orderedBy = null;

    /**
     * A reference to the actual resource from which the narrative in the section is derived.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $entry = array();

    /**
     * If the section is empty, why the list is empty. An empty section typically has some text explaining the empty reason.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $emptyReason = null;

    /**
     * A nested sub-section within this section.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionSection[]
     */
    public $section = array();

    /**
     * The label for this particular section.  This will be part of the rendered content for the document, and is often used to build a table of contents.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * The label for this particular section.  This will be part of the rendered content for the document, and is often used to build a table of contents.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * A code identifying the kind of content contained within the section. This must be consistent with the section title.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A code identifying the kind of content contained within the section. This must be consistent with the section title.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * A human-readable narrative that contains the attested content of the section, used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRNarrative
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A human-readable narrative that contains the attested content of the section, used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRNarrative $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * How the entry list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * How the entry list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }

    /**
     * Specifies the order applied to the items in the section entries.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOrderedBy()
    {
        return $this->orderedBy;
    }

    /**
     * Specifies the order applied to the items in the section entries.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $orderedBy
     */
    public function setOrderedBy($orderedBy)
    {
        $this->orderedBy = $orderedBy;
    }

    /**
     * A reference to the actual resource from which the narrative in the section is derived.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * A reference to the actual resource from which the narrative in the section is derived.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $entry
     */
    public function addEntry($entry)
    {
        $this->entry[] = $entry;
    }

    /**
     * If the section is empty, why the list is empty. An empty section typically has some text explaining the empty reason.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getEmptyReason()
    {
        return $this->emptyReason;
    }

    /**
     * If the section is empty, why the list is empty. An empty section typically has some text explaining the empty reason.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $emptyReason
     */
    public function setEmptyReason($emptyReason)
    {
        $this->emptyReason = $emptyReason;
    }

    /**
     * A nested sub-section within this section.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionSection[]
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * A nested sub-section within this section.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionSection[] $section
     */
    public function addSection($section)
    {
        $this->section[] = $section;
    }


}