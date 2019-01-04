<?php
/**
 * Created by PhpStorm.
 * User: Саша
 * Date: 15.12.2018
 * Time: 19:13.
 */

namespace App\Service\Categories;

interface CategoryStorageInterface
{
    /**
     * Stores value by key.
     *
     * @param string $key   name of the key
     * @param mixed  $value value to store
     */
    public function set($key, $value);

    /**
     * Gets value by key.
     *
     * @param string     $key     name of the key
     * @param mixed|null $default default value
     *
     * @return mixed Can be of any type: int, string, null, array, e.g.
     *               If value does not exist for provided key, $default will be returned.
     */
    public function get($key, $default = null);

    /**
     * Checks whether value is exist by key.
     *
     * @param string $key name of key
     *
     * @return bool returns true if key exists, false otherwise
     */
    public function has($key): bool;

    /**
     * Removes value by key.
     *
     * @param string $key name of key
     */
    public function remove($key);
}
