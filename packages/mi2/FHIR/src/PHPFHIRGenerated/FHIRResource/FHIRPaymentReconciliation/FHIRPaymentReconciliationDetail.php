<?php namespace PHPFHIRGenerated\FHIRResource\FHIRPaymentReconciliation;

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
 * This resource provides payment details and claim references supporting a bulk payment.
 */
class FHIRPaymentReconciliationDetail extends FHIRBackboneElement
{
    /**
     * Code to indicate the nature of the payment, adjustment, funds advance, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $type = null;

    /**
     * The claim or financial resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * The claim response resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $responce = null;

    /**
     * The Organization which submitted the invoice or financial transaction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $submitter = null;

    /**
     * The organization which is receiving the payment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $payee = null;

    /**
     * The date of the invoice or financial resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $date = null;

    /**
     * Amount paid for this detail.
     * @var \PHPFHIRGenerated\FHIRMoney
     */
    public $amount = null;

    /**
     * Code to indicate the nature of the payment, adjustment, funds advance, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Code to indicate the nature of the payment, adjustment, funds advance, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The claim or financial resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * The claim or financial resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }

    /**
     * The claim response resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getResponce()
    {
        return $this->responce;
    }

    /**
     * The claim response resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $responce
     */
    public function setResponce($responce)
    {
        $this->responce = $responce;
    }

    /**
     * The Organization which submitted the invoice or financial transaction.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubmitter()
    {
        return $this->submitter;
    }

    /**
     * The Organization which submitted the invoice or financial transaction.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $submitter
     */
    public function setSubmitter($submitter)
    {
        $this->submitter = $submitter;
    }

    /**
     * The organization which is receiving the payment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPayee()
    {
        return $this->payee;
    }

    /**
     * The organization which is receiving the payment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $payee
     */
    public function setPayee($payee)
    {
        $this->payee = $payee;
    }

    /**
     * The date of the invoice or financial resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date of the invoice or financial resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Amount paid for this detail.
     * @return \PHPFHIRGenerated\FHIRMoney
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Amount paid for this detail.
     * @param \PHPFHIRGenerated\FHIRMoney $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }


}