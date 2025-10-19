<?php

namespace Database\Seeders;

use App\Models\Ville;
use Illuminate\Database\Seeder;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $moroccanCities = [
            ['nom_fr' => 'Casablanca', 'nom_ar' => 'الدار البيضاء', 'prix' => 150.00],
            ['nom_fr' => 'Rabat', 'nom_ar' => 'الرباط', 'prix' => 120.00],
            ['nom_fr' => 'Marrakech', 'nom_ar' => 'مراكش', 'prix' => 180.00],
            ['nom_fr' => 'Fès', 'nom_ar' => 'فاس', 'prix' => 140.00],
            ['nom_fr' => 'Agadir', 'nom_ar' => 'أكادير', 'prix' => 200.00],
            ['nom_fr' => 'Meknès', 'nom_ar' => 'مكناس', 'prix' => 130.00],
            ['nom_fr' => 'Oujda', 'nom_ar' => 'وجدة', 'prix' => 170.00],
            ['nom_fr' => 'Tétouan', 'nom_ar' => 'تطوان', 'prix' => 145.00],
            ['nom_fr' => 'Salé', 'nom_ar' => 'سلا', 'prix' => 115.00],
            ['nom_fr' => 'Kénitra', 'nom_ar' => 'القنيطرة', 'prix' => 125.00],
            ['nom_fr' => 'El Jadida', 'nom_ar' => 'الجديدة', 'prix' => 135.00],
            ['nom_fr' => 'Nador', 'nom_ar' => 'الناظور', 'prix' => 165.00],
            ['nom_fr' => 'Settat', 'nom_ar' => 'سطات', 'prix' => 110.00],
            ['nom_fr' => 'Larache', 'nom_ar' => 'العرائش', 'prix' => 155.00],
        ];

        foreach ($moroccanCities as $city) {
            Ville::firstOrCreate(
                ['nom_fr' => $city['nom_fr']],
                $city
            );
        }
    }
}
