<?php

namespace Database\Seeders;

use App\Models\Voyage;
use App\Models\Ville;
use App\Models\Agence;
use App\Models\Places;
use Illuminate\Database\Seeder;

class VoyageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Destinations from Tanger (excluding Tanger itself)
        $destinations = [
            ['to' => 'Casablanca', 'ligne_fr' => 'Tanger - Casablanca', 'ligne_ar' => 'طنجة - الدار البيضاء'],
            ['to' => 'Rabat', 'ligne_fr' => 'Tanger - Rabat', 'ligne_ar' => 'طنجة - الرباط'],
            ['to' => 'Marrakech', 'ligne_fr' => 'Tanger - Marrakech', 'ligne_ar' => 'طنجة - مراكش'],
            ['to' => 'Fès', 'ligne_fr' => 'Tanger - Fès', 'ligne_ar' => 'طنجة - فاس'],
            ['to' => 'Meknès', 'ligne_fr' => 'Tanger - Meknès', 'ligne_ar' => 'طنجة - مكناس'],
            ['to' => 'Tétouan', 'ligne_fr' => 'Tanger - Tétouan', 'ligne_ar' => 'طنجة - تطوان'],
            ['to' => 'Agadir', 'ligne_fr' => 'Tanger - Agadir', 'ligne_ar' => 'طنجة - أكادير'],
            ['to' => 'Oujda', 'ligne_fr' => 'Tanger - Oujda', 'ligne_ar' => 'طنجة - وجدة'],
            ['to' => 'Salé', 'ligne_fr' => 'Tanger - Salé', 'ligne_ar' => 'طنجة - سلا'],
            ['to' => 'Kénitra', 'ligne_fr' => 'Tanger - Kénitra', 'ligne_ar' => 'طنجة - القنيطرة'],
            ['to' => 'El Jadida', 'ligne_fr' => 'Tanger - El Jadida', 'ligne_ar' => 'طنجة - الجديدة'],
            ['to' => 'Nador', 'ligne_fr' => 'Tanger - Nador', 'ligne_ar' => 'طنجة - الناظور'],
            ['to' => 'Settat', 'ligne_fr' => 'Tanger - Settat', 'ligne_ar' => 'طنجة - سطات'],
            ['to' => 'Larache', 'ligne_fr' => 'Tanger - Larache', 'ligne_ar' => 'طنجة - العرائش'],
        ];

        $departTimes = ['06:00', '09:00', '14:00', '18:00'];

        $agences = Agence::all();
        $villes = Ville::all();

        // For each destination, create one voyage per agency
        foreach ($destinations as $destination) {
            // Find the destination city
            $destinationVille = $villes->where('nom_fr', $destination['to'])->first();

            if ($destinationVille) {
                // Create one voyage for each agency
                foreach ($agences as $index => $agence) {
                    // Create a new Places record for each voyage
                    $places = Places::factory()->allAvailable()->create();

                    // Use different departure times for each agency
                    $departTime = $departTimes[$index % count($departTimes)];

                    Voyage::create([
                        'titre' => 'Voyage ' . $destination['ligne_fr'] . ' - ' . $agence->nom_fr,
                        'agence_id' => $agence->id,
                        'ville_id' => $destinationVille->id,
                        'places_id' => $places->id,
                        'depart' => $departTime,
                        'ligne_fr' => $destination['ligne_fr'],
                        'ligne_ar' => $destination['ligne_ar'],
                        'active' => true,
                    ]);
                }
            }
        }
    }
}
