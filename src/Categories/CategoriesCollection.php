<?php
/**
 * Created by PhpStorm.
 * User: Саша
 * Date: 15.12.2018
 * Time: 13:12
 */

namespace App\Categories;

use App\Dto\Category;

class CategoriesCollection implements \IteratorAggregate
{
        private $categories;

        public function __construct(Category ...$categories)
    {
        $this->categories = $categories;
    }

        public function addCategory(Category $category): void
    {
        $this->categories[] = $category;
    }

        /**
         * {@inheritdoc}
         */
        public function getIterator(): iterable
    {
        return new \ArrayIterator($this->categories);
    }
}