<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 20.12.18
 * Time: 17:16
 */

namespace App\Service\Contacts;


interface ContactSaveServiceInterface
{
    public function save($file, $data);
}