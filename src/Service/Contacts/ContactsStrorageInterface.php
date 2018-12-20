<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 20.12.18
 * Time: 16:30
 */

namespace App\Service\Contacts;


interface ContactsStrorageInterface
{
    public function set($data);

    public function get($key);
}