<?php


namespace App\Entity\Categories\UseCase;


use App\Core\ITransaction;
use App\Entity\Categories\UseCase\EditCategory\Command;
use Throwable;

class EditCategory
{
    public function __construct(
        private ITransaction $transaction
    )
    {
    }

    public function execute(Command $command)
    {
        $this->transaction->begin();

        $command->getCategory()->edit(
            $command->getTitle(),
            $command->isActive()
        );

        try {
            $this->transaction->commit();
        } catch (Throwable $e)
        {
            $this->transaction->rollback();
            throw $e;
        }
    }
}