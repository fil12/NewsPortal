<?php
/**
 * Created by PhpStorm.
 * User: Саша
 * Date: 15.12.2018
 * Time: 12:24
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function index()
    {
        return $this->render('default/index.html.twig');
    }
}