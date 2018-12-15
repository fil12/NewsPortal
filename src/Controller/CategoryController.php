<?php
/**
 * Created by PhpStorm.
 * User: Саша
 * Date: 15.12.2018
 * Time: 12:13
 */

namespace App\Controller;

use App\Service\Categories\FakeCategoriesService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends AbstractController
{
    public function index(FakeCategoriesService $service): Response
    {
        $categories = $service->getCategories();

        return $this->render('categories/categories.html.twig', array('categories' => $categories));
    }

    public function show($slug, FakeCategoriesService $service): Response
    {
//        $category = $service->
    }
}