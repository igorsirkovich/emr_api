<?php namespace PHPFHIRGenerated\FHIRResource\FHIROperationDefinition;

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
 * A formal computable definition of an operation (on the RESTful interface) or a named query (using the search interaction).
 */
class FHIROperationDefinitionParameter extends FHIRBackboneElement
{
    /**
     * The name of used to identify the parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $name = null;

    /**
     * Whether this is an input or an output parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROperationParameterUse
     */
    public $use = null;

    /**
     * The minimum number of times this parameter SHALL appear in the request or response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $min = null;

    /**
     * The maximum number of times this element is permitted to appear in the request or response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $max = null;

    /**
     * Describes the meaning or use of this parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $documentation = null;

    /**
     * The type for this parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $type = null;

    /**
     * A profile the specifies the rules that this parameter must conform to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $profile = null;

    /**
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     * @var \PHPFHIRGenerated\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionBinding
     */
    public $binding = null;

    /**
     * The parts of a Tuple Parameter.
     * @var \PHPFHIRGenerated\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionParameter[]
     */
    public $part = array();

    /**
     * The name of used to identify the parameter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of used to identify the parameter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Whether this is an input or an output parameter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIROperationParameterUse
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Whether this is an input or an output parameter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIROperationParameterUse $use
     */
    public function setUse($use)
    {
        $this->use = $use;
    }

    /**
     * The minimum number of times this parameter SHALL appear in the request or response.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * The minimum number of times this parameter SHALL appear in the request or response.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $min
     */
    public function setMin($min)
    {
        $this->min = $min;
    }

    /**
     * The maximum number of times this element is permitted to appear in the request or response.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * The maximum number of times this element is permitted to appear in the request or response.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $max
     */
    public function setMax($max)
    {
        $this->max = $max;
    }

    /**
     * Describes the meaning or use of this parameter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Describes the meaning or use of this parameter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $documentation
     */
    public function setDocumentation($documentation)
    {
        $this->documentation = $documentation;
    }

    /**
     * The type for this parameter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type for this parameter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * A profile the specifies the rules that this parameter must conform to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * A profile the specifies the rules that this parameter must conform to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $profile
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
    }

    /**
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     * @return \PHPFHIRGenerated\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionBinding
     */
    public function getBinding()
    {
        return $this->binding;
    }

    /**
     * Binds to a value set if this parameter is coded (code, Coding, CodeableConcept).
     * @param \PHPFHIRGenerated\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionBinding $binding
     */
    public function setBinding($binding)
    {
        $this->binding = $binding;
    }

    /**
     * The parts of a Tuple Parameter.
     * @return \PHPFHIRGenerated\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionParameter[]
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * The parts of a Tuple Parameter.
     * @param \PHPFHIRGenerated\FHIRResource\FHIROperationDefinition\FHIROperationDefinitionParameter[] $part
     */
    public function addPart($part)
    {
        $this->part[] = $part;
    }


}