<?php

namespace Database\Factories;

use App\Models\Places;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlacesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Places::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $places = [];
        
        // Initialize all seats as available (false = available, true = occupied)
        for ($i = 1; $i <= 50; $i++) {
            $places["p{$i}"] = $this->faker->boolean(20); // 20% chance of being occupied
        }
        
        return $places;
    }

    /**
     * Create a bus with all seats available
     */
    public function allAvailable()
    {
        return $this->state(function (array $attributes) {
            $places = [];
            for ($i = 1; $i <= 50; $i++) {
                $places["p{$i}"] = false;
            }
            return $places;
        });
    }

    /**
     * Create a bus with most seats occupied
     */
    public function mostlyOccupied()
    {
        return $this->state(function (array $attributes) {
            $places = [];
            for ($i = 1; $i <= 50; $i++) {
                $places["p{$i}"] = $this->faker->boolean(80); // 80% chance of being occupied
            }
            return $places;
        });
    }
}
