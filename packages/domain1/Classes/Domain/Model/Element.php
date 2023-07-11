<?php

namespace SCHEER\Domain1\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Element extends AbstractEntity
{
    /**
     * @var string
     */
    protected string $main_header;
    protected string $sub_header;
    protected int $picture_id;
    protected string $picture_text;
    protected string $client;
    protected string $category;

    public function getMainHeader(): string
    {
        return $this->main_header;
    }
    public function getSubHeader(): string
    {
        return $this->sub_header;
    }
    public function getPictureId(): string
    {
        return $this->picture_id;
    }
    public function getPictureText(): string
    {
        return $this->picture_text;
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