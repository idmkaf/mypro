<?php


namespace App\Adapter\Categories\ReadModel;

use App\Entity\Categories\ReadModel\CategoryDTO;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Exception;
use Generator;

class CategoriesQuery
{
    public function __construct(
        private Connection $connection
    )
    {
    }

    /**
     * @throws Exception
     */
    public function findAll(): Generator
    {
        $query = "
        SELECT 
        c.id,
        c.title,
        c.active
        FROM category c";

        foreach($this->connection->executeQuery($query)->fetchAllAssociative() as $item) {
            yield new CategoryDTO(
                $item['id'],
                $item['title'],
                $item['active'],
            );
        }
    }

    /**
     * @throws Exception
     */
    public function findAllActive(): Generator
    {
        $query = "
            SELECT
            c.id,
            c.title,
            c.active
            FROM category c 
            WHERE c.active = :active";

        foreach($this->connection->executeQuery($query. ['active' => true])->fetchAllAssociative() as $item) {
            yield new CategoryDTO(
                $item['id'],
                $item['title'],
                $item['active'],
            );
        }
    }
}