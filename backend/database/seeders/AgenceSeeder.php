<?php

namespace Database\Seeders;

use App\Models\Agence;
use Illuminate\Database\Seeder;

class AgenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $moroccanAgencies = [
            ['nom_fr' => 'CTM', 'nom_ar' => 'شركة النقل المغربية', 'path' => 'bus.png'],
            ['nom_fr' => 'ALSA', 'nom_ar' => 'ألسا', 'path' => 'bus.png'],
            ['nom_fr' => 'Ghazala', 'nom_ar' => 'غزالة', 'path' => 'bus.png'],
            ['nom_fr' => 'Trans Ghazala', 'nom_ar' => 'ترانس غزالة', 'path' => 'bus.png'],
            ['nom_fr' => 'Nejme Chamal', 'nom_ar' => 'نجمة الشمال', 'path' => 'bus.png'],
        ];

        foreach ($moroccanAgencies as $agency) {
            Agence::firstOrCreate(
                ['nom_fr' => $agency['nom_fr']],
                $agency
            );
        }
    }
}
