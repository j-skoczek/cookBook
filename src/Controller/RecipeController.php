<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\Recipe as RepositoryRecipe;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RecipeController extends AbstractController
{

    #[Route('/recipe/{id<\d+>}', name: 'app_recipe_show')]
    public function show(int $id, RepositoryRecipe $repository): Response
    {
        $recipe = $repository->getDummyRecipe();

        if(!$recipe) {
            throw $this->createNotFoundException('no recipe found with id ' . $id);
        }

        return $this->render('recipe/show.html.twig', [
            'recipe' => $recipe
        ]); 
    }
}
