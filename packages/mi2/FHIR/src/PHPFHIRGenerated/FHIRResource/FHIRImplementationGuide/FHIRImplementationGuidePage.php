<?php namespace PHPFHIRGenerated\FHIRResource\FHIRImplementationGuide;

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
 * A set of rules or how FHIR is used to solve a particular problem. This resource is used to gather all the parts of an implementation guide into a logical whole, and to publish a computable definition of all the parts.
 */
class FHIRImplementationGuidePage extends FHIRBackboneElement
{
    /**
     * The source address for the page.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $source = null;

    /**
     * A short name used to represent this page in navigational structures such as table of contents, bread crumbs, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The kind of page that this is. Some pages are autogenerated (list, example), and other kinds are of interest so that tools can navigate the user to the page of interest.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRGuidePageKind
     */
    public $kind = null;

    /**
     * For constructed pages, what kind of resources to include in the list.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public $type = array();

    /**
     * For constructed pages, a list of packages to include in the page (or else empty for everything).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $package = array();

    /**
     * The format of the page.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $format = null;

    /**
     * Nested Pages/Sections under this page.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuidePage[]
     */
    public $page = array();

    /**
     * The source address for the page.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The source address for the page.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * A short name used to represent this page in navigational structures such as table of contents, bread crumbs, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A short name used to represent this page in navigational structures such as table of contents, bread crumbs, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * The kind of page that this is. Some pages are autogenerated (list, example), and other kinds are of interest so that tools can navigate the user to the page of interest.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRGuidePageKind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * The kind of page that this is. Some pages are autogenerated (list, example), and other kinds are of interest so that tools can navigate the user to the page of interest.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRGuidePageKind $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    /**
     * For constructed pages, what kind of resources to include in the list.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * For constructed pages, what kind of resources to include in the list.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode[] $type
     */
    public function addType($type)
    {
        $this->type[] = $type;
    }

    /**
     * For constructed pages, a list of packages to include in the page (or else empty for everything).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * For constructed pages, a list of packages to include in the page (or else empty for everything).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString[] $package
     */
    public function addPackage($package)
    {
        $this->package[] = $package;
    }

    /**
     * The format of the page.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * The format of the page.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * Nested Pages/Sections under this page.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuidePage[]
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Nested Pages/Sections under this page.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImplementationGuide\FHIRImplementationGuidePage[] $page
     */
    public function addPage($page)
    {
        $this->page[] = $page;
    }


}