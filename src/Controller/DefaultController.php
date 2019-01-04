<?php
/**
 * Created by PhpStorm.
 * User: Саша
 * Date: 15.12.2018
 * Time: 12:24.
 */

namespace App\Controller;

use App\Form\ContactType;
use App\Entity\Contact;
use App\Repository\category\CategoryRepositoryInterface;
use App\Repository\post\PostRepositoryInterface;
use App\Service\Contacts\ContactSaveServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    public function index(CategoryRepositoryInterface $categoryRepository, PostRepositoryInterface $postRepository)
    {
        $categories = $categoryRepository->findAllIsPublished();
        $posts = $postRepository->findAllWithCategories();

        return $this->render('default/index.html.twig', [
            'categories' => $categories,
            'posts' => $posts,
        ]);
    }

    public function contacts(Request $request, ContactSaveServiceInterface $contactSaveService): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $contactSaveService->save($form->getData());

            return $this->redirectToRoute('contacts');
        }

        return $this->render('default/contacts.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
