<?php

namespace App\Filament\Pages;

use App\Models\BarangayInhabitants;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Page;

class DemographStat extends Page
{
    use HasPageShield;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.demograph-stat';
     // This method calculates the statistics needed for the page
     public function getDemographicData(): array
     {
         $totalPopulation = BarangayInhabitants::count();
         $maleCount = BarangayInhabitants::where('sex', 'Male')->count();
         $femaleCount = BarangayInhabitants::where('sex', 'Female')->count();

         $ageGroups = [
             '0-17' => BarangayInhabitants::whereBetween('age', [0, 17])->count(),
             '18-35' => BarangayInhabitants::whereBetween('age', [18, 35])->count(),
             '36-60' => BarangayInhabitants::whereBetween('age', [36, 60])->count(),
             '60+' => BarangayInhabitants::where('age', '>', 60)->count(),
         ];

         return [
             'total_population' => $totalPopulation,
             'male_count' => $maleCount,
             'female_count' => $femaleCount,
             'age_groups' => $ageGroups,
         ];
     }
}