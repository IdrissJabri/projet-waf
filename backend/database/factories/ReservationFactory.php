<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\Voyage;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'voyage_id' => Voyage::factory(),
            'user_id' => User::factory(),
            'nombre_de_passagers' => $this->faker->numberBetween(1, 4),
            'date_reservation' => $this->faker->dateTimeBetween('-30 days', '+30 days')->format('Y-m-d'),
        ];
    }
}
