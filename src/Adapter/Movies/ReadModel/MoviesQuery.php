<?php


namespace App\Adapter\Movies\ReadModel;


use App\Entity\Movies\ReadModel\MovieDTO;
use Doctrine\DBAL\Connection;
use DateTime;
use Doctrine\DBAL\Exception;
use Generator;

class MoviesQuery
{
    public function __construct(
        private Connection $connection
    )
    {
    }

    /**
     * @throws Exception
     */
    public function getMoviesByCategory(string $category): Generator
    {
        $q = "
            SELECT
            m.id,
            m.title,
            m.created_at
            FROM movie m 
            LEFT JOIN category c on m.category_id = c.id
            WHERE c.id = :category
        ";

        foreach($this->connection->executeQuery($q[
            ])->fetchAllAssociative() as $item) {
            yield new MovieDTO(
                $item['id'],
                $item['title'],
                $item['level'],
                DateTime::createFromFormat('Y-m-d H:i', $item['created_at'])
            );
        }

    }
}