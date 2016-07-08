<?php

namespace TYPO3\Lvkacheln\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \TYPO3\Lvkacheln\Domain\Model\Kacheln.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class KachelnTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \TYPO3\Lvkacheln\Domain\Model\Kacheln
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \TYPO3\Lvkacheln\Domain\Model\Kacheln();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getBezeichnungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getBezeichnung()
		);
	}

	/**
	 * @test
	 */
	public function setBezeichnungForStringSetsBezeichnung()
	{
		$this->subject->setBezeichnung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'bezeichnung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEffektReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setEffektForIntSetsEffekt()
	{	}

	/**
	 * @test
	 */
	public function getUrlReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getUrl()
		);
	}

	/**
	 * @test
	 */
	public function setUrlForStringSetsUrl()
	{
		$this->subject->setUrl('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'url',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getUeberschriftReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getUeberschrift()
		);
	}

	/**
	 * @test
	 */
	public function setUeberschriftForStringSetsUeberschrift()
	{
		$this->subject->setUeberschrift('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'ueberschrift',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTextReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getText()
		);
	}

	/**
	 * @test
	 */
	public function setTextForStringSetsText()
	{
		$this->subject->setText('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'text',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBilderReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getBilder()
		);
	}

	/**
	 * @test
	 */
	public function setBilderForFileReferenceSetsBilder()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setBilder($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'bilder',
			$this->subject
		);
	}
}
