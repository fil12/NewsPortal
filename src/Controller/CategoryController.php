<?php
/**
 * Created by PhpStorm.
 * User: Саша
 * Date: 15.12.2018
 * Time: 12:13.
 */

namespace App\Controller;

use App\Repository\category\CategoryRepositoryInterface;
use App\Repository\post\PostRepositoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends AbstractController
{
    public function index(CategoryRepositoryInterface $categoryRepository, PostRepositoryInterface $postRepository): Response
    {
        $categories = $categoryRepository->findAllIsPublished();
        $posts = $postRepository->findAllWithCategories();

        return $this->render('categories/categories.html.twig', [
            'categories' => $categories,
            'posts' => $posts,
            ]);
    }

    public function show($slug, CategoryRepositoryInterface $categoryRepository): Response
    {
        $category = $categoryRepository->getCategoryBySlug($slug);
        $categoryPosts = $categoryRepository->findAllPostsByCategory($slug);

        return $this->render('categories/category.html.twig', ['category' => $category, 'posts' => $categoryPosts]);
    }
}
