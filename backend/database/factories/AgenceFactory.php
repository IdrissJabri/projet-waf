<?php

namespace Database\Factories;

use App\Models\Agence;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgenceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agence::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $moroccanAgencies = [
            ['nom_fr' => 'CTM', 'nom_ar' => 'شركة النقل المغربية', 'path' => 'ctm-logo.png'],
            ['nom_fr' => 'Supratours', 'nom_ar' => 'سوبراتورز', 'path' => 'supratours-logo.png'],
            ['nom_fr' => 'ALSA', 'nom_ar' => 'ألسا', 'path' => 'alsa-logo.png'],
            ['nom_fr' => 'Ghazala', 'nom_ar' => 'غزالة', 'path' => 'ghazala-logo.png'],
            ['nom_fr' => 'SATAS', 'nom_ar' => 'ساتاس', 'path' => 'satas-logo.png'],
            ['nom_fr' => 'Pullman du Maroc', 'nom_ar' => 'بولمان المغرب', 'path' => 'pullman-logo.png'],
            ['nom_fr' => 'Trans Ghazala', 'nom_ar' => 'ترانس غزالة', 'path' => 'trans-ghazala-logo.png'],
        ];

        $agency = $this->faker->randomElement($moroccanAgencies);
        
        return [
            'nom_fr' => $agency['nom_fr'],
            'nom_ar' => $agency['nom_ar'],
            'path' => $agency['path'],
        ];
    }
}
