<?php

namespace SCHEER\Domain1\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Element extends AbstractEntity
{

    protected string    $mainheader;
    protected string    $subheader;
    protected string    $picturetext;
    protected string    $client;
    protected string    $category;

    protected int       $pictureid;

    public function getMainHeader(): string
    {
        return $this->mainheader;
    }
    public function getSubHeader(): string
    {
        return $this->subheader;
    }
    public function getPictureId(): int
    {
        return $this->pictureid;
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
}