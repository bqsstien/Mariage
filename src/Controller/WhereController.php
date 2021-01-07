<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WhereController extends AbstractController
{
    /**
     * @Route("/where", name="where")
     */
    public function index(): Response
    {
        return $this->render('where/where.html.twig');
    }
}
