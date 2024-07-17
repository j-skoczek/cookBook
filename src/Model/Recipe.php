<?php

declare(strict_types=1);

namespace App\Model;

class Recipe
{
    public function __construct(
        private int $id,
        private string $name,
        private string $recipe
    ) {
    }

        public function getId(): int
        {
                return $this->id;
        }

        public function getName(): string
        {
                return $this->name;
        }

        public function getRecipe(): string
        {
                return $this->recipe;
        }
}
