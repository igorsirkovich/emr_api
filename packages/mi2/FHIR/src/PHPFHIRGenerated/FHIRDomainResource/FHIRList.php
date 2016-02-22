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
 * A set of information summarized from a list of other resources.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRList extends FHIRDomainResource
{
    /**
     * Identifier for the List assigned for business purposes outside the context of FHIR.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * A label for the list assigned by the author.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * This code defines the purpose of the list - why it was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The common subject (or patient) of the resources that are in the list, if there is one.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The entity responsible for deciding what the contents of the list were. Where the list was created by a human, this is the same as the author of the list.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $source = null;

    /**
     * The encounter that is the context in which this list was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * Indicates the current state of this list.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRListStatus
     */
    public $status = null;

    /**
     * The date that the list was prepared.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * What order applies to the items in the list.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $orderedBy = null;

    /**
     * How this list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRListMode
     */
    public $mode = null;

    /**
     * Comments that apply to the overall list.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $note = null;

    /**
     * Entries in this list.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRList\FHIRListEntry[]
     */
    public $entry = array();

    /**
     * If the list is empty, why the list is empty.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $emptyReason = null;

    /**
     * Identifier for the List assigned for business purposes outside the context of FHIR.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifier for the List assigned for business purposes outside the context of FHIR.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * A label for the list assigned by the author.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A label for the list assigned by the author.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * This code defines the purpose of the list - why it was created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * This code defines the purpose of the list - why it was created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * The common subject (or patient) of the resources that are in the list, if there is one.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The common subject (or patient) of the resources that are in the list, if there is one.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * The entity responsible for deciding what the contents of the list were. Where the list was created by a human, this is the same as the author of the list.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The entity responsible for deciding what the contents of the list were. Where the list was created by a human, this is the same as the author of the list.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * The encounter that is the context in which this list was created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * The encounter that is the context in which this list was created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
    }

    /**
     * Indicates the current state of this list.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRListStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates the current state of this list.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRListStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The date that the list was prepared.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date that the list was prepared.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * What order applies to the items in the list.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOrderedBy()
    {
        return $this->orderedBy;
    }

    /**
     * What order applies to the items in the list.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $orderedBy
     */
    public function setOrderedBy($orderedBy)
    {
        $this->orderedBy = $orderedBy;
    }

    /**
     * How this list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRListMode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * How this list was prepared - whether it is a working list that is suitable for being maintained on an ongoing basis, or if it represents a snapshot of a list of items from another source, or whether it is a prepared list where items may be marked as added, modified or deleted.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRListMode $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }

    /**
     * Comments that apply to the overall list.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Comments that apply to the overall list.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * Entries in this list.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRList\FHIRListEntry[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Entries in this list.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRList\FHIRListEntry[] $entry
     */
    public function addEntry($entry)
    {
        $this->entry[] = $entry;
    }

    /**
     * If the list is empty, why the list is empty.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getEmptyReason()
    {
        return $this->emptyReason;
    }

    /**
     * If the list is empty, why the list is empty.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $emptyReason
     */
    public function setEmptyReason($emptyReason)
    {
        $this->emptyReason = $emptyReason;
    }


}