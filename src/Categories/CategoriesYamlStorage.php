<?php
/**
 * Created by PhpStorm.
 * User: Саша
 * Date: 15.12.2018
 * Time: 19:21
 */

namespace App\Categories;

use Symfony\Component\Yaml\Yaml;

class CategoriesYamlStorage extends CategoriesStorage
{
    private const FILE_NAME = __DIR__.'/data/categories.yml';

    /**
     * @param $key
     * @param $value
     * @return mixed|void
     */
    public function setData($data)
    {
        $yaml = Yaml::dump($data);
        file_put_contents(self::FILE_NAME, $yaml);
    }

    /**
     * @param $key
     * @param null $default
     * @return mixed|string
     */
    public function getData()
    {
        $data = Yaml::parseFile(self::FILE_NAME);
        return \is_array($data) ? $data : [];
    }
}