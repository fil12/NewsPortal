<?php

namespace App\Service\Categories;

use App\Dto\Post;
use App\Post\PostsCollection;

final class FakeCategoriesPostsService implements CategoriesPostsServiceInterface
{
    private const POSTS_COUNT = 6;

    /**
     * {@inheritdoc}
     */
    public function getPosts(): PostsCollection
    {
        $faker = \Faker\Factory::create();
        $collection = new PostsCollection();

        for ($i = 0; $i < self::POSTS_COUNT; ++$i) {
            $dto = new Post(
                $faker->name,
                $faker->text,
                $faker->dateTime
            );

            $dto->setImage($faker->imageUrl());

            $collection->addPost($dto);
        }

        return $collection;
    }
}
