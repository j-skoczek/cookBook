<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $stuffArr = [
            'foo' => 'bar'
        ];
        return $this->render(
            'main/homepage.html.twig',
            [
                'testVar' => 123,
                'stuffArr' => $stuffArr
            ]
        );
    }
}
