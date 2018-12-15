<?php
/**
 * Created by PhpStorm.
 * User: Саша
 * Date: 15.12.2018
 * Time: 13:17
 */

namespace App\Dto;


final class Category
{
    private $image;
    private $description;
    private $title;


    public function __construct(string $description, string $title)
    {
        $this->description = $description;
        $this->title = $title;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(string $title): void
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

}