<?php

namespace Database\Factories;

use App\Models\Ville;
use Illuminate\Database\Eloquent\Factories\Factory;

class VilleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ville::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $moroccanCities = [
            ['nom_fr' => 'Casablanca', 'nom_ar' => 'الدار البيضاء', 'prix' => 150.00],
            ['nom_fr' => 'Rabat', 'nom_ar' => 'الرباط', 'prix' => 120.00],
            ['nom_fr' => 'Marrakech', 'nom_ar' => 'مراكش', 'prix' => 180.00],
            ['nom_fr' => 'Fès', 'nom_ar' => 'فاس', 'prix' => 140.00],
            ['nom_fr' => 'Tanger', 'nom_ar' => 'طنجة', 'prix' => 160.00],
            ['nom_fr' => 'Agadir', 'nom_ar' => 'أكادير', 'prix' => 200.00],
            ['nom_fr' => 'Meknès', 'nom_ar' => 'مكناس', 'prix' => 130.00],
            ['nom_fr' => 'Oujda', 'nom_ar' => 'وجدة', 'prix' => 170.00],
            ['nom_fr' => 'Tétouan', 'nom_ar' => 'تطوان', 'prix' => 145.00],
            ['nom_fr' => 'Salé', 'nom_ar' => 'سلا', 'prix' => 115.00],
            ['nom_fr' => 'Kénitra', 'nom_ar' => 'القنيطرة', 'prix' => 125.00],
            ['nom_fr' => 'El Jadida', 'nom_ar' => 'الجديدة', 'prix' => 135.00],
        ];

        $city = $this->faker->randomElement($moroccanCities);
        
        return [
            'nom_fr' => $city['nom_fr'],
            'nom_ar' => $city['nom_ar'],
            'prix' => $city['prix'],
        ];
    }
}
