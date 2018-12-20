<?php

namespace App\Dto;


final class Post
{
    private $image;
    private $description;
    private $title;
    private $publicationDate;



    public function __construct(string $title, string $description, \DateTimeInterface $publicationDate)
    {
        $this->title = $title;
        $this->description = $description;
        $this->publicationDate = $publicationDate;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }
    public function setImage(string $src): void
    {
        $this->image = $src;
    }

    public function getImage(): string
    {
        return $this->image ?? 'default.png';
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPublicationDate(): \DateTimeInterface
    {
        return $this->publicationDate;
    }
}
