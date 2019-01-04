<?php

namespace App\Repository\category;

use App\Entity\Category;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Category|null find($id, $lockMode = null, $lockVersion = null)
 * @method Category|null findOneBy(array $criteria, array $orderBy = null)
 * @method Category[]    findAll()
 * @method Category[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryRepository extends ServiceEntityRepository implements CategoryRepositoryInterface
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Category::class);
    }

    /**
     * @return Category[] Returns an array of Category objects
     */
    public function findAllIsPublished()
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.isPublished = true')
            ->getQuery()
            ->getResult()
            ;
    }

    public function getCategoryBySlug(string $slug)
    {
        return $this->findOneBy(['slug' => $slug]);
    }

    /**
     * @return Post[] Returns  an array of Post objects by category
     */
    public function findAllPostsByCategory(string $slug)
    {
        return $this->getCategoryBySlug($slug)->getPosts();
    }
}
