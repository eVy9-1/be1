<?php

namespace SCHEER\Domain1\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Element extends AbstractEntity
{

    protected string $mainheader;
    protected string $subheader;
    protected string $picturetext;
    protected string $client;
    protected string $category;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     */
    protected ObjectStorage $picture;

    public function __construct()
    {
        $this->picture = new ObjectStorage();
    }

    public function getMainHeader(): string
    {
        return $this->mainheader;
    }

    public function getSubHeader(): string
    {
        return $this->subheader;
    }

    public function getPicture(): ObjectStorage
    {
        return $this->picture;
    }

    public function getPictureText(): string
    {
        return $this->picturetext;
    }

    public function getClient(): string
    {
        return $this->client;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setPicture(ObjectStorage $picture): void {
        $this->picture = $picture;
    }
}