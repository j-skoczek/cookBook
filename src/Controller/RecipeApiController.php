<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\Recipe;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/recipe')]
class RecipeApiController extends AbstractController
{
    #[Route('/{id<\d+>}', methods:['GET'])]
    public function getRecipe(int $id, LoggerInterface $logger, Recipe $recipeRepository): Response
    {
        $logger->info('requested id ' . $id);
        $recipe = $recipeRepository->getDummyRecipe();
        return $this->json($recipe);
    }

    #[Route('/all',  methods:['GET'])]
    public function getRecipes(LoggerInterface $logger, Recipe $recipeRepository): Response
    {
        $logger->info('all recipes');
        $recipe = $recipeRepository->getDummyRecipe();
        return $this->json($recipe);
    }
}
