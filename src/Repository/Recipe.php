<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\Recipe as RecipeModel;

class Recipe
{
    public function getDummyRecipe(): RecipeModel
    {
        return new RecipeModel(1, 'name', 'add some sugar and be good');
    }
}
