<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    public function run(): void
    {
        $packages = [
            ['name' => 'Birthday Decorations', 'type' => 'decorations', 'price' => 20000, 'description' => 'Balloons, banners, and cake table.'],
            ['name' => 'Corporate Setup', 'type' => 'decorations', 'price' => 35000, 'description' => 'Elegant table setup and company logo banners.'],
            ['name' => 'Buffet for 20 Guests', 'type' => 'food', 'price' => 50000, 'description' => 'Variety of dishes served buffet style.'],
            ['name' => 'Cocktail Drinks', 'type' => 'drinks', 'price' => 15000, 'description' => 'Assorted soft drinks and cocktails.'],
            ['name' => 'Premium Sound & Lighting', 'type' => 'decorations', 'price' => 30000, 'description' => 'Professional sound and lighting setup.'],
            ['name' => 'Kids Party Snacks', 'type' => 'food', 'price' => 10000, 'description' => 'Snacks and finger foods for kids.'],
            ['name' => 'Wine Package', 'type' => 'drinks', 'price' => 25000, 'description' => 'Selection of fine wines for your event.'],
        ];

        foreach ($packages as $package) {
            Package::create($package);
        }
    }
}
