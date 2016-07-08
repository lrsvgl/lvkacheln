<?php
namespace TYPO3\Lvkacheln\Controller;

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2013
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
 * ************************************************************* */

/**
 * @package lvkacheln
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class KachelnController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * kachelnRepository
     *
     * @var \TYPO3\Lvkacheln\Domain\Repository\KachelnRepository
     * @inject
     */
    protected $kachelnRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $dataInterval = '1000';
        //\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($this->settings['dataInterval'],'settings');
        $kachelns = $this->kachelnRepository->findAll();
        if ($this->settings['dataInterval'] != '') {
            //\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($this->settings,'dataInterval aktiv');
            $dataInterval = $this->settings['dataInterval'];
        } else {
            $dataInterval = $this->settings['dataIntervalBasic'];
        }
        // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($kacheln, 'slide');
        $this->view->assign('dataInterval', $dataInterval);
        $this->view->assign('kachelns', $kachelns);
    }
    
    /**
     * action show
     *
     * @param \TYPO3\Lvkacheln\Domain\Model\Kacheln $kacheln
     * @return void
     */
    public function showAction(\TYPO3\Lvkacheln\Domain\Model\Kacheln $kacheln)
    {
        $this->view->assign('kacheln', $kacheln);
    }
    
    /**
     * action new
     *
     * @param \TYPO3\Lvkacheln\Domain\Model\Kacheln $newKacheln
     * @dontvalidate $newKacheln
     * @return void
     */
    public function newAction(\TYPO3\Lvkacheln\Domain\Model\Kacheln $newKacheln = NULL)
    {
        $this->view->assign('newKacheln', $newKacheln);
    }
    
    /**
     * action create
     *
     * @param \TYPO3\Lvkacheln\Domain\Model\Kacheln $newKacheln
     * @return void
     */
    public function createAction(\TYPO3\Lvkacheln\Domain\Model\Kacheln $newKacheln)
    {
        $this->kachelnRepository->add($newKacheln);
        $this->flashMessageContainer->add('Your new Kacheln was created.');
        $this->redirect('list');
    }
    
    /**
     * action edit
     *
     * @param \TYPO3\Lvkacheln\Domain\Model\Kacheln $kacheln
     * @return void
     */
    public function editAction(\TYPO3\Lvkacheln\Domain\Model\Kacheln $kacheln)
    {
        $this->view->assign('kacheln', $kacheln);
    }
    
    /**
     * action update
     *
     * @param \TYPO3\Lvkacheln\Domain\Model\Kacheln $kacheln
     * @return void
     */
    public function updateAction(\TYPO3\Lvkacheln\Domain\Model\Kacheln $kacheln)
    {
        $this->kachelnRepository->update($kacheln);
        $this->flashMessageContainer->add('Your Kacheln was updated.');
        $this->redirect('list');
    }
    
    /**
     * action delete
     *
     * @param \TYPO3\Lvkacheln\Domain\Model\Kacheln $kacheln
     * @return void
     */
    public function deleteAction(\TYPO3\Lvkacheln\Domain\Model\Kacheln $kacheln)
    {
        $this->kachelnRepository->remove($kacheln);
        $this->flashMessageContainer->add('Your Kacheln was removed.');
        $this->redirect('list');
    }
    
    /**
     * action singleview
     *
     * @return void
     */
    public function singleviewAction()
    {
        $dataInterval = '1000';
        $dataInterval = $this->settings['dataInterval'];
        $kachelnUid = $this->settings['kachelnUid'];
        //\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($this->settings,'settings');
        $kacheln = $this->kachelnRepository->findByUid($kachelnUid);
        // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($kacheln, 'slide');
        $this->view->assign('dataInterval', $dataInterval);
        $this->view->assign('kacheln', $kacheln);
    }

}