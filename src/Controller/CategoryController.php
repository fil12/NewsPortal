<?php
/**
 * Created by PhpStorm.
 * User: Саша
 * Date: 15.12.2018
 * Time: 12:13
 */

namespace App\Controller;

use App\Categories\CategoriesYamlStorage;
use App\Service\Categories\CategoriesPostsServiceInterface;
use App\Service\Categories\FakeCategoriesService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends AbstractController
{
    public function index(): Response
    {
        $yamlStorage = new CategoriesYamlStorage();
        $categories = $yamlStorage->getData();

        return $this->render('categories/categories.html.twig', ['categories' => $categories]);
    }

    public function show($slug, CategoriesPostsServiceInterface $service): Response
    {
        $yamlStorage = new CategoriesYamlStorage();
        $category = $yamlStorage->get($slug);
        $categoryPosts = $service->getPosts();

        return $this->render('categories/category.html.twig', ['category' => $category, 'posts' => $categoryPosts]);
    }
}