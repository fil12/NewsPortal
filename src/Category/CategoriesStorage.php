<?php
/**
 * Created by PhpStorm.
 * User: Саша
 * Date: 15.12.2018
 * Time: 19:12
 */

namespace App\Category;


use App\Service\Categories\CategoryStorageInterface;

abstract class CategoriesStorage implements CategoryStorageInterface
{
    protected $data;

    abstract public function getData();
    abstract public function setData($data);

    public function set($key, $value)
    {
        $this->data [$key] = $value;

        $this->setData( $this->data);
    }

    public function get($key, $default = null)
    {
        $data = $this->getData();

        return $data[$key] ?? '';
    }

    public function has($key): bool
    {
       $this->data = $this->getData($key);
       return isset($this->data);
    }

    public function remove($key)
    {
        unset($this->data[$key]);
        $this->setData($this->data);
    }

    public function clear()
    {
        unset($this->data);
        $this->setData($this->data);
    }
}