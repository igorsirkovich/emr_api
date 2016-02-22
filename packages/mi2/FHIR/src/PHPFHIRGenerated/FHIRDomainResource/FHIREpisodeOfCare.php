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
 * An association between a patient and an organization / healthcare provider(s) during which time encounters may occur. The managing organization assumes a level of responsibility for the patient during this time.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIREpisodeOfCare extends FHIRDomainResource
{
    /**
     * Identifier(s) by which this EpisodeOfCare is known.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * planned | waitlist | active | onhold | finished | cancelled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREpisodeOfCareStatus
     */
    public $status = null;

    /**
     * The history of statuses that the EpisodeOfCare has been through (without requiring processing the history of the resource).
     * @var \PHPFHIRGenerated\FHIRResource\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory[]
     */
    public $statusHistory = array();

    /**
     * A classification of the type of encounter; e.g. specialist referral, disease management, type of funded care.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $type = array();

    /**
     * A list of conditions/problems/diagnoses that this episode of care is intended to be providing care for.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $condition = array();

    /**
     * The patient that this EpisodeOfCare applies to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The organization that has assumed the specific responsibilities for the specified duration.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $managingOrganization = null;

    /**
     * The interval during which the managing organization assumes the defined responsibility.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming referrals.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $referralRequest = array();

    /**
     * The practitioner that is the care manager/care co-ordinator for this patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $careManager = null;

    /**
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
     * @var \PHPFHIRGenerated\FHIRResource\FHIREpisodeOfCare\FHIREpisodeOfCareCareTeam[]
     */
    public $careTeam = array();

    /**
     * Identifier(s) by which this EpisodeOfCare is known.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifier(s) by which this EpisodeOfCare is known.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * planned | waitlist | active | onhold | finished | cancelled.
     * @return \PHPFHIRGenerated\FHIRElement\FHIREpisodeOfCareStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * planned | waitlist | active | onhold | finished | cancelled.
     * @param \PHPFHIRGenerated\FHIRElement\FHIREpisodeOfCareStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The history of statuses that the EpisodeOfCare has been through (without requiring processing the history of the resource).
     * @return \PHPFHIRGenerated\FHIRResource\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory[]
     */
    public function getStatusHistory()
    {
        return $this->statusHistory;
    }

    /**
     * The history of statuses that the EpisodeOfCare has been through (without requiring processing the history of the resource).
     * @param \PHPFHIRGenerated\FHIRResource\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory[] $statusHistory
     */
    public function addStatusHistory($statusHistory)
    {
        $this->statusHistory[] = $statusHistory;
    }

    /**
     * A classification of the type of encounter; e.g. specialist referral, disease management, type of funded care.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A classification of the type of encounter; e.g. specialist referral, disease management, type of funded care.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $type
     */
    public function addType($type)
    {
        $this->type[] = $type;
    }

    /**
     * A list of conditions/problems/diagnoses that this episode of care is intended to be providing care for.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * A list of conditions/problems/diagnoses that this episode of care is intended to be providing care for.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $condition
     */
    public function addCondition($condition)
    {
        $this->condition[] = $condition;
    }

    /**
     * The patient that this EpisodeOfCare applies to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The patient that this EpisodeOfCare applies to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
    }

    /**
     * The organization that has assumed the specific responsibilities for the specified duration.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * The organization that has assumed the specific responsibilities for the specified duration.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $managingOrganization
     */
    public function setManagingOrganization($managingOrganization)
    {
        $this->managingOrganization = $managingOrganization;
    }

    /**
     * The interval during which the managing organization assumes the defined responsibility.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * The interval during which the managing organization assumes the defined responsibility.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     */
    public function setPeriod($period)
    {
        $this->period = $period;
    }

    /**
     * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming referrals.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReferralRequest()
    {
        return $this->referralRequest;
    }

    /**
     * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming referrals.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $referralRequest
     */
    public function addReferralRequest($referralRequest)
    {
        $this->referralRequest[] = $referralRequest;
    }

    /**
     * The practitioner that is the care manager/care co-ordinator for this patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCareManager()
    {
        return $this->careManager;
    }

    /**
     * The practitioner that is the care manager/care co-ordinator for this patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $careManager
     */
    public function setCareManager($careManager)
    {
        $this->careManager = $careManager;
    }

    /**
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
     * @return \PHPFHIRGenerated\FHIRResource\FHIREpisodeOfCare\FHIREpisodeOfCareCareTeam[]
     */
    public function getCareTeam()
    {
        return $this->careTeam;
    }

    /**
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
     * @param \PHPFHIRGenerated\FHIRResource\FHIREpisodeOfCare\FHIREpisodeOfCareCareTeam[] $careTeam
     */
    public function addCareTeam($careTeam)
    {
        $this->careTeam[] = $careTeam;
    }


}