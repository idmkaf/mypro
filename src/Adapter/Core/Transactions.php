<?php


namespace App\Adapter\Core;


use App\Core\ITransaction;
use Doctrine\ORM\EntityManagerInterface;

class Transactions implements ITransaction
{

    /**
     * Transactions constructor.
     */
    public function __construct(
        private EntityManagerInterface $entityManager
    )
    {
    }

    public function begin()
    {
        $this->entityManager->beginTransaction();
    }
    public function commit()
    {
        $this->entityManager->flush();
        $this->entityManager->commit();
    }

    public function rollback()
    {
        $this->entityManager->rollback();
    }
}