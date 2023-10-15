<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{

    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name'=> $this->faker->sentence(),//Oración
            'descripcion' => $this->faker->sentence(), //Párrafo
            'foto' => $this->faker->randomElement(['verduras.jpg','frutas.jpg','platos.jpg'])
        ];
    }
}
