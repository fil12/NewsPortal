<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 28.12.18
 * Time: 12:53.
 */

namespace App\Repository\category;

interface CategoryRepositoryInterface
{
    public function findAllIsPublished();

    public function getCategoryBySlug(string $slug);

    public function findAllPostsByCategory(string $slug);
}
