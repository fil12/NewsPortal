<?php
/**
 * Created by PhpStorm.
 * User: Саша
 * Date: 15.12.2018
 * Time: 18:58
 */

namespace App\Service\Categories;

use App\Post\PostsCollection;

interface CategoriesPostsServiceInterface
{
    /**
     * Gets collection of posts for home page.
     *
     * @return PostsCollection
     */
    public function getPosts(): PostsCollection;
}