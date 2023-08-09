<?php

namespace Database\Seeders;

use App\Http\Repositories\DesadvRepository;
use Illuminate\Database\Seeder;

class DesadvSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $desadvRepository = new DesadvRepository();
        $desadvRepository->loadDesadvData('DESADVdata');
    }

}
