<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 20.12.18
 * Time: 16:32
 */

namespace App\Contact;


use App\Service\Contacts\ContactsStrorageInterface;

abstract class AbstractContactsStorage implements ContactsStrorageInterface
{
    private const FILE_ROOT = __DIR__ . '/../../data/';
    protected $file;
    protected $data;

    public function __construct(string $file, $data)
    {
        $this->file = self::FILE_ROOT.$file;
        $this->data = $data;
    }

    abstract public function decode();
    abstract public function encode();

    public function set($data)
    {
        $this->encode();
    }

    public function get($key)
    {
        $decodingData = $this->decode();

        return $decodingData[$key] ?? null;
    }
}