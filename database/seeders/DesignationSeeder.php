<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Designation;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $designations = [
            ['name' => 'Mobile Application Dev.'],
            [ 'name' => 'Marketing Manager'],

        ];

        foreach ($designations as $designation) {
            Designation::create($designation);
        }
    }
}
