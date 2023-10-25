<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AppSettingsModel;


class AppSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AppSettingsModel::create([
            'title' => 'Nindeo-Software',
            'email' => 'admin@gmail.com',
            'phone' => '+1234567890',
            'address' => 'Fake Address, Fake City, fake State, Fake Country',
        ]);
    }
}