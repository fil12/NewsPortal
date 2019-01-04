<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 20.12.18
 * Time: 17:16.
 */

namespace App\Service\Contacts;

use App\Entity\Contact;

interface ContactSaveServiceInterface
{
    public function save(Contact $data);
}
