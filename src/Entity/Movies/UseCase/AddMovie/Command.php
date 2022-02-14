<?php


namespace App\Entity\Movies\UseCase\AddMovie;


use Doctrine\Common\Collections\ArrayCollection;

class Command
{
    public function __construct(
        private ArrayCollection $categories,
        private IResponder $responder
    )
    {
    }

    /**
     * @return ArrayCollection
     */
    public function getCategories(): ArrayCollection
    {
        return $this->categories;
    }

    /**
     * @return IResponder
     */
    public function getResponder(): IResponder
    {
        return $this->responder;
    }

}