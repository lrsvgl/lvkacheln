<?php
namespace TYPO3\Lvkacheln\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * Kacheln
 */
class Kacheln extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * bezeichnung
     *
     * @var string
     * @validate NotEmpty
     */
    protected $bezeichnung = '';
    
    /**
     * effekt
     *
     * @var int
     * @validate NotEmpty
     */
    protected $effekt = 0;
    
    /**
     * url
     *
     * @var string
     * @validate NotEmpty
     */
    protected $url = '';
    
    /**
     * text
     *
     * @var string
     * @validate NotEmpty
     */
    protected $text = '';
    
    /**
     * Bild
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @lazy
     * @validate NotEmpty
     */
    protected $bilder = null;
    
    /**
     * ueberschrift
     *
     * @var string
     * @validate NotEmpty
     */
    protected $ueberschrift = '';
    
    /**
     * __construct
     *
     * @return AbstractObject
     */
    public function __construct()
    {
        $this->bilder = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * sets the Bilder
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $bilder
     * @return void
     */
    public function setBilder($bilder)
    {
        $this->bilder = $bilder;
    }
    
    /**
     * get the Bilder
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getBilder()
    {
        return $this->bilder;
    }
    
    /**
     * Returns the effekt
     *
     * @return int $effekt
     */
    public function getEffekt()
    {
        return $this->effekt;
    }
    
    /**
     * Sets the effekt
     *
     * @param int $effekt
     * @return void
     */
    public function setEffekt($effekt)
    {
        $this->effekt = $effekt;
    }
    
    /**
     * Returns the url
     *
     * @return string $url
     */
    public function getUrl()
    {
        return $this->url;
    }
    
    /**
     * Sets the url
     *
     * @param string $url
     * @return void
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
    
    /**
     * Returns the text
     *
     * @return string $text
     */
    public function getText()
    {
        return $this->text;
    }
    
    /**
     * Sets the text
     *
     * @param string $text
     * @return void
     */
    public function setText($text)
    {
        $this->text = $text;
    }
    
    /**
     * Returns the bezeichnung
     *
     * @return string bezeichnung
     */
    public function getBezeichnung()
    {
        return $this->bezeichnung;
    }
    
    /**
     * Sets the bezeichnung
     *
     * @param string $bezeichnung
     * @return void
     */
    public function setBezeichnung($bezeichnung)
    {
        $this->bezeichnung = $bezeichnung;
    }
    
    /**
     * Returns the ueberschrift
     *
     * @return string $ueberschrift
     */
    public function getUeberschrift()
    {
        return $this->ueberschrift;
    }
    
    /**
     * Sets the ueberschrift
     *
     * @param string $ueberschrift
     * @return void
     */
    public function setUeberschrift($ueberschrift)
    {
        $this->ueberschrift = $ueberschrift;
    }

}