<?php
/**
 * Created by PhpStorm.
 * User: isida
 * Date: 22.04.2019
 * Time: 12:36
 */

namespace App\Interfaces;


interface Repository
{
    public function all();
    public function find(int $id);
    public function update(int$id);
    public function delete(int $id);
}