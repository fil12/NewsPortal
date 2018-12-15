<?php
/**
 * Created by PhpStorm.
 * User: Саша
 * Date: 15.12.2018
 * Time: 14:26
 */

namespace App\Service\Categories;


use App\Categories\CategoriesCollection;
use App\Dto\Category;

class FakeCategoriesService
{
    private const CATEGORIES_COUNT = 3;

    /**
     * {@inheritdoc}
     */
    public function getCategories(): CategoriesCollection
    {
        $faker = \Faker\Factory::create();
        $collection = new CategoriesCollection();

        for ($i = 0; $i < self::CATEGORIES_COUNT; $i++) {
            $dto = new Category(
                $faker->text,
                $faker->colorName
            );

            $dto->setImage($faker->imageUrl());

            $collection->addCategory($dto);
        }

        return $collection;
    }
}