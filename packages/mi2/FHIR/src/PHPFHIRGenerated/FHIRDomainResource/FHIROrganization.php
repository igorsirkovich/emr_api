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
 * A formally or informally recognized grouping of people or organizations formed for the purpose of achieving some form of collective action.  Includes companies, institutions, corporations, departments, community groups, healthcare practice groups, etc.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIROrganization extends FHIRDomainResource
{
    /**
     * Identifier for the organization that is used to identify the organization across multiple disparate systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Whether the organization's record is still in active use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $active = null;

    /**
     * The kind of organization that this is.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * A name associated with the organization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A contact detail for the organization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public $telecom = array();

    /**
     * An address for the organization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress[]
     */
    public $address = array();

    /**
     * The organization of which this organization forms a part.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * Contact for the organization for a certain purpose.
     * @var \PHPFHIRGenerated\FHIRResource\FHIROrganization\FHIROrganizationContact[]
     */
    public $contact = array();

    /**
     * Identifier for the organization that is used to identify the organization across multiple disparate systems.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifier for the organization that is used to identify the organization across multiple disparate systems.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * Whether the organization's record is still in active use.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Whether the organization's record is still in active use.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * The kind of organization that this is.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The kind of organization that this is.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * A name associated with the organization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A name associated with the organization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * A contact detail for the organization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * A contact detail for the organization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[] $telecom
     */
    public function addTelecom($telecom)
    {
        $this->telecom[] = $telecom;
    }

    /**
     * An address for the organization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * An address for the organization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress[] $address
     */
    public function addAddress($address)
    {
        $this->address[] = $address;
    }

    /**
     * The organization of which this organization forms a part.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * The organization of which this organization forms a part.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $partOf
     */
    public function setPartOf($partOf)
    {
        $this->partOf = $partOf;
    }

    /**
     * Contact for the organization for a certain purpose.
     * @return \PHPFHIRGenerated\FHIRResource\FHIROrganization\FHIROrganizationContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Contact for the organization for a certain purpose.
     * @param \PHPFHIRGenerated\FHIRResource\FHIROrganization\FHIROrganizationContact[] $contact
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
    }


}