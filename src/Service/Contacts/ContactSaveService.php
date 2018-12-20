<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 20.12.18
 * Time: 17:18
 */

namespace App\Service\Contacts;

use App\Contact\JsonContactStorage;

class ContactSaveService implements ContactSaveServiceInterface
{

    public function save($file, $data)
    {
        $json = new JsonContactStorage($file, $data);

        $json->encode();
    }
}