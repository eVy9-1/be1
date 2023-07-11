<?php

namespace SCHEER\Domain1\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;
use SCHEER\Domain1\Domain\Model\Element;
use SCHEER\Domain1\Domain\Repository\ElementRepository;

class AddressController extends ActionController
{
    /**
     * @var ElementRepository
     */
    protected $elementRepository;

    public function __construct(ElementRepository $elementRepository)
    {
        $this->elementRepository = $elementRepository;
    }

    public function indexAction()
    {
        $this->view->assign('elements', $this->elementRepository->findAll());
    }
}