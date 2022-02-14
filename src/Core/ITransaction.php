<?php


namespace App\Core;


interface ITransaction
{
    public function begin();
    public function commit();
    public function rollback();
}