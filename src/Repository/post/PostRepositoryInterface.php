<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 28.12.18
 * Time: 13:02.
 */

namespace App\Repository\post;

interface PostRepositoryInterface
{
    public function findAllWithCategories();
}
