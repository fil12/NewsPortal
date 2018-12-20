<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 20.12.18
 * Time: 16:33
 */

namespace App\Contact;


final class JsonContactStorage extends AbstractContactsStorage
{
    public function __construct(string $file, $data)
    {
        parent::__construct($file, $data);
    }

    public function decode()
    {
        $json = json_decode($this->file, true);

        return $json;
    }

    public function encode()
    {
        $json = json_encode($this->data);

        file_put_contents($this->file, $json,FILE_APPEND | LOCK_EX);
    }
}