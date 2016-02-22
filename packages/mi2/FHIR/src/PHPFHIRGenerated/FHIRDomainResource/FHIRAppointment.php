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
 * A booking of a healthcare event among patient(s), practitioner(s), related person(s) and/or device(s) for a specific date/time. This may result in one or more Encounter(s).
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRAppointment extends FHIRDomainResource
{
    /**
     * This records identifiers associated with this appointment concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The overall status of the Appointment. Each of the participants has their own participation status which indicates their involvement in the process, however this status indicates the shared status.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAppointmentStatus
     */
    public $status = null;

    /**
     * The type of appointment that is being booked (This may also be associated with participants for location, and/or a HealthcareService).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The reason that this appointment is being scheduled. This is more clinical than administrative.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reason = null;

    /**
     * The priority of the appointment. Can be used to make informed decisions if needing to re-prioritize appointments. (The iCal Standard specifies 0 as undefined, 1 as highest, 9 as lowest priority).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $priority = null;

    /**
     * The brief description of the appointment as would be shown on a subject line in a meeting request, or appointment list. Detailed or expanded information should be put in the comment field.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Date/Time that the appointment is to take place.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $start = null;

    /**
     * Date/Time that the appointment is to conclude.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $end = null;

    /**
     * Number of minutes that the appointment is to take. This can be less than the duration between the start and end times (where actual time of appointment is only an estimate or is a planned appointment request).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $minutesDuration = null;

    /**
     * The slot that this appointment is filling. If provided then the schedule will not be provided as slots are not recursive, and the start/end values MUST be the same as from the slot.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $slot = array();

    /**
     * Additional comments about the appointment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * List of participants involved in the appointment.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRAppointment\FHIRAppointmentParticipant[]
     */
    public $participant = array();

    /**
     * This records identifiers associated with this appointment concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this appointment concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * The overall status of the Appointment. Each of the participants has their own participation status which indicates their involvement in the process, however this status indicates the shared status.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAppointmentStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The overall status of the Appointment. Each of the participants has their own participation status which indicates their involvement in the process, however this status indicates the shared status.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAppointmentStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The type of appointment that is being booked (This may also be associated with participants for location, and/or a HealthcareService).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of appointment that is being booked (This may also be associated with participants for location, and/or a HealthcareService).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The reason that this appointment is being scheduled. This is more clinical than administrative.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * The reason that this appointment is being scheduled. This is more clinical than administrative.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * The priority of the appointment. Can be used to make informed decisions if needing to re-prioritize appointments. (The iCal Standard specifies 0 as undefined, 1 as highest, 9 as lowest priority).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * The priority of the appointment. Can be used to make informed decisions if needing to re-prioritize appointments. (The iCal Standard specifies 0 as undefined, 1 as highest, 9 as lowest priority).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * The brief description of the appointment as would be shown on a subject line in a meeting request, or appointment list. Detailed or expanded information should be put in the comment field.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The brief description of the appointment as would be shown on a subject line in a meeting request, or appointment list. Detailed or expanded information should be put in the comment field.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Date/Time that the appointment is to take place.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Date/Time that the appointment is to take place.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $start
     */
    public function setStart($start)
    {
        $this->start = $start;
    }

    /**
     * Date/Time that the appointment is to conclude.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Date/Time that the appointment is to conclude.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $end
     */
    public function setEnd($end)
    {
        $this->end = $end;
    }

    /**
     * Number of minutes that the appointment is to take. This can be less than the duration between the start and end times (where actual time of appointment is only an estimate or is a planned appointment request).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getMinutesDuration()
    {
        return $this->minutesDuration;
    }

    /**
     * Number of minutes that the appointment is to take. This can be less than the duration between the start and end times (where actual time of appointment is only an estimate or is a planned appointment request).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $minutesDuration
     */
    public function setMinutesDuration($minutesDuration)
    {
        $this->minutesDuration = $minutesDuration;
    }

    /**
     * The slot that this appointment is filling. If provided then the schedule will not be provided as slots are not recursive, and the start/end values MUST be the same as from the slot.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * The slot that this appointment is filling. If provided then the schedule will not be provided as slots are not recursive, and the start/end values MUST be the same as from the slot.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $slot
     */
    public function addSlot($slot)
    {
        $this->slot[] = $slot;
    }

    /**
     * Additional comments about the appointment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Additional comments about the appointment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * List of participants involved in the appointment.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRAppointment\FHIRAppointmentParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * List of participants involved in the appointment.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRAppointment\FHIRAppointmentParticipant[] $participant
     */
    public function addParticipant($participant)
    {
        $this->participant[] = $participant;
    }


}