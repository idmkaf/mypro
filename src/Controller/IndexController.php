<?php

namespace App\Controller;

use App\Adapter\Categories\ReadModel\CategoriesQuery;
use Doctrine\DBAL\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'index')]
    /**
     * @param CategoriesQuery $categoriesQuery
     * @return Response
     * @throws Exception
     */
    public function index(
        CategoriesQuery $categoriesQuery
    ): Response
    {
        return $this->render('index.html.twig',[
            'categories' => $categoriesQuery->findAll(),
        ]);
    }
}
