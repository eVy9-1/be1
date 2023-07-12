<?php

namespace SCHEER\Domain1\Controller;

use Psr\Http\Message\ResponseInterface;
use SCHEER\Domain1\Domain\Repository\ElementRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ElementController extends ActionController
{
    protected ElementRepository $elementRepository;

    public function __construct(ElementRepository $elementRepository)
    {
        $this->elementRepository = $elementRepository;
    }

    public function indexAction(): ResponseInterface
    {
        $elements = $this->elementRepository->findAll();
        $data = $this->configurationManager->getContentObject();

        $this->view->assignMultiple([
            'elements' => $elements,
            'data' => $data->data
            ]);

        return $this->htmlResponse();
    }
}