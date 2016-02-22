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
 * The header for a message exchange that is either requesting or responding to an action.  The reference(s) that are the subject of the action as well as other information related to the action are typically transmitted in a bundle in which the MessageHeader resource instance is the first resource in the bundle.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMessageHeader extends FHIRDomainResource
{
    /**
     * The time that the message was sent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $timestamp = null;

    /**
     * Code that identifies the event this message represents and connects it with its definition. Events defined as part of the FHIR specification have the system value "http://hl7.org/fhir/message-events".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $event = null;

    /**
     * Information about the message that this message is a response to.  Only present if this message is a response.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderResponse
     */
    public $response = null;

    /**
     * The source application from which this message originated.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderSource
     */
    public $source = null;

    /**
     * The destination application which the message is intended for.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderDestination[]
     */
    public $destination = array();

    /**
     * The person or device that performed the data entry leading to this message. Where there is more than one candidate, pick the most proximal to the message. Can provide other enterers in extensions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $enterer = null;

    /**
     * The logical author of the message - the person or device that decided the described event should happen. Where there is more than one candidate, pick the most proximal to the MessageHeader. Can provide other authors in extensions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $author = null;

    /**
     * Allows data conveyed by a message to be addressed to a particular person or department when routing to a specific application isn't sufficient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $receiver = null;

    /**
     * The person or organization that accepts overall responsibility for the contents of the message. The implication is that the message event happened under the policies of the responsible party.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $responsible = null;

    /**
     * Coded indication of the cause for the event - indicates  a reason for the occurrence of the event that is a focus of this message.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reason = null;

    /**
     * The actual data of the message - a reference to the root/focus class of the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $data = array();

    /**
     * The time that the message was sent.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * The time that the message was sent.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * Code that identifies the event this message represents and connects it with its definition. Events defined as part of the FHIR specification have the system value "http://hl7.org/fhir/message-events".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Code that identifies the event this message represents and connects it with its definition. Events defined as part of the FHIR specification have the system value "http://hl7.org/fhir/message-events".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }

    /**
     * Information about the message that this message is a response to.  Only present if this message is a response.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderResponse
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Information about the message that this message is a response to.  Only present if this message is a response.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderResponse $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }

    /**
     * The source application from which this message originated.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderSource
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The source application from which this message originated.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderSource $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * The destination application which the message is intended for.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderDestination[]
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * The destination application which the message is intended for.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRMessageHeader\FHIRMessageHeaderDestination[] $destination
     */
    public function addDestination($destination)
    {
        $this->destination[] = $destination;
    }

    /**
     * The person or device that performed the data entry leading to this message. Where there is more than one candidate, pick the most proximal to the message. Can provide other enterers in extensions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEnterer()
    {
        return $this->enterer;
    }

    /**
     * The person or device that performed the data entry leading to this message. Where there is more than one candidate, pick the most proximal to the message. Can provide other enterers in extensions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $enterer
     */
    public function setEnterer($enterer)
    {
        $this->enterer = $enterer;
    }

    /**
     * The logical author of the message - the person or device that decided the described event should happen. Where there is more than one candidate, pick the most proximal to the MessageHeader. Can provide other authors in extensions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * The logical author of the message - the person or device that decided the described event should happen. Where there is more than one candidate, pick the most proximal to the MessageHeader. Can provide other authors in extensions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Allows data conveyed by a message to be addressed to a particular person or department when routing to a specific application isn't sufficient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Allows data conveyed by a message to be addressed to a particular person or department when routing to a specific application isn't sufficient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $receiver
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * The person or organization that accepts overall responsibility for the contents of the message. The implication is that the message event happened under the policies of the responsible party.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * The person or organization that accepts overall responsibility for the contents of the message. The implication is that the message event happened under the policies of the responsible party.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $responsible
     */
    public function setResponsible($responsible)
    {
        $this->responsible = $responsible;
    }

    /**
     * Coded indication of the cause for the event - indicates  a reason for the occurrence of the event that is a focus of this message.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Coded indication of the cause for the event - indicates  a reason for the occurrence of the event that is a focus of this message.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * The actual data of the message - a reference to the root/focus class of the event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * The actual data of the message - a reference to the root/focus class of the event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $data
     */
    public function addData($data)
    {
        $this->data[] = $data;
    }


}