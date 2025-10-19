<?php

namespace Database\Factories;

use App\Models\Voyage;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VoyageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Voyage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $routes = [
            ['fr' => 'Casablanca - Rabat', 'ar' => 'الدار البيضاء - الرباط'],
            ['fr' => 'Marrakech - Casablanca', 'ar' => 'مراكش - الدار البيضاء'],
            ['fr' => 'Fès - Meknès', 'ar' => 'فاس - مكناس'],
            ['fr' => 'Tanger - Tétouan', 'ar' => 'طنجة - تطوان'],
            ['fr' => 'Agadir - Marrakech', 'ar' => 'أكادير - مراكش'],
            ['fr' => 'Rabat - Fès', 'ar' => 'الرباط - فاس'],
            ['fr' => 'Oujda - Fès', 'ar' => 'وجدة - فاس'],
        ];

        $route = $this->faker->randomElement($routes);
        $departTimes = ['06:00', '08:00', '10:00', '12:00', '14:00', '16:00', '18:00', '20:00'];

        return [
            'titre' => 'Voyage ' . $route['fr'],
            'agence_id' => \App\Models\Agence::factory(),
            'ville_id' => \App\Models\Ville::factory(),
            'places_id' => \App\Models\Places::factory(),
            'depart' => $this->faker->randomElement($departTimes),
            'ligne_fr' => $route['fr'],
            'ligne_ar' => $route['ar'],
            'active' => $this->faker->boolean(90), // 90% chance of being active
        ];
    }
}
