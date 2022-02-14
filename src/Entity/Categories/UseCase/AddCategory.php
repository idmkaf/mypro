<?php


namespace App\Entity\Categories\UseCase;


use App\Core\ITransaction;
use App\Entity\Categories\Category;
use App\Entity\Categories\ICategories;
use App\Entity\Categories\UseCase\AddCategory\Command;
use Throwable;

class AddCategory
{
    public function __construct(
        private ICategories $categories,
        private ITransaction $transaction
    )
    {
    }

    public function execute(Command $command)
    {
        $this->transaction->begin();

        $category = new Category(
            $command->getTitle(),
            $command->isActive()
        );

        $this->categories->add($category);

        try {
            $this->transaction->commit();
        } catch (Throwable $e) {
            $this->transaction->rollback();
        }

        $command->getResponder()->categoryCreated();
    }
}