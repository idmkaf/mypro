<?php

namespace App\Controller\Admin\Category;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddController extends AbstractController
{
    #[Route('/admin/user/add', name: 'admin_user_add')]
    /**
     * @return Response
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Admin/User/AddController.php',
        ]);
    }
}
