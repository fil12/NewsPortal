<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 20.12.18
 * Time: 17:18.
 */

namespace App\Service\Contacts;

use App\Entity\Contact;
use Doctrine\ORM\EntityManagerInterface;
use DomainException;

/**
 * Class ContactSaveService.
 */
class ContactSaveService implements ContactSaveServiceInterface
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * ContactSaveService constructor.
     *
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @param Contact $contact
     */
    public function save(Contact $contact)
    {
        if ($contact instanceof Contact) {
            $this->em->persist($contact);
            $this->em->flush();

            return true;
        }

        throw new DomainException('Data is not instanceof Contact class.');
    }
}
