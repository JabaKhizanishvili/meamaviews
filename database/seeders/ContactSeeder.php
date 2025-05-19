<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Contact::create([
            'email' => 'info@yoursite.com',
            'phone' => '+995 123 456 789',
            'address' => 'თბილისი, საქართველო',
        ]);

    }
}
